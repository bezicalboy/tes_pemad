<?php

namespace Database\Factories;

use App\Models\Klien;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Klien>
 */
class KlienFactory extends Factory
{
    protected $model = Klien::class;
    public function definition(): array
    {
        return [
            'nama_klien' => $this->faker->name,
            'email_klien' => $this->faker->unique()->safeEmail,
            'notelp_klien' => $this->faker->phoneNumber,
        ];
    }
}
