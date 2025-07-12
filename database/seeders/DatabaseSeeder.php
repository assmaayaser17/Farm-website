<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
    $fruits = Category::create(['name' => 'Fresh Fruits','imagepath' => 'images/products/mango.jpg']);
    $vegetables = Category::create(['name' => 'Fresh vegetables','imagepath' => 'images/products/procli.jpg']);

        $products = [
             [
            'id'=>1,
            'name' => 'Water Melon',
            'season' => 'Middle of May till August end',
            'variety' => 'Escatta',
            'specification' => 'Green Skin, Red Flesh with black seeds',
            'sizes' => '4 Pieces',
            'package' => '20 Kg Standard box',
            'imagepath' => 'images/products/watermelon.jpg',
             'category_id' => $fruits->id
        ],
        [
            'id'=>2,
            'name' => 'Fresh Apricots',
            'season' => 'June till August End',
            'variety' => 'Sweet',
            'specification' => null,
            'sizes' => '15, 20, 25 Pieces Per box',
            'package' => '5 kg standard carton Bulk packing',
            'imagepath' => 'images/products/apricots.jpg',
             'category_id' => $fruits->id
        ],
        [
            'id'=>3,
            'name' => 'Fresh Peach',
            'season' => 'Middle May till Middle August',
            'variety' => 'Sweet Early',
            'specification' => null,
            'sizes' => '12, 15, 18 Pieces Per box',
            'package' => '5 kg Standard box',
            'imagepath' => 'images/products/peach.jpg',
             'category_id' => $fruits->id
        ],
        [
            'id'=>4,
            'name' => 'Galia Melon - Cantaloupe',
            'season' => 'June till August end',
            'variety' => 'Sweet Melons',
            'specification' => 'Dark Yellow flesh, greenish outside skin. Greenya',
            'sizes' => '5, 7, 9 Pieces per box',
            'package' => '5 KG Carton',
            'imagepath' => 'images/products/cantaloupe.jpg',
             'category_id' => $fruits->id
        ],
          [
        'id'=>5,
        'name' => 'Artichoke',
        'season' => 'From December till April',
        'variety' => 'French Variety and Egyptian Baladi variety',
        'specification' => null,
        'sizes' => 'Size 1: 7.5 cm / 180-200g | Size 2: ~250g | Size 3: 9-11 cm / 275-300g',
        'package' => 'Not specified',
        'imagepath' => 'images/products/artichoke.jpg',
         'category_id' => $fruits->id
    ],
       [
        'id'=>6,
        'name' => 'Iceberg Lettuce',
        'season' => 'Early December till April',
        'variety' => null,
        'specification' => 'Supermarket quality in isolated bags',
        'sizes' => '8-12 heads per box',
        'package' => '8-6 kg carton, one layer or two-layer boxes',
        'imagepath' => 'images/products/lettuce.jpg',
         'category_id' => $vegetables->id
    ],
       [
        'id'=>7,
        'name' => 'Fresh Herbs',
        'season' => 'From December Till May',
        'variety' => 'Basil, chives, mint, coriander, celery, parsley, sage, rosemary, chervil, marjoram, thyme, orega grass, dill, rockets wild',
        'specification' => null,
        'sizes' => '100g, 150g bunches or 1kg loose',
        'package' => 'Custom based on client order',
        'imagepath' => 'images/products/herbs.jpg',
          'category_id' => $vegetables->id
    ],
        [
         'id'=>8,
        'name' => 'Green Beans',
        'season' => 'From September till June',
        'variety' => 'Hama, Bronco, Polista, Valentino',
        'specification' => "Pod length 11-16 cm, diameter 9-12 mm",
        'sizes' => null,
        'package' => '10x500g | 23x220g | 20x250g | 16x310g | 5kg loose | custom options',
        'imagepath' => 'images/products/beans.jpg',
        'category_id' => $vegetables->id
    ],

        [
        'id'=>9,
        'name' => 'Fresh Red/Golden Onions',
        'season' => 'From April till October',
        'variety' => 'Italian variety',
        'specification' => 'Packed in 10, 20, and 25kg mesh bags on wooden pallets',
        'sizes' => '50mm-70mm / 70mm and up',
        'package' => '10kg, 20kg, 25kg mesh bags',
        'imagepath' => 'images/products/onion.jpg',
          'category_id' => $vegetables->id
    ],

    [
        'id'=>10,
        'name' => 'Garlic',
        'season' => 'March till end of June',
        'variety' => 'Chinese Red Garlic and Egyptian white Baladi Garlic',
        'specification' => 'Packed in palm boxes or wooden boxes',
        'sizes' => '4.5mm / 5mm / 6mm / 7mm',
        'package' => '5kg, 10kg palm boxes, 10kg wooden box',
        'imagepath' => 'images/products/garlic.jpg',
          'category_id' => $vegetables->id
    ],

    [
        'id'=>11,
        'name' => 'Color Capsicum',
        'season' => 'Winter and Summer production',
        'variety' => 'Green, Red, Yellow, Orange',
        'specification' => 'Highest quality for different customers',
        'sizes' => 'Medium, Large, X-Large',
        'package' => 'Not specified',
        'imagepath' => 'images/products/capsicum.jpg',
          'category_id' => $vegetables->id
    ],

    [
        'id'=>12,
        'name' => 'Red Chili Pepper',
        'season' => 'From November till June',
        'variety' => 'Green and Red varieties',
        'specification' => null,
        'sizes' => 'Length: 5-13 cm',
        'package' => 'Loose in 4-5 kg boxes',
        'imagepath' => 'images/products/chili.jpg',
          'category_id' => $vegetables->id
    ],
    [
    'id' => 13,
    'name' => 'Fresh/Sweet Potato',
    'season' => 'From July till June',
    'variety' => 'Beauregard, Bellevue',
    'specification' => 'Class 1: S (<150g), M (150–300g), L1 (300–450g), L2 (450–600g), XL (600–900g), XXL (900–1200g). Class 2: M–XXL',
    'sizes' => 'See specification',
    'package' => 'Class 1: 6 kg or 18 kg. Class 2: 600 kg bins',
    'imagepath' => 'images/products/potatos.jpg',
    'category_id' => $vegetables->id
],
[
    'id' => 14,
    'name' => 'Fresh Strawberries',
    'season' => 'From November till April',
    'variety' => 'Festival, Fortuna, Florida, Sensation',
    'specification' => 'GLOBALG.A.P 9001 Certified',
    'sizes' => '10 punnets × 250g, 8 punnets × 500g',
    'package' => 'Boxes: 2kg or 2.5kg',
    'imagepath' => 'images/products/strawberry.jpg',
    'category_id' => $fruits->id
],
[
    'id' => 15,
    'name' => 'Navel Oranges',
    'season' => 'December till February',
    'variety' => null,
    'specification' => null,
    'sizes' => '36, 40, 48, 56, 64',
    'package' => '8/15 kg Open Top or Telescopic boxes',
    'imagepath' => 'images/products/orange.jpg',
    'category_id' => $fruits->id
],
[
    'id' => 16,
    'name' => 'Valencia Oranges',
    'season' => 'January till end of May',
    'variety' => null,
    'specification' => 'Class 2: available in 800kg bins',
    'sizes' => '48, 56, 64, 72, 80, 88, 100',
    'package' => '8/15 kg Open Top or Telescopic boxes, or bins',
    'imagepath' => 'images/products/orange.jpg',
    'category_id' => $fruits->id
],
[
    'id' => 17,
    'name' => 'Mandarin',
    'season' => 'December till end of February',
    'variety' => null,
    'specification' => null,
    'sizes' => '75, 88, 100, 110, 125, 136, 144',
    'package' => '8 kg or 15 kg Telescopic boxes',
    'imagepath' => 'images/products/mandrin.jpg',
    'category_id' => $fruits->id
],
[
    'id' => 18,
    'name' => 'Pomegranates',
    'season' => 'Baladi (July–Sep), 116 (Aug–Sep), Wonderful (Sep–Dec)',
    'variety' => 'Baladi, 116, Wonderful',
    'specification' => 'Sizes differ per variety',
    'sizes' => 'Baladi: 6–12 | 116: 10–15 | Wonderful: 6–12',
    'package' => '3.8 kg per box',
    'imagepath' => 'images/products/pome.jpg',
    'category_id' => $fruits->id
],
[
    'id' => 19,
    'name' => 'Fresh Table Grapes',
    'season' => 'May to September',
    'variety' => 'Prime Seedless, Sugerone, Redglobe, Autumn Royal, Crimson',
    'specification' => 'Based on weeks: Prime (18–24), Sugerone (20–26), etc.',
    'sizes' => '500g units',
    'package' => '5 kg (10 punnets × 500g) or 4.5 kg (9 bags × 500g)',
    'imagepath' => 'images/products/grapes.jpg',
    'category_id' => $fruits->id
],
[
    'id' => 20,
    'name' => 'Fresh Mangoes',
    'season' => 'July till December',
    'variety' => 'Zebdia, Keitt, Naomi, Tommy, Heidi, Kent, Chilly',
    'specification' => null,
    'sizes' => '6, 7, 8, 9, 10, 11',
    'package' => '5 kg boxes',
    'imagepath' => 'images/products/mangoo.jpg',
    'category_id' => $fruits->id
],


        

        ];

        DB::table('products')->insertOrIgnore($products);
    }
}

