<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name'=>'Valeria Estrada',
            'email'=>'valeria.1701611154@ucaldas.edu.co',
            'password'=> Hash::make('hola123'),
        ]);
    }
}
