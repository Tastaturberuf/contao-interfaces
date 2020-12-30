<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


interface InitializeSystemHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/initializeSystem/
     */
    public function onInitializeSystem(): void;

}
