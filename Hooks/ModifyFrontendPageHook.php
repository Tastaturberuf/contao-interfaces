<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


interface ModifyFrontendPageHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/modifyFrontendPage/
     */
    public function onModifyFrontendPage(string $buffer, string $templateName): string;

}
