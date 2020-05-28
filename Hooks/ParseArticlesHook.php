<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


use Contao\FrontendTemplate;
use Contao\Module;


interface ParseArticlesHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/parseArticles/
     */
    public function onParseArticles(FrontendTemplate $template, array $newsEntry, Module $module): void;

}
