@extends('frontend.app')
@section('content')
    <form action="" method="post">
        <div class="form-header">
            <h2>البحث عن الطلب</h2>
            <span></span>
        </div>
        @include('adminLayouts.errors')
        @include('adminLayouts.messages')
        <div class="form-body py-5">
            <div>
                <label for="code" class="form-label">رقم الطلب :</label>
                <input type="text" class="form-control" id="search" name="search" required/>
            </div>
            <div class="row row-code" style="margin-top: 25px;justify-content: center;">
                <div>
                    <button class="btn btn-warning submit-btn"
                            style="background-color: #B08400; !important; color: white;" type="button" id="btn-search">
                        بحث
                    </button>
                    <a href="{{route('web-home')}}" class="btn btn-secondary submit-btn" type="button"
                       style="background-color: #6c757d !important; color: white">رجوع</a>
                </div>
            </div>
        </div>
    </form>
@endsection
