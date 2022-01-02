<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Categoria;
use Faker\Factory as Faker;

class CategoriaSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        for ($i=0; $i<3;$i++)
        {
        	Categoria::create
        	([
        		'descrition'=>$faker->word(),
        		'nombre'=>$faker->word(),
        		'telefono'=>$faker->randomNumber(7)
        		
        	]);
        }
        // $this->call(UserSeeder::class);
    }
}