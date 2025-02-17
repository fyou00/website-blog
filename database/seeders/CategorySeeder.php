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
        'slug' => 'web-design',
        'color' => 'red'
      ]);

      Category::create([
        'name' => 'UI UX',
        'slug' => 'ui-ux',
        'color' => 'green'
      ]);

      Category::create([
        'name' => 'Cyber Security',
        'slug' => 'cyber-security',
        'color' => 'blue'
      ]);

      Category::create([
        'name' => 'Data Stucture',
        'slug' => 'data-structure',
        'color' => 'yellow'
      ]);
      
      Category::create([
        'name' => 'Mobile Apps',
        'slug' => 'mobile-apps',
        'color' => 'gray'
      ]);
    }
}
