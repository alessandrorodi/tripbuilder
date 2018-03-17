<?php

namespace Someline\Transformers;

use Someline\Models\Foundation\Airport;

/**
 * Class UserTransformer
 * @package namespace Someline\Transformers;
 */
class AirportTransformer extends BaseTransformer
{

    /**
     * Transform the User entity
     * @param User $model
     *
     * @return array
     */
    public function transform(Airport $model)
    {
        return [
            'id' => (int)$model->id,
            'ident' => $model->ident,
            'name' => $model->name,
            'iso_country' => $model->iso_country,
            'continent' => (string)$model->continent,
            'municipality' => (string)$model->municipality,
        ];
    }
}
