<?php

use App\Status;
use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $status = new Status();
        $status->description = 'Mined';
        $status->save();

        $status = new Status();
        $status->description = 'Free';
        $status->save();

        $status = new Status();
        $status->description = 'Flaged';
        $status->save();
    }
}
