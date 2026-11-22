<?php

namespace Database\Factories;

use App\Models\Ticket;
use Illuminate\Database\Eloquent\Factories\Factory;

class TicketFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->firstName(),
            'topic' => fake()->randomElement(Ticket::TOPICS),
            'description' => fake()->sentence(),
        ];
    }
}