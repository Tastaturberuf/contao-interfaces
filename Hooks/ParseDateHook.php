<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


interface ParseDateHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/parseDate/
     */
    public function onParseDate(string $formattedDate, string $format, ?int $timestamp): string;

}
