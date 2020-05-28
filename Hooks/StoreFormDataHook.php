<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


use Contao\Form;


interface StoreFormDataHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/storeFormData/
     */
    public function onStoreFormData(array $data, Form $form): array;

}
