<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


interface GetUserNavigationHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/getUserNavigation/
     */
    public function onGetUserNavigation(array $modules, bool $showAll): array;

}
