<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Callbacks;


use Contao\DataContainer;


interface InputFieldCallback
{

    /**
     * @see https://docs.contao.org/dev/reference/dca/callbacks/#fields-field-input-field
     */
    public function onInputFieldCallback(DataContainer $dc, string $xlabel): string;

}
