<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


use Contao\LayoutModel;
use Contao\PageModel;
use Contao\PageRegular;


interface GetPageLayoutHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/getPageLayout/
     */
    public function onGetPageLayout(PageModel $pageModel, LayoutModel $layout, PageRegular $pageRegular): void;

}
