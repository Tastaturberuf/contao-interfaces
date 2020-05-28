<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


use Contao\User;


interface PostLoginHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/postLogin/
     * @deprecated Using the postLogin hook has been deprecated and will no longer work in Contao 5.0.
     */
    public function onPostLogin(User $user): void;

}
