<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


use Contao\ZipReader;


interface ExtractThemeFilesHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/extractThemeFiles/
     */
    public function onExtractThemeFiles(\DOMDocument $xml, ZipReader $zipArchive, int $themeId, array $mapper): void;

}
