<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Routing\Annotation;

/**
 * Annotation class for @Route().
 *
 * @Annotation
 * @Target({"CLASS", "METHOD"})
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
class Route
{
    private $path;
    private $name;
    private $requirements = array();
    private $options = array();
    private $defaults = array();
    private $host;
    private $methods = array();
    private $schemes = array();
    private $condition;

    /**
     * @param array $data An array of key/value parameters
     *
     * @throws \BadMethodCallException
     */
    public function __construct(array $data)
    {
        if (isset($data['value'])) {
            $data['path'] = $data['value'];
            unset($data['value']);
        }

        foreach ($data as $key => $value) {
            $method = 'set'.str_replace('_', '', $key);
            if (!method_exists($this, $method)) {
                throw new \BadMethodCallException(sprintf('Unknown property "%s" on annotation "%s".', $key, get_class($this)));
            }
            $this->$method($value);
        }
    }

    /**
     * @deprecated since version 2.2, to be removed in 3.0. Use setPath instead.
     */
    public function setPattern($pattern)
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since Symfony 2.2 and will be removed in 3.0. Use the setPath() method instead and use the "path" option instead of the "pattern" option in the route definition.', E_USER_DEPRECATED);

        $this->path = $pattern;
    }

    /**
     * @deprecated since version 2.2, to be removed in 3.0. Use getPath instead.
     */
    public function getPattern()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since Symfony 2.2 and will be removed in 3.0. Use the getPath() method instead and use the "path" option instead of the "pattern" option in the route definition.', E_USER_DEPRECATED);

        return $this->path;
    }

    public function setPath($path)
    {
        $this->path = $path;
    }

    public function getPath()
    {
        return $this->path;
    }

    public function setHost($pattern)
    {
        $this->host = $pattern;
    }

    public function getHost()
    {
        return $this->host;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setRequirements($requirements)
    {
        if (isset($requirements['_method'])) {
            if (0 === count($this->methods)) {
                $this->methods = explode('|', $requirements['_method']);
            }

            @trigger_error('The "_method" requirement is deprecated since Symfony 2.2 and will be removed in 3.0. Use the "methods" option instead.', E_USER_DEPRECATED);
        }

        if (isset($requirements['_scheme'])) {
            if (0 === count($this->schemes)) {
                $this->schemes = explode('|', $requirements['_scheme']);
            }

            @trigger_error('The "_scheme" requirement is deprecated since Symfony 2.2 and will be removed in 3.0. Use the "schemes" option instead.', E_USER_DEPRECATED);
        }

        $this->requirements = $requirements;
    }

    public function getRequirements()
    {
        return $this->requirements;
    }

    public function setOptions($options)
    {
        $this->options = $options;
    }

    public function getOptions()
    {
        return $this->options;
    }

    public function setDefaults($defaults)
    {
        $this->defaults = $defaults;
    }

    public function getDefaults()
    {
        return $this->defaults;
    }

    public function setSchemes($schemes)
    {
        $this->schemes = is_array($schemes) ? $schemes : array($schemes);
    }

    public function getSchemes()
    {
        return $this->schemes;
    }

    public function setMethods($methods)
    {
        $this->methods = is_array($methods) ? $methods : array($methods);
    }

    public function getMethods()
    {
        return $this->methods;
    }

    public function setCondition($condition)
    {
        $this->condition = $condition;
    }

    public function getCondition()
    {
        return $this->condition;
    }
}
