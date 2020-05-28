<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


use Contao\MemberModel;
use Contao\Module;


interface ActivateAccountHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/activateAccount/
     */
    public function onActivateAccount(MemberModel $memberModel, Module $module): void;

}
