<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
        'name' => 'Web Design', 
        'slug' => 'web-design'  
        ]);

        Category::create([
        'name' => 'IOT', 
        'slug' => 'IOT'  
        ]);

        Category::create([
        'name' => 'Web Programing', 
        'slug' => 'web-programing'  
        ]);

        Category::create([
        'name' => 'Networking', 
        'slug' => 'networking'  
        ]);
    }
}
