<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


interface GetPageIdFormUrlHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/getPageIdFormUrl/
     * @deprecated Using the getPageIdFromUrl hook has been deprecated and will no longer work in Contao 5.0.
     */
    public function onGetPageIdFormUrl(array $fragments): array;

}
