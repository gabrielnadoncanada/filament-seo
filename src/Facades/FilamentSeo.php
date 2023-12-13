<?php

namespace Ng\FilamentSeo\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Ng\FilamentSeo\FilamentSeo
 */
class FilamentSeo extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Ng\FilamentSeo\FilamentSeo::class;
    }
}
