<?php

namespace Yearul\LaraInvoice\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Yearul\LaraInvoice\LaraInvoice
 */
class LaraInvoice extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Yearul\LaraInvoice\LaraInvoice::class;
    }
}
