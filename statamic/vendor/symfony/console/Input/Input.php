<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Console\Input;

/**
 * Input is the base class for all concrete Input classes.
 *
 * Three concrete classes are provided by default:
 *
 *  * `ArgvInput`: The input comes from the CLI arguments (argv)
 *  * `StringInput`: The input is provided as a string
 *  * `ArrayInput`: The input is provided as an array
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
abstract class Input implements InputInterface
{
    protected $definition;
    protected $options = array();
    protected $arguments = array();
    protected $interactive = true;

    public function __construct(InputDefinition $definition = null)
    {
        if (null === $definition) {
            $this->definition = new InputDefinition();
        } else {
            $this->bind($definition);
            $this->validate();
        }
    }

    /**
     * {@inheritdoc}
     */
    public function bind(InputDefinition $definition)
    {
        $this->arguments = array();
        $this->options = array();
        $this->definition = $definition;

        $this->parse();
    }

    /**
     * Processes command line arguments.
     */
    abstract protected function parse();

    /**
     * {@inheritdoc}
     */
    public function validate()
    {
        $definition = $this->definition;
        $givenArguments = $this->arguments;

        $missingArguments = array_filter(array_keys($definition->getArguments()), function ($argument) use ($definition, $givenArguments) {
            return !array_key_exists($argument, $givenArguments) && $definition->getArgument($argument)->isRequired();
        });

        if (count($missingArguments) > 0) {
            throw new \RuntimeException(sprintf('Not enough arguments (missing: "%s").', implode(', ', $missingArguments)));
        }
    }

    /**
     * {@inheritdoc}
     */
    public function isInteractive()
    {
        return $this->interactive;
    }

    /**
     * {@inheritdoc}
     */
    public function setInteractive($interactive)
    {
        $this->interactive = (bool) $interactive;
    }

    /**
     * {@inheritdoc}
     */
    public function getArguments()
    {
        return array_merge($this->definition->getArgumentDefaults(), $this->arguments);
    }

    /**
     * {@inheritdoc}
     */
    public function getArgument($name)
    {
        if (!$this->definition->hasArgument($name)) {
            throw new \InvalidArgumentException(sprintf('The "%s" argument does not exist.', $name));
        }

        return isset($this->arguments[$name]) ? $this->arguments[$name] : $this->definition->getArgument($name)->getDefault();
    }

    /**
     * {@inheritdoc}
     */
    public function setArgument($name, $value)
    {
        if (!$this->definition->hasArgument($name)) {
            throw new \InvalidArgumentException(sprintf('The "%s" argument does not exist.', $name));
        }

        $this->arguments[$name] = $value;
    }

    /**
     * {@inheritdoc}
     */
    public function hasArgument($name)
    {
        return $this->definition->hasArgument($name);
    }

    /**
     * {@inheritdoc}
     */
    public function getOptions()
    {
        return array_merge($this->definition->getOptionDefaults(), $this->options);
    }

    /**
     * {@inheritdoc}
     */
    public function getOption($name)
    {
        if (!$this->definition->hasOption($name)) {
            throw new \InvalidArgumentException(sprintf('The "%s" option does not exist.', $name));
        }

        return isset($this->options[$name]) ? $this->options[$name] : $this->definition->getOption($name)->getDefault();
    }

    /**
     * {@inheritdoc}
     */
    public function setOption($name, $value)
    {
        if (!$this->definition->hasOption($name)) {
            throw new \InvalidArgumentException(sprintf('The "%s" option does not exist.', $name));
        }

        $this->options[$name] = $value;
    }

    /**
     * {@inheritdoc}
     */
    public function hasOption($name)
    {
        return $this->definition->hasOption($name);
    }

    /**
     * Escapes a token through escapeshellarg if it contains unsafe chars.
     *
     * @param string $token
     *
     * @return string
     */
    public function escapeToken($token)
    {
        return preg_match('{^[\w-]+$}', $token) ? $token : escapeshellarg($token);
    }
}
