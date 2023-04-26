<?php

namespace Database\Seeders;

use App\Models\DispensingInfo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DispensingInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DispensingInfo::factory()->count(10)->create();
    }
}
