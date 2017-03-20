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
        factory(User::class,50)->create()->each(function($c){
       		$c->client()->save(factory(Client::class)->make());
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
        factory(User::class)->create([
            'name' => 'Entregador 1',
            'email' => 'entregador1@codedelivery.com.br',
            'password' => bcrypt('123456'),
            'role'=>'deliveryman',
            'remember_token' => str_random(10),
        ]);
        factory(User::class)->create([
            'name' => 'Entregador 2',
            'email' => 'entregador2@codedelivery.com.br',
            'password' => bcrypt('123456'),
            'role'=>'delivery',
            'remember_token' => str_random(10),
        ]);
        factory(User::class)->create([
            'name' => 'Entregador 3',
            'email' => 'entregador3@codedelivery.com.br',
            'password' => bcrypt('123456'),
            'role'=>'delivery',
            'remember_token' => str_random(10),
        ]);
    }
       
}
