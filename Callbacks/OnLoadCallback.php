<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Callbacks;


use Contao\DataContainer;


interface OnLoadCallback
{

    /**
     * @see https://docs.contao.org/dev/reference/dca/callbacks/#config-onload
     */
    public function onLoadCallback(DataContainer $dc = null): void;

}
