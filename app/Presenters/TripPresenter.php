<?php

namespace Someline\Presenters;

use Someline\Transformers\TripTransformer;

/**
 * Class UserPresenter
 *
 * @package namespace Someline\Presenters;
 */
class TripPresenter extends BasePresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new TripTransformer();
    }
}
