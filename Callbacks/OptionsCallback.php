<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Callbacks;


use Contao\DataContainer;


interface OptionsCallback
{

    /**
     * @see https://docs.contao.org/dev/reference/dca/callbacks/#fields-field-options
     */
    public function onOptionsCallback(DataContainer $dc): array;

}
