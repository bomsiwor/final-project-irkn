<?php

namespace App\Controllers\API;

use App\Helpers\CustomAPIResponse;
use App\Models\RadiationModel;
use CodeIgniter\RESTful\ResourceController;

class RadiationHistory extends ResourceController
{
    use CustomAPIResponse;

    protected $model;

    protected $limit = 10;
    protected $offset = 0;

    public function __construct()
    {
        $this->model = new RadiationModel();
    }
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $limit = $this->request->getVar('limit');
        $offset = $this->request->getVar('offset');

        $data = $this->model->findAll($limit ?? $this->limit, $offset ?? $this->offset);

        if (!$data) :
            return $this->emptyResponse();
        endif;

        return $this->successResponse($data, 'Semua data penerimaan dosis radiasi');
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        //
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        //
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        //
    }
}
