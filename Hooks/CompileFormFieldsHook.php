<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


use Contao\Form;


interface CompileFormFieldsHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/compileFormFields/
     */
    public function onCompileFormFields(array $fields, string $formId, Form $form): array;

}
