<?php

namespace Modules\Invoice\Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Factory;

use Modules\Invoice\Entities\Invoice as Invoice;

class InvoiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Invoice::unguard();
        factory(Invoice::class, 500)->create();
        Invoice::reguard();
        // $this->call("OthersTableSeeder");Model::unguard();
    }
}
