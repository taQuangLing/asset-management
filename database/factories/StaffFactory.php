<?php

namespace Database\Factories;

use App\Models\Account;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Staff>
 */
class StaffFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ma_nhan_vien' => $this->faker->unique()->randomNumber(5),
            'ten' => $this->faker->name,
            'ngay_sinh' => $this->faker->dateTimeBetween('-50 years', '-20 years'),
            'cccd' => $this->faker->unique()->numerify('##########'),
            'chuc_vu' => $this->faker->jobTitle,
            'phong_ban' => $this->faker->word,
            'sdt' => $this->faker->numerify('09########'),
            'email' => $this->faker->unique()->safeEmail,
            'ma_tai_khoan' => Account::factory(),
        ];
    }
}
