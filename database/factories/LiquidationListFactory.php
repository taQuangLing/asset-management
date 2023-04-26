<?php

namespace Database\Factories;

use App\Models\Asset;
use App\Models\Staff;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LiquidationList>
 */
class LiquidationListFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $availableAssets = Asset::all();
        $availableStaffs = Staff::all();
        return [
            'ma_ds' => $this->faker->unique()->randomNumber(8),
            'ma_tai_san' => $availableAssets->random()->ma_tai_san,
            'gia_tri_sau_khau_hao' => $this->faker->numberBetween(1000000, 10000000),
            'trang_thai' => $this->faker->numberBetween(0, 2),
            'ngay_lap' => $this->faker->dateTimeBetween('-5 years', '-2 years'),
            'ma_nhan_vien' => $availableStaffs->random()->ma_nhan_vien,
        ];
    }
}
