<?php

namespace Yearul\LaraInvoice;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Yearul\LaraInvoice\Commands\LaraInvoiceCommand;

class LaraInvoiceServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         */
        $package
            ->name('lara-invoice')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_lara-invoice_table')
            ->hasCommand(LaraInvoiceCommand::class);
    }
}
