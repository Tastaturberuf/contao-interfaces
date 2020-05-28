<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


use Contao\Comments;


interface AddCommentHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/addComment/
     */
    public function onAddComment(int $commentId, array $commentData, Comments $comments): void;

}
