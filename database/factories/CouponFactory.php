<?php

namespace Database\Factories;

use App\Models\Staff;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Coupon>
 */
class CouponFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ma_phieu_nhap' => $this->faker->unique()->randomNumber(5),
            'tong_gia' => $this->faker->randomNumber(7),
            'ngay_nhap' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'ma_nhan_vien' => Staff::factory(),
        ];
    }
}
