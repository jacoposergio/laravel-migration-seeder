<?php

use Illuminate\Database\Seeder;
use\App\Package;
use Faker\Generator as Faker;

class PackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {  
         $vehicle_types = [
        'Bus',
        'Aereoplane',
        'Car'
         ];
        // creare un x numero di righe nella tabella packages
        for ($i = 1; $i <=5; $i++) {
            $new_package = new Package();
            $new_package->country = $faker->country();
            $new_package->vehicle =  $faker->randomElement($vehicle_types);
            $new_package->distance = $faker->randomNumber(2, true);
            $new_package->passengers = $faker->randomNumber(2, true);
            $new_package->is_promo = $faker->boolean();
            $new_package->description = $faker->paragraphs(7, true);
            $new_package->price = $faker->randomNumber(4, false);
            //salvare la riga
            $new_package->save();
        }
        
    }
}
