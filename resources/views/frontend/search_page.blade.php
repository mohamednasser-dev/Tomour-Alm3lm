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
            <form action="{{route('reservation.search.now')}}" method="post" >
                @csrf
            <div>
                <label for="code" class="form-label">رقم الهوية :</label>
                <input type="number"  pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==10) return false;" class="form-control" id="search" name="search" required />
            </div>
            <div class="row row-code" style="margin-top: 25px;justify-content: center;">

                    <button class="btn btn-warning submit-btn"
                            style="background-color: #B08400; !important; color: white;" type="submit">
                        بحث
                    </button>
                    <a href="{{route('web-home')}}" class="btn btn-secondary submit-btn" type="button"
                       style="background-color: #6c757d !important; color: white">رجوع</a>

            </div>
            </form>
        </div>
    </form>
@endsection
