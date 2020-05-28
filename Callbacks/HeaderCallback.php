<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Callbacks;


use Contao\DataContainer;


interface HeaderCallback
{

    /**
     * @see https://docs.contao.org/dev/reference/dca/callbacks/#list-sorting-header
     */
    public function onHeaderCallback(array $labels, DataContainer $dc): array;

}
