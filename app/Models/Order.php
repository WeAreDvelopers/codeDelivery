<?php

namespace CodeDelivery\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class Order extends Model implements Transformable
{
    use TransformableTrait;

     protected $fillable = [
        'client_id',
        'user_deliveryman_id',
        'cupom_code',
        'total',
        'status',
    ];

   /* public function transform(){
        return [
            'order' => $this->id,
            'items' =>$this->items,
            'deliveryman' =>$this->deliveryman,
        ];
    }*/
    public function items(){
        return $this->hasMany(OrderItem::class);
    }

    public function deliveryman(){
        return $this->belongsTo(User::class);
    }
    public function products(){
        return $this->hasMany(Product::class);
    }
    public function client(){
        return $this->belongsTo(Client::class);
    }
    public function cupom(){
        return $this->belongsTo(Cupom::class);
    }
    

}
