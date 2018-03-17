<?php

namespace Someline\Repositories\Interfaces;

use Someline\Repositories\Interfaces\BaseRepositoryInterface;

/**
 * Interface FlightRepository
 * @package namespace Someline\Repositories\Interfaces;
 */
interface FlightRepository extends BaseRepositoryInterface
{
    /**
     * @param array|Collection $userIds
     * @return $this
     */
    public function byFlightIds($flightIds);
}
