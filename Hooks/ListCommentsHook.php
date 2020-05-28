<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


interface ListCommentsHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/listComments/
     */
    public function onListComments(array $comment): string;

}
