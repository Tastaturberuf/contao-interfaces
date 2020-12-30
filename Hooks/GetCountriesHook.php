<?php

/**
 * Contao Interfaces for Contao Open Source CMS
 *
 * @author  Daniel Jahnsmüller <tastaturberuf.de>
 * @license MIT
 */


namespace Tastaturberuf\ContaoInterfaces\Hooks;


interface GetCountriesHook
{

    /**
     * @see https://docs.contao.org/dev/reference/hooks/getCountries/
     */
    public function onGetCountries(array &$translatedCountries, array $allCountries): void;

}
