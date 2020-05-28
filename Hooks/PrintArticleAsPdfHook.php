<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


use Contao\ModuleArticle;


interface PrintArticleAsPdfHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/printArticleAsPdf/
     */
    public function onPrintArticleAsPdf(string $content, ModuleArticle $module): void;

}
