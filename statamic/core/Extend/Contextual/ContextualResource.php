<?php

namespace Statamic\Extend\Contextual;

use Statamic\API\URL;
use Statamic\API\Addon;

class ContextualResource extends ContextualObject
{
    /**
     * Output the URL to the resource
     *
     * @param  string $path  Relative path to the resource
     * @return string
     */
    public function url($path)
    {
        // Allow addons to modify the path to the asset. Perhaps they'd like to get a
        // versioned filename via a manifest file generated by their build process.
        if (app()->bound($key = $this->context . '.resolve-resource-path')) {
            $callback = app($key);
            $path = $callback($path, Addon::create($this->context));
        }

        return URL::prependSiteRoot(
            URL::assemble(RESOURCES_ROUTE, 'addons', $this->context, $path)
        );
    }

    /**
     * Output the URL to the resource in its appropriate HTML tag
     *
     * @param  string $path  Relative path to the resource
     * @return string
     */
    public function tag($path)
    {
        return $this->url($path);
    }

    /**
     * Output the resource content inline
     *
     * @param  string $str  Resource content
     * @return string
     */
    public function inline($str)
    {
        return $str;
    }
}
