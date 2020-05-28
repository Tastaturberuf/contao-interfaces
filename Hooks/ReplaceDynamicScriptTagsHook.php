<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


interface ReplaceDynamicScriptTagsHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/replaceDynamicScriptTags/
     */
    public function onReplaceDynamicScriptTags(string $buffer): string;

}
