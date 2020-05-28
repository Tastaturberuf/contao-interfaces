<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


interface RemoveRecipientHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/removeRecipient/
     */
    public function onRemoveRecipient(string $email, array $channels): void;

}
