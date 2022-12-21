<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Subscription>
 */
class SubscriptionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition ()
    {
        return [
            'phone'         => $this->faker->phoneNumber,
            'typeable_type' => fake()->randomElement([
                'App\\Models\\Organization',
                'App\\Models\\Person',
            ]),
            'typeable_id'   => fake()->numberBetween(1, 10),
        ];
    }
}
