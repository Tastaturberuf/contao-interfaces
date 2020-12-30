<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


use Contao\ZipWriter;


interface ExportThemeHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/exportTheme/
     */
    public function onExportTheme(\DOMDocument $xml, ZipWriter $zipArchive, int $themeId): void;

}
