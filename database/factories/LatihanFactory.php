<?php

namespace Database\Factories;

use App\Models\Latihan;
use Illuminate\Database\Eloquent\Factories\Factory;

class LatihanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Latihan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_murid' => $this->faker->name(),
            'status_murid' => $this->faker->boolean(),
            'nilai_tugas' => $this->faker->randomNumber(2),
            'nilai_pts' => $this->faker->randomNumber(2),
            'nilai_uas' => $this->faker->randomNumber(2),
        ];
    }
}
