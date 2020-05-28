<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Callbacks;


use Contao\DataContainer;


interface GroupCallback
{

    /**
     * @see https://docs.contao.org/dev/reference/dca/callbacks/#list-label-group
     */
    public function onGroupCallback(string $group, string $mode, string $field, array $row, DataContainer $dc): string;

}
