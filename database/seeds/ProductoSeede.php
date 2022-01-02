<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Categoria;
use App\Producto;
use Faker\Factory as Faker;

class ProductoSeede extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        $cantidad=Categoria::all()->count();
        for ($i=0; $i<$cantidad;$i++)
        {
        	Producto::create
        	([
        		'nombre'=>$faker->word(),
        		'valor'=>$faker->randomFloat(1),
        		'cantidad'=>$faker->randomNumber(1),
                'categoria_id'=>$faker->numberBetween(1,$cantidad)
        		
        	]);
        }
        // $this->call(UserSeeder::class);
    }
}