<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            ['name' => 'Marketing'],
            ['name' => 'Business'],
            ['name' => 'Finance'],
            ['name' => 'Entrepreneurship'],
            ['name' => 'Science'],
            ['name' => 'Biography']
        ]);
    }
}
