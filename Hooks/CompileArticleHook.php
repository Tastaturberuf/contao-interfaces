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


interface CompileArticleHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/compileArticle/
     */
    public function onCompileArticle(FrontendTemplate $template, array $data, Module $module): void;

}
