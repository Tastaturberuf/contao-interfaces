<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


use Contao\Module;


interface GetAllEventsHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/getAllEvents/
     */
    public function onGetAllEvents(array $events, array $calendars, int $timeStart, int $timeEnd, Module $module): array;

}
