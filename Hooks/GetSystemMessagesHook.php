<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


interface GetSystemMessagesHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/getSystemMessages/
     */
    public function onGetSystemMessages(): string;

}
