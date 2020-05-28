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


interface LoadFormFieldHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/loadFormField/
     */
    public function onLoadFormField(Widget $widget, string $formId, array $formData, Form $form): Widget;

}
