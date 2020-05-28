<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


use Contao\Model\Collection;
use Contao\Module;


interface NewsListFetchItemsHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/newsListFetchItems/
     * @return false|Collection|null
     */
    public function onNewsListFetchItems(array $newsArchives, bool $featuredOnly, int $limit, int $offset, Module $module);

}
