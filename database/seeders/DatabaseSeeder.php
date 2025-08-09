<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Product;
use App\Models\Service;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
         $this->call(AboutSeeder::class);
         $this->call(ProductSeeder::class);
         $this->call([
        ServicesSeeder::class,
    ]);

 

        // DB::table('products')->insertOrIgnore($products);
    }
}

