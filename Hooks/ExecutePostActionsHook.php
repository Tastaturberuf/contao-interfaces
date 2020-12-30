<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


use Contao\DataContainer;


interface ExecutePostActionsHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/executePostActions/
     */
    public function onExecutePostActions(string $action, DataContainer $dc): void;

}
