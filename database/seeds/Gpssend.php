<?php

use Illuminate\Database\Seeder;
use App\Simuno;
use Faker\Factory as Faker;
use App\GPS;
use Illuminate\Database\Eloquent\Model;

class Gpssend extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $faker=Faker::create();
        $cantidad=Simuno::All()->count();     
        for ($i=0; $i<$cantidad;$i++)
        {
        	GPS::create
        	([        	
                'lat'=>$faker->latitude(),
                'lng'=>$faker->longitude(), 
                'sim_id'=>$faker->numberBetween(1,$cantidad)    		
        	]);
        }
    }
}
