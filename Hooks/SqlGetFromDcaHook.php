<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


interface SqlGetFromDcaHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/sqlGetFromDca/
     */
    public function onSqlGetFromDca(array $sql): array;

}
