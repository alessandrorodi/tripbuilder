<?php

namespace Someline\Presenters;

use Someline\Transformers\AirportTransformer;
use Someline\Transformers\FlightTransformer;

/**
 * Class UserPresenter
 *
 * @package namespace Someline\Presenters;
 */
class AirportPresenter extends BasePresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new AirportTransformer();
    }
}
