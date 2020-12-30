<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


use Contao\FormModel;


interface GetFormHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/getForm/
     */
    public function onGetForm(FormModel $form, string $buffer): string;

}
