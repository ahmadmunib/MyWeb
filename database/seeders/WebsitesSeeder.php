<?php

namespace Database\Seeders;

use App\Models\Website;
use Database\Factories\WebsitesFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WebsitesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Website::factory()->count(108)->create();

    }
}
