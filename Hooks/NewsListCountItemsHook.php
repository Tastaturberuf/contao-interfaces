<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


use Contao\Module;


interface NewsListCountItemsHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/newsListCountItems/
     * @return false|int
     */
    public function onNewsListCountItems(array $newsArchives, bool $featuredOnly, Module $module);

}
