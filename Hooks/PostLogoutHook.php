<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


use Contao\User;


interface PostLogoutHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/postLogout/
     * @deprecated
     */
    public function onPostLogout(User $user): void;

}
