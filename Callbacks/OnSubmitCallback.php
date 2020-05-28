<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Callbacks;


use Contao\DataContainer;
use Contao\FrontendUser;
use Contao\ModulePersonalData;


interface OnSubmitCallback
{

    /**
     * @see https://docs.contao.org/dev/reference/dca/callbacks/#config-onsubmit
     * @param DataContainer|FrontendUser $object
     */
    public function onSubmitCallback(object $object, ModulePersonalData $modul = null): void;

}
