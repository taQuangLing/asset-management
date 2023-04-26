<?php

namespace Database\Factories;

use App\Models\Provider;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Asset>
 */
class AssetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $availableProvider = Provider::all();
        return [
            'ma_tai_san' => $this->faker->unique()->randomNumber(5),
            'ma_ncc' => $availableProvider->random()->ma_ncc,
            'ten_tai_san' => $this->faker->sentence(3),
            'loai_tai_san' => $this->faker->word,
            'hang_san_xuat' => $this->faker->company,
            'han_bao_hanh' => $this->faker->dateTimeBetween('now', '+3 years'),
            'mo_ta' => $this->faker->paragraph(3),
        ];
    }
}
