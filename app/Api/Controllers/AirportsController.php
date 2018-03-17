<?php


namespace Someline\Api\Controllers;

use Someline\Repositories\Interfaces\AirportRepository;
use Someline\Validators\AirportValidator;


class AirportsController extends BaseController
{

    /**
     * @var AirportRepository
     */
    protected $repository;

    /**
     * @var AirportValidator
     */
    protected $validator;


    public function __construct(AirportRepository $repository, AirportValidator $validator)
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
