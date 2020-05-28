<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Callbacks;


interface OnCreateVersionCallback
{

    /**
     * @see https://docs.contao.org/dev/reference/dca/callbacks/#config-oncreate-version
     */
    public function onCreateVersionCallback(string $table, int $parentId, int $version, array $record): void;

}
