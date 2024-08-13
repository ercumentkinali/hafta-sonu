<?php

namespace Database\Factories;

use App\Models\News;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
{
    protected $model = News::class;

    public function definition()
    {
        $dataTypes = ['full_content', 'full_image', 'no_image','reklam'];
        $category = Category::inRandomOrder()->first();
        $images = glob(public_path('images/fake') . '/*.jpg');
        $image_url = basename($images[array_rand($images)]);
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'content' => $this->faker->text,
            'image_url' => 'images/fake/' . $image_url,
            'category_id' => $category->id,
            'data_type' => $dataTypes[array_rand($dataTypes)],
            'created_at' => now(),
            'updated_at' => now(),
         ];
    }
}
