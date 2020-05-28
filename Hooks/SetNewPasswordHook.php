<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


use Contao\Database\Result;
use Contao\MemberModel;
use Contao\Module;


interface SetNewPasswordHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/setNewPassword/
     * @param Result|MemberModel $member
     */
    public function setNewPassword($member, string $password, Module $module = null): void;

}
