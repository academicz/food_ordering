<?php

use App\Models\FoodCategory;
use Illuminate\Database\Seeder;

class FoodCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category = new FoodCategory();
        $category->category_name = 'Fried';
        $category->save();

        $category = new FoodCategory();
        $category->category_name = 'Roasted';
        $category->save();
    }
}
