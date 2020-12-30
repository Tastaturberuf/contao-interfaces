<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


interface GetLanguagesHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/getLanguages/
     */
    public function onGetLanguages(array &$compiledLanguages, array $languages, array $langsNative, bool $installedOnly): void;

}
