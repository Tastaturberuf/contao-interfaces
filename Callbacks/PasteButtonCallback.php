<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Callbacks;


use Contao\DataContainer;


interface PasteButtonCallback
{

    /**
     * @see https://docs.contao.org/dev/reference/dca/callbacks/#list-sorting-paste-button
     */
    public function onPasteButtonCallback(
        DataContainer $dc,
        array         $row,
        string        $table,
        bool          $reference,
        array         $clipboard,
        array         $children,
        string        $prevLabel,
        string        $nextLabel
    ): string;

}
