<?php

namespace Dsc\DSCQuotation\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Dsc\DSCQuotation\DSCQuotation
 */
class DSCQuotation extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Dsc\DSCQuotation\DSCQuotation::class;
    }
}
