<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


use Contao\ContentModel;


interface GetContentElementHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/getContentElement/
     */
    public function onGetContentElement(ContentModel $contentModel, string $buffer, object $element): string;

}
