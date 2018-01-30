<?php

namespace CodeDelivery\Transformers;

use League\Fractal\TransformerAbstract;
use CodeDelivery\Models\User;

/**
 * Class ClientTransformer
 * @package namespace CodeDelivery\Transformers;
 */
class DeliverymanTransformer extends TransformerAbstract
{

    /**
     * Transform the \Client entity
     * @param \Client $model
     *
     * @return array
     */
    public function transform(User $model)
    {
        return [
            'id'         => (int) $model->id,
            'name'         =>  $model->name,
            'email'         => $model->email,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
