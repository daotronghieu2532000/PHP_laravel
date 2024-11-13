<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Category;
use Faker\Factory as Faker;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $categories = Category::all();
    
        foreach (range(1, 100) as $index) {
            Book::create([
                'title' => $faker->sentence(3),
                'thumbnail' => $faker->imageUrl(200, 300, 'books'),
                'author' => $faker->name,
                'publisher' => $faker->company,
                'publication' => $faker->date(),
                'price' => $faker->randomFloat(2, 10, 100),
                'quantity' => $faker->numberBetween(1, 50),
                'category_id' => $categories->random()->id,
            ]);
    }
}
}
