<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Callbacks;


use Contao\DataContainer;


interface OnCreateCallback
{

    /**
     * @see https://docs.contao.org/dev/reference/dca/callbacks/#config-oncreate
     */
    public function onCreateCallback(string $table, int $id, array $records, DataContainer $dc): void;

}
