<?php

namespace Database\Seeders;

use App\Models\Theme;
use App\Models\Themes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ThemesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Theme::create([
            'name' => 'Sash',
            'description' => 'Theme Description',
            'version' => '1.0.0',
            'license' => 'MIT',
            'type' => 'free',
            'tags' => 'tag1, tag2, tag3',
            'preview' => 'https://example.com/preview',
            'thumbnail' => 'https://example.com/thumbnail',
            'screenshot' => 'https://example.com/screenshot',
        ]);
    }
}
