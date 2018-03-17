<?php

namespace Someline\Transformers;

use Someline\Models\Foundation\Flight;

/**
 * Class UserTransformer
 * @package namespace Someline\Transformers;
 */
class FlightTransformer extends BaseTransformer
{

    /**
     * Transform the User entity
     * @param User $model
     *
     * @return array
     */
    public function transform(Flight $model)
    {
        return [
            'id' => (int)$model->id,
            'fromAirport' => $model->fromAirport,
            'toAirport' => $model->toAirport,
            'tripId' => $model->tripId,
            'created_at' => (string)$model->created_at,
        ];
    }
}
