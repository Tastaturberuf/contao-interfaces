<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


use Contao\Form;


interface PrepareFormDataHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/prepareFormData/
     */
    public function onPrepareFormData(array &$submittedData, array $labels, array $fields, Form $form): void;

}
