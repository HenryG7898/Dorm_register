<?php

namespace Database\Seeders;

use App\Models\Trainee;
use Illuminate\Database\Seeder;

class TraineeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Trainee::factory(30)->create();
    }
}
