<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


interface ExecutePreActionsHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/executePreActions/
     */
    public function onExecutePreActions(string $action): void;

}
