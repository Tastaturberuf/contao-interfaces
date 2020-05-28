<?php


namespace Tastaturberuf\ContaoInterfaces\Callback\Listing\TreeView;


use Contao\DataContainer;


interface TreeLabelCallback
{

    /**
     * @see https://docs.contao.org/dev/reference/dca/callbacks/#list-label-label
     */
    public function onLabelCallback(array $record, string $label, DataContainer $dc, string $empty, bool $false, bool $protected): string;

}
