<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


interface ReviseTableHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/reviseTable/
     */
    public function onReviseTable(string $table, array $newRecords, ?string $parentTable, ?array $childTables): ?bool;

}
