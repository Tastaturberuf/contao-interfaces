<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Callbacks;


use Contao\DataContainer;


interface ButtonCallback
{

    /**
     * @see https://docs.contao.org/dev/reference/dca/callbacks/#list-operations-operation-button
     */
    public function onButtonCallback(
        array $row,
        string $href,
        string $label,
        string $title,
        string $icon,
        string $attributes,
        string $table,
        array  $rootIds,
        array  $childIds,
        bool   $tree_view,
        string $prevLabel,
        string $nextLabel,
        DataContainer $dc
    ): string;

}
