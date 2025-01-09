<?php

namespace Database\Seeders;

use App\Models\Categories;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(
            [
            [
            "categoryName"=> "Élelmiszer",
            "categoryId"=> 1,
            ],
            [
            "categoryName"=> "Zöldség-Gyümölcs",
            "categoryId"=> 2,
            ],
            [
            "categoryName"=> "Pékáru",
            "categoryId"=> 3,
            ],
            [
            "categoryName"=> "Ital",
            "categoryId"=> 4,
            ],
            [
            "categoryName"=> "Állateledel",
            "categoryId"=> 5,
            ],
            [
            "categoryName"=> "Háztartási cikkek",
            "categoryId"=> 6,
            ],
            ]
        );
    
    }
}
