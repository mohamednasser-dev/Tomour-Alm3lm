<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\ReservationStoreRequest;
use App\Models\Reservation;


class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function storeReservation(ReservationStoreRequest $request)
    {
        $inputs = $request->validated();

        Reservation::create($inputs);
        return redirect()->back()->with('success', trans('lang.created'));
    }

}
