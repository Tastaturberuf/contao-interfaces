<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


use Contao\FrontendUser;
use Contao\Module;


interface UpdatePersonalDataHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/updatePersonalData/
     */
    public function onUpdatePersonalData(FrontendUser $member, array $data, Module $module): void;

}
