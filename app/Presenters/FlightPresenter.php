<?php

namespace Someline\Presenters;

use Someline\Transformers\FlightTransformer;

/**
 * Class UserPresenter
 *
 * @package namespace Someline\Presenters;
 */
class FlightPresenter extends BasePresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new FlightTransformer();
    }
}
