<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $statuses=['pending','in_progress','resolved','closed'];
        $severities=['1','2','3','4'];
        $categories=['Bug/Fix','New Request','Update','Maintenance'];
        return [
            'title' => $this->faker->text(25),
            'ticket_no' => 'GB'.rand(1000,5000),
            'description' => $this->faker->text(75),
            'category' => $categories[rand(0,3)],
            'sample' => 'none',
            'status' => $statuses[rand(0,3)],
            'severity' => $severities[rand(0,3)],
            'assignee' => $this->faker->firstName." ".$this->faker->lastName,
            'user_id' => '1',
        ];
    }
}
