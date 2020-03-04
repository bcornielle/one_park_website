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

namespace PhpSpec\Formatter\Html;

use PhpSpec\Event\ExampleEvent;
use PhpSpec\Formatter\Template as TemplateInterface;

class ReportSkippedItem
{
    /**
     * @var TemplateInterface
     */
    private $template;
    /**
     * @var ExampleEvent
     */
    private $event;

    /**
     * @param TemplateInterface $template
     * @param ExampleEvent      $event
     */
    public function __construct(TemplateInterface $template, ExampleEvent $event)
    {
        $this->template = $template;
        $this->event    = $event;
    }

    /**
     *
     */
    public function write()
    {
        $this->template->render(Template::DIR.'/Template/ReportSkipped.html', array(
            'title' => htmlentities(strip_tags($this->event->getTitle())),
            'message' => htmlentities(strip_tags($this->event->getMessage())),
        ));
    }
}
