<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Callbacks;


use Contao\DataContainer;


interface OnDeleteCallback
{

    /**
     * @see https://docs.contao.org/dev/reference/dca/callbacks/#config-ondelete
     */
    public function onDeleteCallback(DataContainer $dc, int $undoId): void;

}
