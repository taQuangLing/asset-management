<?php

namespace Database\Factories;

use App\Models\Asset;
use App\Models\Staff;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DispensingInfo>
 */
class DispensingInfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ma_cap_phat' => $this->faker->unique()->randomNumber(5),
            'ma_tai_san'=> Asset::factory(),
            'ngay_cap' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'ma_nhan_vien' => Staff::factory(),
            'doi_tuong' => $this->faker->text(100),
        ];
    }
}
