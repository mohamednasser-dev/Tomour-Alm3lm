<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\ReservationStoreRequest;
use App\Models\Reservation;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index()
    {
        return view('frontend.index');
    }

    public function searchPage()
    {
        return view('frontend.search_page');
    }

    public function storeReservation(ReservationStoreRequest $request)
    {
        $inputs = $request->validated();
        $reservation_count = Reservation::get()->count();
        if($reservation_count == 0){
            $inputs['id'] = 100 ;
        }
        $exists_old_reservation = Reservation::where('id_number',$inputs['id_number'])->first();
        if($exists_old_reservation){
            return redirect()->back()->with('error', ' لم يتم الحفظ , هناك طلب تم تقديمه من قبل برقم الهويه المضاف ');

        }
        $reservation = Reservation::create($inputs);
        $mesage = 'تم اضافة طلبك بنجاح - رقم الطلب الخاص بك : '.$reservation->id ;
        return redirect()->back()->with('success', $mesage);
    }
    public function searchReservation($search)
    {
        $reservation = Reservation::whereId($search)->first();
        if($reservation){
            if($reservation->status == 'rejected'){
                $msg = 'تم رفض طلبك والسبب '. $reservation->reject_reasons ;
            }else{
                $msg = 'حالة الطلب رقم ' . $reservation->id .' هي '. trans('lang.'.$reservation->status) ;
            }
        }else{
            $msg =  'الطلب غير موجود' ;
        }
        return  view('frontend.search_result',compact('msg'));
    }

    public function search(Request $request)
    {
        $reservation = Reservation::where('id_number',$request->search)->first();
        if($reservation){
            if($reservation->status == 'rejected'){
                $msg = 'تم رفض طلبك والسبب '.$reservation->reject_reasons ;
            }else{
                $msg = 'حالة الطلب رقم ' . $reservation->id.' هي '. trans('lang.'.$reservation->status) ;
            }
        }else{
            $msg =  'الطلب غير موجود' ;
            $reservation =null;
        }
        return  view('frontend.search_result',compact('msg','reservation'));
    }
}
