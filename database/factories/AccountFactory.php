<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Account>
 */
class AccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ma_tai_khoan' => $this->faker->unique()->numerify('TK###'),
            'ten_tai_khoan' => $this->faker->userName,
            'mat_khau' => $this->faker->password,
            'quyen_han' => $this->faker->numberBetween(0, 1),
        ];
    }
}
