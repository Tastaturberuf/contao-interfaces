<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


use Contao\Image;


interface ExecuteResizeHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/executeResize/
     * @deprecated Using the executeResize and getImage hooks has been deprecated and will no longer work in Contao 5.0.
     * Use the contao.image.resizer service instead.
     */
    public function onExecuteResize(Image $image): ?string;

}
