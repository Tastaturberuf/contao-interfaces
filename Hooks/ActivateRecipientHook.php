<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


interface ActivateRecipientHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/activateRecipient/
     */
    public function onActivateRecipient(string $email, array $recipientIds, array $channelIds): void;

}
