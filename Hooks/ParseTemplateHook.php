<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


use Contao\Template;


interface ParseTemplateHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/parseTemplate/
     */
    public function onParseTemplate(Template $template): void;

}
