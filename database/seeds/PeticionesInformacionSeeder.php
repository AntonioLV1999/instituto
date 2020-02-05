<?php

use Faker\Factory;
use App\PeticionesInformacion;
use Illuminate\Database\Seeder;

class PeticionesInformacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (env('APP_ENV') != 'production') {
            DB::table('peticionesinformacion')->truncate();
            $peticionesinformacion = factory(App\PeticionesInformacion::class, 20)->create();
        }
    }
}
