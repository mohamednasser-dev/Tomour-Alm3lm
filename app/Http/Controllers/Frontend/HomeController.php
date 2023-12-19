<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\ReservationSearchRequest;
use App\Http\Requests\Frontend\ReservationStoreRequest;
use App\Models\Reservation;
use App\Models\ReservationBank;


class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function storeReservation(ReservationStoreRequest $request)
    {
        $inputs = $request->validated();
        $reservation_count = Reservation::get()->count();
        if($reservation_count == 0){
            $inputs['id'] = 100 ;
        }
        unset($inputs['banks']);
        $reservation = Reservation::create($inputs);

        $mesage = 'تم اضافة طلبك بنجاح - رقم الطلب الخاص بك : '.$reservation->id ;
        return redirect()->back()->with('success', $mesage);
    }
    public function searchReservation($search)
    {
        $reservation = Reservation::whereId($search)->first();
        if($reservation){
            if($reservation->status == 'rejected'){
                $msg = 'تم رفض طلبك والسبب '.$reservation->reject_reasons ;
            }else{
                $msg = 'حالة الطلب رقم ' . $search.' هي '. trans('lang.'.$reservation->status) ;
            }
        }else{
            $msg =  'الطلب غير موجود' ;
        }
        return  view('frontend.search_result',compact('msg'));
    }

}
