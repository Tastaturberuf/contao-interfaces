<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


interface GetArticlesHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/getArticles/
     */
    public function onGetArticles(int $pageId, string $column): ?string;

}
