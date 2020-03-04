<?php

/*
 * This file is part of PhpSpec, A php toolset to drive emergent
 * design by specification.
 *
 * (c) Marcello Duarte <marcello.duarte@gmail.com>
 * (c) Konstantin Kudryashov <ever.zet@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PhpSpec\Runner\Maintainer;

use PhpSpec\CodeAnalysis\AccessInspectorInterface;
use PhpSpec\Loader\Node\ExampleNode;
use PhpSpec\SpecificationInterface;
use PhpSpec\Runner\MatcherManager;
use PhpSpec\Runner\CollaboratorManager;
use PhpSpec\Formatter\Presenter\PresenterInterface;
use PhpSpec\Wrapper\Unwrapper;
use PhpSpec\Wrapper\Wrapper;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

class SubjectMaintainer implements MaintainerInterface
{
    /**
     * @var PresenterInterface
     */
    private $presenter;
    /**
     * @var Unwrapper
     */
    private $unwrapper;
    /**
     * @var EventDispatcherInterface
     */
    private $dispatcher;
    /**
     * @var AccessInspectorInterface
     */
    private $accessInspector;

    /**
     * @param PresenterInterface       $presenter
     * @param Unwrapper                $unwrapper
     * @param EventDispatcherInterface $dispatcher
     */
    public function __construct(
        PresenterInterface $presenter,
        Unwrapper $unwrapper,
        EventDispatcherInterface $dispatcher,
        AccessInspectorInterface $accessInspector
    ) {
        $this->presenter = $presenter;
        $this->unwrapper = $unwrapper;
        $this->dispatcher = $dispatcher;
        $this->accessInspector = $accessInspector;
    }

    /**
     * @param ExampleNode $example
     *
     * @return boolean
     */
    public function supports(ExampleNode $example)
    {
        return $example->getSpecification()->getClassReflection()->implementsInterface(
            'PhpSpec\Wrapper\SubjectContainerInterface'
        );
    }

    /**
     * @param ExampleNode            $example
     * @param SpecificationInterface $context
     * @param MatcherManager         $matchers
     * @param CollaboratorManager    $collaborators
     */
    public function prepare(
        ExampleNode $example,
        SpecificationInterface $context,
        MatcherManager $matchers,
        CollaboratorManager $collaborators
    ) {
        $subjectFactory = new Wrapper($matchers, $this->presenter, $this->dispatcher, $example, $this->accessInspector);
        $subject = $subjectFactory->wrap(null);
        $subject->beAnInstanceOf(
            $example->getSpecification()->getResource()->getSrcClassname()
        );

        $context->setSpecificationSubject($subject);
    }

    /**
     * @param ExampleNode            $example
     * @param SpecificationInterface $context
     * @param MatcherManager         $matchers
     * @param CollaboratorManager    $collaborators
     */
    public function teardown(
        ExampleNode $example,
        SpecificationInterface $context,
        MatcherManager $matchers,
        CollaboratorManager $collaborators
    ) {
    }

    /**
     * @return int
     */
    public function getPriority()
    {
        return 100;
    }
}
