<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


interface GetPageStatusIconHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/getPageStatusIcon/
     */
    public function onGetPageStatusIcon(object $page, string $image): string;

}
