<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


use Contao\File;
use Contao\Image;


interface GetImageHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/getImage/
     * @deprecated Using the executeResize and getImage hooks has been deprecated and will no longer work in Contao 5.0.
     * Use the contao.image.resizer service instead.
     */
    public function onGetImage(
        string $originalPath,
        int $width,
        int $height,
        string $mode,
        string $cacheName,
        File $file,
        string $targetPath,
        Image $imageObject
    ): ?string;

}
