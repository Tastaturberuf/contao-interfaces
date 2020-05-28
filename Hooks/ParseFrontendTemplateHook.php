<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


interface ParseFrontendTemplateHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/parseFrontendTemplate/
     */
    public function onParseFrontendTemplate(string $buffer, string $template): string;

}
