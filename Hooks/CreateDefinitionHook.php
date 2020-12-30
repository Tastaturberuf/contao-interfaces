<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


interface CreateDefinitionHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/createDefinition/
     */
    public function onCreateDefinition(string $key, string $value, string $definition, array &$dataset): ?array;

}
