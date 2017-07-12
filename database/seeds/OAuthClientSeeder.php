<?php

use Illuminate\Database\Seeder;

use CodeDelivery\Models\OAuthClient;
class OAuthClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(OAuthClient::class)->create();
    }
       
}
