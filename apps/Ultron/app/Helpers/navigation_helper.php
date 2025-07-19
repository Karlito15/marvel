<?php

declare(strict_types = 1);

// CodeIgniter Navigation Helpers

if (! function_exists('generateHTML')) {
    /**
     * Generate HTML code for navigation
     *
     * @param array $menu
     * @return string
     */
    function generateHTML(array $menu): string
    {
        $html   = '';
        $uri    = service('uri');
        $level1 = ($uri->getSegment(1)) ? $uri->getSegment(1) : null;
        $level2 = (!is_null($level1) && $uri->getSegment(2)) ? '/' . $level1 . '/' . $uri->getSegment(2) : null;
        $level3 = (!is_null($level2) && $uri->getSegment(3)) ? '/' . $level2 . '/' . $uri->getSegment(3) : null;
        $li     = '<li%3$s><a href="%1$s" title="%2$s">%2$s</a></li>'. "\n";

        foreach ($menu as $item) {
            if ($level2 == $item['link']) {
                $html .= sprintf($li, $item['link'], $item['text'], ' class="active"');
            } else {
                $html .= sprintf($li, $item['link'], $item['text'], null);
            }
        }
        return $html;
    }
}
