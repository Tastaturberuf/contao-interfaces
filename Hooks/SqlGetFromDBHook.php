<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


interface SqlGetFromDBHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/sqlGetFromDB/
     */
    public function onSqlGetFromDB(array $sql): array;

}
