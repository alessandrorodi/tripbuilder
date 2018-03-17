<?php


namespace Someline\Api\Controllers;

use Someline\Repositories\Interfaces\FlightRepository;
use Someline\Repositories\Interfaces\TripRepository;
use Someline\Validators\FlightValidator;
use Someline\Validators\TripValidator;

class FlightsController extends BaseController
{

    /**
     * @var FlightRepository
     */
    protected $repository;

    /**
     * @var FlightValidator
     */
    protected $validator;


    public function __construct(FlightRepository $repository, FlightValidator $validator)
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
     * Add a newly created resource in storage.
     *
     * @param  TripCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     */
    public function add(FlightCreateRequest $request)
    {

        $data = $request->all();

        $this->validator->with($data)->passesOrFail(ValidatorInterface::RULE_CREATE);

        $user = $this->repository->create($data);

        return $user;

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
