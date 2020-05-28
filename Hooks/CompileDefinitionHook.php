<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


interface CompileDefinitionHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/compileDefinition/
     */
    public function onCompileDefinition(array $row, bool $writeToFile, array $vars, array $parent): string;

}
