<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Callbacks;


interface OnRestoreVersionCallback
{

    /**
     * @see https://docs.contao.org/dev/reference/dca/callbacks/#config-onrestore-version
     * @deprecated This callback is deprecated and will be removed in Contao 5.0. Use config.onrestore_version instead.
     */
    public function onRestoreVersionCallback(string $table, int $parentId, int $version, array $record): void;

}
