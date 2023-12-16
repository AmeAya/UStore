<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Category;

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
                'name' => 'Dress',
                'photo' => 'https://source.unsplash.com/random/200x200',
                'slug' => 'Dress',
            ],
            [
                'name' => 'Jacket',
                'photo' => 'https://source.unsplash.com/random/200x200',
                'slug' => 'Jacket',
            ],
            [
                'name' => 'Shirt',
                'photo' => 'https://source.unsplash.com/random/200x200',
                'slug' => 'Shirt',
            ],
            [
                'name' => 'Sweater',
                'photo' => 'https://source.unsplash.com/random/200x200',
                'slug' => 'Sweater',
            ],
            [
                'name' => 'T-Shirt',
                'photo' => 'https://source.unsplash.com/random/200x200',
                'slug' => 'T-Shirt',
            ]
        ];

        foreach ($categories as $category) {
    		Category::create($category);
    	}
    }
}
