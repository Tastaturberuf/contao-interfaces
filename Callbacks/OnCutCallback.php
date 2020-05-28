<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Callbacks;


use Contao\DataContainer;


interface OnCutCallback
{

    /**
     * @see https://docs.contao.org/dev/reference/dca/callbacks/#config-oncut
     */
    public function onCutCallback(DataContainer $dc): void;

}
