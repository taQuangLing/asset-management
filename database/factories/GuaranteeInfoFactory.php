<?php

namespace Database\Factories;

use App\Models\Asset;
use App\Models\Staff;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GuaranteeInfo>
 */
class GuaranteeInfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ma_bao_hanh' => $this->faker->unique()->randomNumber(5),
            'ma_tai_san' => Asset::factory(),
            'ma_nhan_vien' => Staff::factory(),
            'ngay_tiep_nhan_BH' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'ngay_du_kien_ban_giao' => $this->faker->dateTimeBetween('now', '+1 month'),
            'ngay_ban_giao' => $this->faker->dateTimeBetween('+1 month', '+2 month'),
            'tinh_trang_TS_truoc_BH' => $this->faker->paragraph(3),
            'tinh_trang_TS_sau_BH' => $this->faker->paragraph(3),
            'trang_thai' => $this->faker->numberBetween(0, 1),
            'chi_phi_BH' => $this->faker->numberBetween(1000000, 10000000),
            'mo_ta' => $this->faker->paragraph(3),
        ];
    }
}
