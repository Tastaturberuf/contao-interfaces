<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


interface OutputBackendTemplateHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/outputBackendTemplate/
     */
    public function onOutputBackendTemplate(string $buffer, string $template): string;

}
