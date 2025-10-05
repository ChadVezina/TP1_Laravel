<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Etudiant;

class EtudiantFactory extends Factory
{
    protected $model = Etudiant::class;
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'address' => $this->faker->address(),
            'phone' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
            'birthdate' => $this->faker->date(),
            'city_id' => \App\Models\Ville::inRandomOrder()->first()->id,
        ];

    }
}
