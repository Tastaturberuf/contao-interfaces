<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


use Contao\User;


interface PostAuthenticateHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/postAuthenticate/
     * @deprecated Using the postAuthenticate hook has been deprecated and will no longer work in Contao 5.0.
     */
    public function onPostAuthenticate(User $user): void;

}
