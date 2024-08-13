<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    public function run()
    {
        //Category::factory()->count(5)->create(); // 5 adet kategori oluşturur
        $categories = [
            ['name' => 'Fuar', 'description' => 'Fuar haberleri'],
            ['name' => 'Sergi', 'description' => 'Sergi haberleri'],

        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
