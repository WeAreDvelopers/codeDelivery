<?php

use Illuminate\Database\Seeder;
use CodeDelivery\Models\User;
use CodeDelivery\Models\Client;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class,10)->create()->each(function($c){

       	for ($i=0; $i <= 5; $i++) { 
       		$c->client()->save(factory(Client::class)->make());
       	}
       });
        factory(User::class)->create([
            'name' => 'User',
            'email' => 'user@user.com',
            'password' => bcrypt('123456'),
            'role'=>'user',
            'remember_token' => str_random(10),
        ]);
        factory(User::class)->create([
            'name' => 'Rafael',
            'email' => 'rafaw940@yahoo.com.br',
            'password' => bcrypt('123456'),
            'role'=>'admin',
            'remember_token' => str_random(10),
        ]);
    }
}
