<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\DataMember;

class DataMemberFactory extends Factory
{
    protected $model = DataMember::class;

    public function definition(): array
    {
        return [
            'member_id' => fake()->unique()->numerify('######'),
            'name' => fake()->name(),
            'whatsapp' => fake()->phoneNumber(),
            'jenis_kelamin' => fake()->randomElement(['L', 'P']),
            'alamat' => fake()->address(),
            'foto' => fake()->imageUrl(640, 480, 'people', true),
        ];
    }
}
