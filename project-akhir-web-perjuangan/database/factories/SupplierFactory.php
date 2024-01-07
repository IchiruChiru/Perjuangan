<?php

namespace Database\Factories;

use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Supplier>
 */
class SupplierFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Supplier::class;
    public function definition(): array
    {
        return [
            'nama_supplier' => $this->faker->randomElement(['UD', 'PT', 'CV']) . ' ' .$this->faker->company,
            'lokasi_supplier' => $this->faker->streetAddress,
            'no_telp' => $this->faker->numerify('08###########'),
        ];
    }
}
