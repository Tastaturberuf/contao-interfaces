<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


use Contao\Module;


interface CustomizeSearchHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/customizeSearch/
     */
    public function onCustomizeSearch(array &$pageIds, string $keywords, string $queryType, bool $fuzzy, Module $module): void;

}
