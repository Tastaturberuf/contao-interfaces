<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


interface GetSearchablePagesHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/getSearchablePages/
     */
    public function onGetSearchablePages(array $pages, int $rootId = null, bool $isSitemap = false, string $language = null): array;

}
