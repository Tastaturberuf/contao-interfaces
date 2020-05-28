<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Callbacks;


interface GlobalButtonCallback
{

    /**
     * @see https://docs.contao.org/dev/reference/dca/callbacks/#list-global-operations-operation-button
     */
    public function onGlobalButtonCallback(
        string $href,
        string $label,
        string $title,
        string $class,
        string $attributes,
        string $table,
        array  $rootIds
    ): string;

}
