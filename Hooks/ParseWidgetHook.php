<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


use Contao\Widget;


interface ParseWidgetHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/parseWidget/
     */
    public function onParseWidget(string $buffer, Widget $widget): string;

}
