<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


interface LoadLanguageFileHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/loadLanguageFile/
     */
    public function onLoadLanguageFile(string $name, string $currentLanguage, string $cacheKey): void;

}
