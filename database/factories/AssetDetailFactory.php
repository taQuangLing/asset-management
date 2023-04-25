<?php

namespace Database\Factories;

use App\Models\Asset;
use App\Models\Coupon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AssetDetail>
 */
class AssetDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ma_phieu_nhap' => Coupon::factory(),
            'ma_tai_san' => Asset::factory(),
            'don_gia' => $this->faker->numberBetween(1000000, 10000000),
            'so_luong' => $this->faker->numberBetween(1, 100),
        ];
    }
}
