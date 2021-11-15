<?php

namespace Database\Seeders;

use App\Models\Formulario;
use App\Models\Grupo;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Grupo::create([
            'dia' => 'Martes'
        ]);
        Grupo::create([
            'dia' => 'Jueves'
        ]);
        User::create([
            'name' => 'Brandon Villegas',
            'email' => 'brandon@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('brandon123'),
            'remember_token' => Str::random(10),     
        ]);
        User::create([
            'name' => 'Rául Ramos',
            'email' => 'raul@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('brandon123'),
            'remember_token' => Str::random(10),   
            'type' => 1,  
        ]);
        User::create([
            'name' => 'Mario Lopez ',
            'email' => 'lopezma@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('brandon123'),
            'remember_token' => Str::random(10),
            'grupo_id' => 1,     
        ]);
        User::create([
            'name' => 'Ana Espinoza',
            'email' => 'analo@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('brandon123'),
            'remember_token' => Str::random(10),
            'grupo_id' => 1,     
        ]);

        User::create([
            'name' => 'Lizbeth Torres ',
            'email' => 'torreslizbe@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('brandon123'),
            'remember_token' => Str::random(10),
            'grupo_id' => 1,     
        ]);

        User::create([
            'name' => 'Linneth Rocabado',
            'email' => 'linnethlop@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('brandon123'),
            'remember_token' => Str::random(10),
            'grupo_id' => 1,     
        ]);
        User::create([
            'name' => 'Miguel Coronel',
            'email' => 'linsds@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('brandon123'),
            'remember_token' => Str::random(10),
            'grupo_id' => 1,     
        ]);
        User::create([
            'name' => 'Steven Vazquez',
            'email' => 'linsdsasdas@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('brandon123'),
            'remember_token' => Str::random(10),
            'grupo_id' => 2,     
        ]);
        User::create([
            'name' => 'Luis Martínez',
            'email' => 'Steven@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('brandon123'),
            'remember_token' => Str::random(10),
            'grupo_id' => 2,     
        ]);
        User::create([
            'name' => 'Jesus Matty',
            'email' => 'Stevsesn@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('brandon123'),
            'remember_token' => Str::random(10),
            'grupo_id' => 2,     
        ]);
        User::create([
            'name' => 'Vicente Ciapara',
            'email' => 'Vicente@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('brandon123'),
            'remember_token' => Str::random(10),
            'grupo_id' => 2,     
        ]);
        User::create([
            'name' => 'Fernando Elenes',
            'email' => 'Vicentex@gmail.com',
            'email_verified_at' => now(),
            'password' => bcrypt('brandon123'),
            'remember_token' => Str::random(10),
            'grupo_id' => 2,     
        ]);

        Formulario::create([
            'temperatura' => 'si',
            'respirar' => 'no',
            'dolor_muscular' => 'no',
            'dolor_garganta' => 'no',
            'score' => 1,
            'user_id' => 10,
        ]);

        Formulario::create([
            'temperatura' => 'si',
            'respirar' => 'si',
            'dolor_muscular' => 'si',
            'dolor_garganta' => 'no',
            'score' => 3,
            'user_id' => 5,
        ]);
    }
}
