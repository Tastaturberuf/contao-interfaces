<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Callbacks;


use Contao\DataContainer;


interface OnInvalidateCacheTagsCallback
{

    /**
     * @see https://docs.contao.org/dev/reference/dca/callbacks/#config-oninvalidate-cache-tags
     * @since 4.7
     */
    public function onInvalidateCacheTagsCallback(DataContainer $dc, array $tags): array;

}
