<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Organization>
 */
class OrganizationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition ()
    {
        return [
            'name_organization' => $this->faker->randomElement(['Kaspi', 'Kolesa', 'InDriver', 'Yandex', 'Google']),
            'department_name'   => $this->faker->randomElement(['IT', 'Economic', 'Help']),
            'country'           => $this->faker->randomElement(['Kazakhstan', 'Ukraine', 'Russia', 'China']),
            'city'              => $this->faker->randomElement(['Astana', 'Uralsk', 'Almaty', 'Moskow', 'Samara', 'Beijing', 'Kiev', 'Odessa']),
            'street'            => $this->faker->randomElement(['Eurasia', 'Kabanbay batyr', 'Nursultan']),
            'house'             => $this->faker->randomElement([1, 2, 3, 4, 5, 6, 7, 8, 9]),
            'apartment'         => $this->faker->randomElement([12, 23, 456, 787, 78, 71, 24]),
        ];
    }
}
