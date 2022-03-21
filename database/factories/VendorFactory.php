<?php

namespace Database\Factories;

use App\Models\Status;
use Illuminate\Database\Eloquent\Factories\Factory;

class VendorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            "name"=> $this->faker->name(),
            "phone"=> $this->faker->phoneNumber(),
            "email"=> $this->faker->unique()->email(),
            "address"=> $this->faker->address(),
            "vendor_boss"=> $this->faker->lastName(),
            "status_id"=> Status::all()->random()->id
        ];
    }
}
