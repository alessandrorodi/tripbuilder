<?php

namespace Someline\Repositories\Interfaces;

use Someline\Repositories\Interfaces\BaseRepositoryInterface;

/**
 * Interface TripRepository
 * @package namespace Someline\Repositories\Interfaces;
 */
interface TripRepository extends BaseRepositoryInterface
{
    /**
     * @param array|Collection $userIds
     * @return $this
     */
    public function byTripIds($tripIds);
}


