<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class WebsiteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cid' => $this->faker->numberBetween(1, 10),
            'name' => $this->faker->name,
            'url' => $this->faker->url,
            'domain' => $this->faker->domainName,
            'ip_address' => $this->faker->ipv4,
            'hosting' => $this->faker->randomElement(['GoDaddy', 'Bluehost', 'HostGator', 'SiteGround', 'A2 Hosting', 'DreamHost', 'InMotion Hosting', 'Hostinger', 'GreenGeeks', 'Scala Hosting']),
        ];
    }
}
