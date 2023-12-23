@extends('frontend.app')
@section('content')
    <form action="" method="post">

        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="form-header">
                    <h2>نتيجة البحث عن الطلب</h2>
                    <span></span>
                </div>
            </div>
            <div class="col-md-3" style="direction: ltr;">
                <div style="margin-top: 46px;">
                    <a href="{{route('web-home')}}" class="btn btn-warning submit-btn"
                       style="background-color: #6c757d !important; color: white;">رجوع</a>
                </div>
            </div>
        </div>

        @include('adminLayouts.errors')
        @include('adminLayouts.messages')
        <div class="form-body py-5">
            <h2 style="color:  @if($reservation && $reservation->status == "rejected") red; @elseif($reservation && $reservation->status == "accepted") green; @else orange;@endif">
            {{$msg}}
            </h2>
        </div>
    </form>
@endsection
