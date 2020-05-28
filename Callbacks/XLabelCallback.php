<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Callbacks;


use Contao\DataContainer;


interface XLabelCallback
{

    /**
     * @see https://docs.contao.org/dev/reference/dca/callbacks/#fields-field-xlabel
     */
    public function onXLabelCallback(DataContainer $dc): string;

}
