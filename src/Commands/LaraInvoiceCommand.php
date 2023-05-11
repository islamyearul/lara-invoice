<?php

namespace Yearul\LaraInvoice\Commands;

use Illuminate\Console\Command;

class LaraInvoiceCommand extends Command
{
    public $signature = 'lara-invoice';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
