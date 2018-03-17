<?php

namespace Someline\Repositories\Interfaces;

use Someline\Repositories\Interfaces\BaseRepositoryInterface;

/**
 * Interface AirportRepository
 * @package namespace Someline\Repositories\Interfaces;
 */
interface AirportRepository extends BaseRepositoryInterface
{
    /**
     * @param array|Collection $userIds
     * @return $this
     */
    public function byAirportIds($airportIds);

    public function randomizeAirports();

}
