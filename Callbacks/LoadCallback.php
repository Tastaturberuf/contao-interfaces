<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Callbacks;


use Contao\DataContainer;


interface LoadCallback
{

    /**
     * @see https://docs.contao.org/dev/reference/dca/callbacks/#fields-field-load
     * @param mixed $value
     * @return mixed
     */
    public function onLoadCallback($value, DataContainer $dc);

}
