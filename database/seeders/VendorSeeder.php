<?php

namespace Database\Seeders;

use App\Models\Vendor;
use Database\Factories\VendorFactory;
use Illuminate\Database\Seeder;

class VendorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Vendor::factory(10)->create();
    }
}