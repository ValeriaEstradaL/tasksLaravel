<?php

use Illuminate\Database\Seeder;
use App\Task;
use App\Category;
class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Task::create([
            'description'=> 'Ser mejor persona',
            'category_id'=> 1,
            'user_id'=> 1,
        ]);
        Task::create([
            'description'=> 'Participar en el grupo de estudio de laravel',
            'date_planed'=> '2020-11-15',
            'category_id'=> 3,
            'user_id'=> 1,
        ]);
        Task::create([
            'description'=> 'Terminar repaso',
            'category_id'=> 3,
            'user_id'=> 1,
        ]);
    }
}
