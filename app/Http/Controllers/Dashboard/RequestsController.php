<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\Dashboard\ReservationDataTable;
use App\Http\Controllers\GeneralController;
use App\Models\Admin;
use App\Models\Reservation;

class RequestsController extends GeneralController
{
    protected $viewPath = 'reservations.';
    protected $path = 'reservations';
    private $route = 'reservations';

    public function __construct(Reservation $model)
    {
        parent::__construct($model);
    }


    public function index(ReservationDataTable $dataTable)
    {

        return $dataTable->render('Dashboard.reservations.index');
    }


    public function edit($id)
    {
        // Get and Check Data
        $data = $this->model->with('')->findorfail($id);
        dd($data);
        return view($this->viewPath($this->viewPath . 'edit'), compact('data'));
    }


}
