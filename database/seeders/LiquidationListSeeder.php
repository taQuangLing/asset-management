<?php

namespace Database\Seeders;

use App\Models\LiquidationList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LiquidationListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LiquidationList::factory()->count(50)->create();
    }
}
