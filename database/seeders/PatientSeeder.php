<?php

namespace Database\Seeders;

use App\Models\Patient;
use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //to manage memory we implement in chunk
        //500*100 = 50000 data to be seeded
        for ($i = 0; $i < 100; $i++) {
            Patient::factory()->count(500)->create();
        }
    }
}
