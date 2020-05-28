<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Callbacks;


use Contao\DataContainer;


interface PanelCallback
{

    /**
     * @see https://docs.contao.org/dev/reference/dca/callbacks/#list-sorting-panel-callback-subpanel
     */
    public function onPanelCallback(DataContainer $dc): string;

}
