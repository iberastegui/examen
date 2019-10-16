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
        $accountType = new Status();
        $accountType->description = 'Mined';

        $accountType = new Status();
        $accountType->description = 'Free';

        $accountType = new Status();
        $accountType->description = 'Flaged';
    }
}
