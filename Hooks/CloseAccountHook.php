<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


use Contao\Module;


interface CloseAccountHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/closeAccount/
     */
    public function onCloseAccount(int $userId, string $mode, Module $module): void;

}
