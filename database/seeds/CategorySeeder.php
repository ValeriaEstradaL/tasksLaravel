<?php

use Illuminate\Database\Seeder;
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
        //
        Category::create([
            'name'=> 'Personales',
            'user_id'=> 1,
        ]);
        Category::create([
            'name'=> 'Trabajo',
            'user_id'=> 1,
        ]);
        Category::create([
            'name'=> 'Estudio',
            'user_id'=> 1,
        ]);
        Category::create([
            'name'=> 'Ejercicio',
            'user_id'=> 1,
        ]);
    }
}
