<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call('CategoriaSeeder');
         $this->call('Simar');
         $this->call('ProductoSeede');
         $this->call('Gpssend');
         
    }
}
