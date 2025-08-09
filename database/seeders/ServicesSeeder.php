<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            'core_services_title' => 'Our Core Services',
            'core_services_content' => 'Cultivation and packaging of products according to the highest quality standards.<br> Direct export to global markets with the latest cooling and packaging technologies.<br> Full traceability of the supply chain to ensure products arrive fresh and on time.',
            'logistics_title' => 'Logistics',
            'logistics_content' => 'Our logistic operations follow strict planning and tracking to ensure timely and efficient transportation. We partner with trusted airlines like Fly Emirates, EgyptAir, Etihad, and major sea shipping companies like Maersk, CMA, MSC.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
