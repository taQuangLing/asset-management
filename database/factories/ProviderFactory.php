<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Provider>
 */
class ProviderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ma_ncc' => $this->faker->unique()->randomNumber(5),
            'ten_ncc' => $this->faker->company,
            'dia_chi_ncc' => substr($this->faker->address, 0, 50),
            'sdt_ncc' => $this->faker->numerify('09#########'),
        ];

    }
}
