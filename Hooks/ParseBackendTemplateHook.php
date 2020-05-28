<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


interface ParseBackendTemplateHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/parseBackendTemplate/
     */
    public function onParseBackendTemplate(string $buffer, string $template): string;

}
