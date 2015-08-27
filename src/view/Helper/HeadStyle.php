<?php
/**
 * Framework Component
 */

/**
 * @namespace
 */
namespace view\Helper;

return
    /**
     * Set or generate <style> code for <head>
     *
     * @param string $style
     * @param string $media
     * @return string|null
     */
    function ($style = null) {
            // it's just alias to style() call
            return $this->style($style);
    };