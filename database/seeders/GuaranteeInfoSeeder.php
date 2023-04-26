<?php

namespace Database\Seeders;

use App\Models\GuaranteeInfo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GuaranteeInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GuaranteeInfo::factory()->count(50)->create();
    }
}
