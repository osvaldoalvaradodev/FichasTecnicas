<?php

use Illuminate\Database\Seeder;
use App\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::create(['name'=>'chile']);
        Country::create(['name'=>'usa']);
        Country::create(['name'=>'israel']);
    }
}
