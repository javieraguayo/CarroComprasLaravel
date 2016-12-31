<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $data = array(
       [
            'name' => 'Super Heroe',
            'slug' => 'Super Heroe',
            'description' => 'orem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.',
            'color' => '#440022'
       ],
       [
            'name' => 'geek',
            'slug' => 'geek',
            'description' => 'orem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.',
            'color' => '#440000'
       ]
    );
    Category::insert($data);
    }
}