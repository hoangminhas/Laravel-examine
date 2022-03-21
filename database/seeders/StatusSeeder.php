<?php

namespace Database\Seeders;

use App\Models\Status;
use Database\Factories\StatusFactory;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
//        StatusFactory::new(10)->create();
        $status = new  Status();
        $status->name = 'active';
        $status->save();

        $status = new  Status();
        $status->name = 'inactive';
        $status->save();

    }
}
