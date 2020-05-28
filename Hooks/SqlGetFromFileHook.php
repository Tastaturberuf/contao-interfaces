<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


interface SqlGetFromFileHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/sqlGetFromFile/
     */
    public function onSqlGetFromFile(array $sql): array;

}
