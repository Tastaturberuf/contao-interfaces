<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


interface IndexPageHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/indexPage/
     */
    public function onIndexPage(string $content, array $pageData, array &$indexData): void;

}
