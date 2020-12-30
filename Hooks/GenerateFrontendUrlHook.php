<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


interface GenerateFrontendUrlHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/generateFrontendUrl/
     * @deprecated Using the generateFrontendUrl hook has been deprecated and will no longer work in Contao 5.0.
     */
    public function onGenerateFrontendUrl(array $page, string $params, string $url): string;

}
