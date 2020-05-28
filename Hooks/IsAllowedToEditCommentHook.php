<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


interface IsAllowedToEditCommentHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/isAllowedToEditComment/
     */
    public function onIsAllowedToEditComment(int $parentId, string $parentTable): bool;

}
