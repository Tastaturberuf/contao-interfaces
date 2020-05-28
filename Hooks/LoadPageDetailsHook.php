<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


use Contao\PageModel;


interface LoadPageDetailsHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/loadPageDetails/
     */
    public function onLoadPageDetails(array $parentModels, PageModel $page): void;

}
