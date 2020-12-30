<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


use Contao\ArticleModel;


interface GetArticleHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/getArticle/
     */
    public function onGetArticle(ArticleModel $article): void;

}
