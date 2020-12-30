<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


interface GetCombinedFileHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/getCombinedFile/
     */
    public function onGetCombinedFile(string $content, string $key, string $mode, array $file): string;

}
