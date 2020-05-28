<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


use Contao\Form;


interface ProcessFormDataHook
{

    public function onProcessFormData(array $submittedData, array $formData, ?array $files, array $labels, Form $form): void;

}
