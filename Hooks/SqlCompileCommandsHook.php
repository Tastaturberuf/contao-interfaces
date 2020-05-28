<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


interface SqlCompileCommandsHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/sqlCompileCommands/
     */
    public function onSqlCompileCommands(array $sql): array;

}
