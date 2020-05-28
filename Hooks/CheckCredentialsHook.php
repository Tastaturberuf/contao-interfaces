<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


use Contao\User;


interface CheckCredentialsHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/checkCredentials/
     * @deprecated Using the checkCredentials hook has been deprecated and will no longer work in Contao 5.0.
     */
    public function onCheckCredentials(string $username, string $credentials, User $user): bool;

}
