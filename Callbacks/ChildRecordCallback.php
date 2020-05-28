<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Callbacks;


interface ChildRecordCallback
{

    /**
     * @see https://docs.contao.org/dev/reference/dca/callbacks/#list-sorting-child-record
     */
    public function onChildRecordCallback(array $labels): string;

}
