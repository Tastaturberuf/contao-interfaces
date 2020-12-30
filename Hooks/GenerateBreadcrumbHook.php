<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


use Contao\Module;


interface GenerateBreadcrumbHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/generateBreadcrumb/
     */
    public function onGenerateBreadcrumb(array $items, Module $module): array;

}
