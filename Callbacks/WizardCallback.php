<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Callbacks;


use Contao\DataContainer;


interface WizardCallback
{

    /**
     * @see https://docs.contao.org/dev/reference/dca/callbacks/#fields-field-wizard
     */
    public function onWizardCallback(DataContainer $dc): string;

}
