<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Simuno;
use App\GPS;
class Simar extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       /*  $faker=Faker::create();
        for ($i=0; $i<3;$i++)
        {
        	Simuno::create
        	([
        		'serie'=>$faker->word(),
        		'keyread'=>$faker->word(),
        		'keywrite'=>$faker->randomNumber(7),
        		'lat'=>$faker->latitude(),
        		'lng'=>$faker->longitude()
        		
        	]);
        }*/
         $faker=Faker::create();
        $cantidad=Simuno::all()->count();     
        for ($i=0; $i<$cantidad;$i++)
        {
            GPS::create
            ([          
                'lnt'=>$faker->latitude(),
                'lng'=>$faker->longitude(), 
                'sim_id'=>$faker->numberBetween(1,$cantidad)            
            ]);
        }
    }
}
