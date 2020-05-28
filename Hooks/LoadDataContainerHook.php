<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


use Terminal42\ServiceAnnotationBundle\ServiceAnnotationInterface;


interface LoadDataContainerHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/loadDataContainer/
     */
    public function onLoadDataContainer(string $table): void;

}
