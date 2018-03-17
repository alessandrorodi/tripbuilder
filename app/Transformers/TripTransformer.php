<?php

namespace Someline\Transformers;

use Someline\Models\Foundation\Trip;

/**
 * Class UserTransformer
 * @package namespace Someline\Transformers;
 */
class TripTransformer extends BaseTransformer
{

    /**
     * Transform the User entity
     * @param User $model
     *
     * @return array
     */
    public function transform(Trip $model)
    {
        return [
            'id' => (int)$model->id,
            'name' => $model->name,
            'userId' => $model->userId,
            'created_at' => (string)$model->created_at,
        ];
    }
}
