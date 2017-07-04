'<?php

use Illuminate\Database\Seeder;
use CodeDelivery\Models\Order;
use CodeDelivery\Models\OrderItem;
use CodeDelivery\Models\Client;
class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Order::class,25)->create()->each(function($c){
            for ($i=0; $i <= 5; $i++) { 
       		   $c->items()->save(factory(OrderItem::class)->make());
            }
       });
    }
}
