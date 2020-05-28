<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


interface PostDownloadHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/postDownload/
     */
    public function onPostDownload(string $file): void;

}
