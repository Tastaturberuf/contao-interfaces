<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


use Contao\Model;


interface IsVisibleElementHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/isVisibleElement/
     */
    public function onIsVisibleElement(Model $element, bool $isVisible): bool;

}
