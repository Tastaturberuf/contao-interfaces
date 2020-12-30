<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


use Contao\Module;


interface CreateNewUserHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/createNewUser/
     */
    public function onCreateNewUser(int $userId, array $userData, Module $module): void;

}
