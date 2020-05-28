<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


interface RemoveOldFeedsHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/removeOldFeeds/
     */
    public function onRemoveOldFeeds(): array;

}
