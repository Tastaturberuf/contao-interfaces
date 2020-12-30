<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


use Contao\DataContainer;
use Contao\Module;


interface GetAttributesFromDcaHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/getAttributesFromDca/
     * @param DataContainer|Module|null $context
     */
    public function onGetAttributesFromDca(array $attributes, $context = null): array;

}
