<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


use Contao\ZipReader;


interface CompareThemeFilesHook
{

    /**
     * @noinspection PhpComposerExtensionStubsInspection
     * @see https://docs.contao.org/dev/reference/hooks/compareThemeFiles/
     */
    public function onCompareThemeFiles(\DOMDocument $xml, ZipReader $zip): string;

}
