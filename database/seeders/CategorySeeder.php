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
        $categories = [
            [
                'name' => 'Apple',
                'slug' => 'apple',
            ],
            [
                'name' => 'Oppo',
                'slug' => 'oppo',
            ],
            [
                'name' => 'Realme',
                'slug' => 'Realme',
            ],
            [
                'name' => 'Samsung',
                'slug' => 'samsung',
            ],
            [
                'name' => 'Vivo',
                'slug' => 'vivo',
            ],
            [
                'name' => 'Xiaomi',
                'slug' => 'xiaomi',
            ],
            [
                'name' => 'Entry Level',
                'slug' => 'entry-level',
            ],
            [
                'name' => 'Mid Range',
                'slug' => 'mid-range',
            ],
            [
                'name' => 'Flagship',
                'slug' => 'flagship',
            ],
        ];

        Category::insert($categories);
    }
}
