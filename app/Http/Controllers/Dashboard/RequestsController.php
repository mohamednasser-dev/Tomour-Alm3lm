<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\Dashboard\ReservationDataTable;
use App\Http\Controllers\GeneralController;
use App\Models\Admin;
use App\Models\Reservation;
use Illuminate\Http\Request;

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
        $data = $this->model->with('banks')->whereId($id)->firstOrFail();

        return view($this->viewPath($this->viewPath . 'edit'), compact('data'));
    }

    public function update(Request $request, $id)
    {

        // Get and Check Data
        $data = $this->model->with('banks')->whereId($id)->firstOrFail();
        $data->status = $request->status;
        $data->reject_reasons = $request->reject_reasons;
        $data->save();

        return redirect()->route($this->route)->with('success', trans('lang.updated'));
    }


}
