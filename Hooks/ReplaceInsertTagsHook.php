<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


interface ReplaceInsertTagsHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/replaceInsertTags/
     * @return false|string
     */
    public function onReplaceInsertTags(
        string $insertTag,
        bool   $useCache,
        string $cachedValue,
        array  $flags,
        array  $tags,
        array  $cache,
        int    $_rit,
        int    $_cnt
    );

}
