<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


interface ColorizeLogEntriesHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/colorizeLogEntries/
     */
    public function onColorizeLogEntries(string $row, string $label): string;

}
