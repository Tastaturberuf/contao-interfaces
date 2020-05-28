<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


interface OutputFrontendTemplateHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/outputFrontendTemplate/
     */
    public function onOutputFrontendTemplate(string $buffer, string $template): string;

}
