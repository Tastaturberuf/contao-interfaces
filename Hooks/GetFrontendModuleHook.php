<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


use Contao\ModuleModel;


interface GetFrontendModuleHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/getFrontendModule/
     */
    public function onGetFrontendModule(ModuleModel $model, string $buffer, object $module): string;

}
