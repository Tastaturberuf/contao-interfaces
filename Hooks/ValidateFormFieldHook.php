<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


use Contao\Form;
use Contao\Widget;


interface ValidateFormFieldHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/validateFormField/
     */
    public function onValidateFormField(Widget $widget, string $formId, array $formData, Form $form): Widget;

}
