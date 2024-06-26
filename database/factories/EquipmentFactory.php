<?php

namespace Database\Factories;

use App\Models\Equipment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Equipment>
 */
class EquipmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'serial_number' => fake()->unique()->creditCardNumber(),
            'code' => fake()->postcode(),
            'brand' => fake()->randomElement([
                'KOMATSU',
                'BOOMAG',
                'SANY',
                'HINO',
                'PERKINS',
                'CUMMINS',
                'MAHINDRA',
                'HILUX',
                'MITSUBITHI',
                'KIOTI',
                'TRAL'
            ]),
            'model' => fake()->word(),
        ];
    }
}
