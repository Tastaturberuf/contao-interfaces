<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


interface InsertTagFlagsHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/insertTagFlags/
     * @return false|string
     */
    public function onInsertTagFlags(
        string $flag,
        string $tag,
        string $cachedValue,
        array  $flags,
        bool   $useCache,
        array  $tags,
        array  $cache,
        int    $_rit,
        int    $_cnt
    );

}
