<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


interface GenerateXmlFilesHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/generateXmlFiles/
     */
    public function onGenerateXmlFiles(): void;

}
