<?php


namespace Tastaturberuf\ContaoInterfaces\Callback\Listing\ListView;


use Contao\DataContainer;


interface ListLabelCallback
{

    /**
     * @see https://docs.contao.org/dev/reference/dca/callbacks/#list-label-label
     */
    public function onLabelCallback(array $record, string $label, DataContainer $dc, array $labels): array;

}
