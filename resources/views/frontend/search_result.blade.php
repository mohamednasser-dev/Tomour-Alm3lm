<form action="" method="post">
    <div class="form-header">
        <h2>نتيجة البحث عن الطلب</h2>
        <span></span>
    </div>
    @include('adminLayouts.errors')
    @include('adminLayouts.messages')
    <div class="form-body py-5">
        {{$msg}}
        <br>
        <div class="row row-code">
            <div>
                <a href="{{route('web-home')}}" class="btn submit-btn" type="button" id="btn-search">رجوع</a>
            </div>
        </div>
    </div>
</form>
