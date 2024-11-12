<?php


namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => [
                'uz' => 'stul',
                'en' => 'chair',
            ],
            'icon' => 'icon1.png',  // Icon qo'shish
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Category::create([
            'name' => [
                'uz' => 'stol',
                'en' => 'table',
            ],
            'icon' => 'icon2.png',  // Icon qo'shish
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Category::create([
            'name' => [
                'uz' => 'divan',
                'en' => 'armchair',
            ],
            'icon' => 'icon3.png',  // Icon qo'shish
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Category::create([
            'name' => [
                'uz' => 'yotoq',
                'en' => 'bed',
            ],
            'icon' => 'icon4.png',  // Icon qo'shish
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Category::create([
            'name' => [
                'uz' => 'kreslo',
                'en' => 'chair',
            ],
            'icon' => 'icon5.png',  // Icon qo'shish
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
