<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Callbacks;


use Contao\DataContainer;


interface SaveCallback
{

    /**
     * @see https://docs.contao.org/dev/reference/dca/callbacks/#fields-field-save
     * @param mixed $value
     * @return mixed
     */
    public function onSaveCallback($value, DataContainer $dc);

}
