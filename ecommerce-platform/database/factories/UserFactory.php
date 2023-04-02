<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition()
    {
        return [
            'username' => $this->faker->unique()->userName,
            'firstname' => $this->faker->firstName,
            'lastname' => $this->faker->lastName,
            'password' => bcrypt($this->faker->password),
            'age' => $this->faker->numberBetween(18, 65),
            'address' => $this->faker->email,
            'telephone' => $this->faker->phoneNumber,
            'role' => 0,
        ];
    }
}
