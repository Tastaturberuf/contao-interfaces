<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Callbacks;


use Contao\DataContainer;


interface OnShowCallback
{

    /**
     * @see https://docs.contao.org/dev/reference/dca/callbacks/#config-onshow
     * @since 4.7
     */
    public function onShowCallback(array $data, array $record, DataContainer $dc): array;

}
