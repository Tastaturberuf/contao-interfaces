<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


interface ImportUserHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/importUser/
     * @deprecated Using the importUser hook has been deprecated and will no longer work in Contao 5.0.
     * Use the contao.import_user event instead.
     */
    public function onImportUser(string $username, string $password, string $table): bool;

}
