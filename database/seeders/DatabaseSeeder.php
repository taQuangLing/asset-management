<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\DispensingInfo;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\Account::factory(10)->create();

        \App\Models\Account::factory()->create([
            'ma_tai_khoan' => 'TK998',
            'ten_tai_khoan' => 'hung2209',
            'mat_khau' => '123',
            'quyen_han' => '1'
        ]);

        $this->call([
            ProviderSeeder::class,
//            AccountSeeder::class,
            StaffSeeder::class,
            AssetSeeder::class,
            CouponSeeder::class,
            AssetDetailSeeder::class,
            GuaranteeInfoSeeder::class,
            LiquidationListSeeder::class,
            DispensingInfoSeeder::class,
        ]);
    }
}
