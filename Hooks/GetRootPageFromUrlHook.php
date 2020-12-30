<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


use Contao\PageModel;


interface GetRootPageFromUrlHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/getRootPageFromUrl/
     */
    public function onGetRootPageFromUrl(): ?PageModel;

}
