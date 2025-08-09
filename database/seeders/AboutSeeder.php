<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\About;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      DB::table('abouts')->insert([
    'title' => 'About Us',
    'intro' => 'is a company owned by Egyptians that was established in 2002 (with its own farms) and processes and exports fresh fruits, vegetables, and herbs.',
    'details' => 'Greenya owns 3 farms in four locations in Egypt, certified by: Global G.A.P, ISO9001, and SEDEX. We are committed to providing high-quality and competitive products through an experienced team, strict ISO and HACCP standards.',
    'image' => null,
    'created_at' => now(),
    'updated_at' => now(),
]);
    }
}

