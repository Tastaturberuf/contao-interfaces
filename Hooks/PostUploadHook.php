<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


interface PostUploadHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/postUpload/
     */
    public function onPostUpload(array $files): void;

}
