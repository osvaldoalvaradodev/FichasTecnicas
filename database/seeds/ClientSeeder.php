<?php

use Illuminate\Database\Seeder;
use App\Client;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::create(['name'=>'Baladi']);
        Client::create(['name'=>'Patagonia Sea Farms Inc']);
        Client::create(['name'=>'Zano']);
    }
}
