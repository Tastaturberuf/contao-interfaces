<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


use Contao\Database\Result;
use Contao\Email;


interface SendNewsletterHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/sendNewsletter/
     */
    public function onSendNewsletter(Email $email, Result $newsletter, array $recipient, string $text, string $html): void;

}
