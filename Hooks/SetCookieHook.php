<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


interface SetCookieHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/setCookie/
     * @param object $cookie
     * @return object
     */
    public function onSetCookie($cookie);

}
