<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


use Contao\Widget;


interface AddCustomRegexpHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/addCustomRegexp/
     */
    public function onAddCustomRegexp(string $regexp, $input, Widget $widget): bool;

}
