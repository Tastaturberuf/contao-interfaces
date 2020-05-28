<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Callbacks;


use Contao\DataContainer;


interface OnCopyCallback
{

    /**
     * @see https://docs.contao.org/dev/reference/dca/callbacks/#config-oncopy
     */
    public function onCopyCallback(int $insertId, DataContainer $dc): void;

}
