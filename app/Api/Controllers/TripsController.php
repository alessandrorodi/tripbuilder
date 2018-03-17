<?php


namespace Someline\Api\Controllers;

use Someline\Repositories\Interfaces\TripRepository;
use Someline\Validators\TripValidator;

class TripsController extends BaseController
{

    /**
     * @var TripRepository
     */
    protected $repository;

    /**
     * @var TripValidator
     */
    protected $validator;


    public function __construct(TripRepository $repository, TripValidator $validator)
    {
        $this->repository = $repository;
        $this->validator = $validator;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->repository->all();
    }



    /**
     * List the flights from this trip
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function listFlights($id)
    {
        return $this->repository->listFlightsForTrip($id);
    }


    /**
     * Adds a flight to a trip
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function addFlight($fromAirport,$toAirport,$id)
    {
        return $this->repository->addFlight($fromAirport,$toAirport,$id);
    }


    /**
     * Removes a flight from a trip
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function removeFlight($fromAirport,$toAirport,$id)
    {
        return $this->repository->removeFlight($fromAirport,$toAirport,$id);
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->repository->find($id);
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function remove($id)
    {
        $deleted = $this->repository->delete($id);

        if ($deleted) {
            // Deleted, return 204 No Content
            return $this->response->noContent();
        } else {
            // Failed, throw exception
            throw new DeleteResourceFailedException();
        }
    }
}
