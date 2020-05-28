<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


interface AddLogEntryHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/addLogEntry/
     * @deprecated Using the addLogEntry hook has been deprecated and will no longer work in Contao 5.0.
     */
    public function onAddLogEntry (string $message, string $function, string $action): void;

}
