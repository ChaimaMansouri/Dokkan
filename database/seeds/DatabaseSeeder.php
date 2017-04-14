<?php

use Illuminate\Database\Seeder;
use App\Region;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Region::Create(['name' => 'Ariana']);
        Region::Create(['name' => 'Béja']);
        Region::Create(['name' => 'Ben Arous']);
        Region::Create(['name' => 'Bizerte']);
        Region::Create(['name' => 'Gabès']);
        Region::Create(['name' => 'Gafsa']);
        Region::Create(['name' => 'Jendouba']);
        Region::Create(['name' => 'Kairouan']);
        Region::Create(['name' => 'Kasserine']);
        Region::Create(['name' => 'Kébili']);
        Region::Create(['name' => 'Le Kef']);
        Region::Create(['name' => 'Mahdia']);
        Region::Create(['name' => 'La Manouba']);
        Region::Create(['name' => 'Médenine']);
        Region::Create(['name' => 'Monastir']);
        Region::Create(['name' => 'Nabeul']);
        Region::Create(['name' => 'Sfax']);
        Region::Create(['name' => 'Sidi Bouzid']);
        Region::Create(['name' => 'Siliana']);
        Region::Create(['name' => 'Sousse']);
        Region::Create(['name' => 'Tataouine']);
        Region::Create(['name' => 'Tozeur']);
        Region::Create(['name' => 'Tunis']);
        Region::Create(['name' => 'Zaghouan']);


    }
}
