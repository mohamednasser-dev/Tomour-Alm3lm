@php($title=trans('lang.reservations'))
@extends('adminLayouts.app')
@section('title')
    {{$title}}
@endsection
@section('header')

@endsection
@section('breadcrumb')
    <div class="d-flex align-items-baseline flex-wrap mr-5">
        <!--begin::Breadcrumb-->
        <h5 class="text-dark  font-weight-bold my-1 mr-5">{{$title}}</h5>
        <div class="subheader-separator subheader-separator-ver mt-2 mb-2 mr-4 bg-gray-200"></div>
        <ul class="breadcrumb breadcrumb-transparent breadcrumb-dot font-weight-bold p-0 my-2 font-size-sm">
            <li class="breadcrumb-item">
                <a href="{{route('admin')}}"
                   class="text-muted">{{trans('lang.dashboard')}}</a>
            </li>

        </ul>
        <!--end::Breadcrumb-->
    </div>
@endsection
@section('content')

    <div class="card">

        <div class="card-header border-0 pt-5">

            <div class="card-toolbar">

                <div class="dropdown dropdown-inline mr-2">
                    <button type="button" class="btn btn-light-info font-weight-bolder dropdown-toggle"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <span class="svg-icon svg-icon-md"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\Text\Filter.svg--><svg
                         xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                         height="24px" viewBox="0 0 24 24" version="1.1">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path
            d="M5,4 L19,4 C19.2761424,4 19.5,4.22385763 19.5,4.5 C19.5,4.60818511 19.4649111,4.71345191 19.4,4.8 L14,12 L14,20.190983 C14,20.4671254 13.7761424,20.690983 13.5,20.690983 C13.4223775,20.690983 13.3458209,20.6729105 13.2763932,20.6381966 L10,19 L10,12 L4.6,4.8 C4.43431458,4.5790861 4.4790861,4.26568542 4.7,4.1 C4.78654809,4.03508894 4.89181489,4 5,4 Z"
            fill="#000000"/>
    </g>
</svg><!--end::Svg Icon--></span>
                        فلتر

                    </button>
                    <!--begin::Dropdown Menu-->
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right" style="">
                        <!--begin::Navigation-->
                        <ul class="navi flex-column navi-hover py-2">

                            <li class="navi-item">
                                <form method="get" id="form" action="" enctype="multipart/form-data">
                                    <div class="mb-4">
                                        &nbsp;&nbsp;
                                        <div class="form-check form-check-inline form-check-reverse">
                                            <label class="form-check-label pe-2 ps-5"
                                                   for="rightsInlineRadio1">  موظف؟ </label> &nbsp;&nbsp;
{{--                                            <input class="form-check-input" type="checkbox" name="is_employee"--}}
{{--                                                   id="rightsInlineRadio1" value="1"--}}
{{--                                                   @if(request()->is_employee) checked @endif>--}}
                                            <select name="is_employee" required class="form-select"
                                                    aria-label="Small select example"
                                                    id="">
                                                <option selected >-- الكل   --</option>
                                                <option @if(request()->is_employee == "1") selected @endif  value="1">موظف </option>
                                                <option @if(request()->is_employee == "0") selected @endif  value="0">غير موظف </option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        &nbsp;&nbsp;
                                        <div class="form-check form-check-inline form-check-reverse">
                                            <label class="form-check-label pe-2 ps-5"
                                                   for="rightsInlineRadio2">  يوجد سجل تجاري؟
                                            </label> &nbsp;&nbsp;
{{--                                            <input class="form-check-input" type="checkbox" name="c_r_num"--}}
{{--                                                   id="rightsInlineRadio2" value="1"--}}
{{--                                                   @if(request()->c_r_num) checked @endif>--}}
                                            <select name="c_r_num" required class="form-select"
                                                    aria-label="Small select example"
                                                    id="">
                                                <option selected >-- الكل   --</option>
                                                <option @if(request()->c_r_num == "1") selected @endif  value="1">يوجد سجل تجاري </option>
                                                <option @if(request()->c_r_num == "0") selected @endif  value="0">لا سجل تجاري </option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        &nbsp;&nbsp;
                                        <div class="form-check form-check-inline form-check-reverse">
                                            <label class="form-check-label pe-2 ps-5"
                                                   for="rightsInlineRadio3"> يوجد دعوي قضائية؟
                                                 </label> &nbsp;&nbsp;
{{--                                            <input class="form-check-input" type="checkbox" name="is_lawsuit"--}}
{{--                                                   id="rightsInlineRadio3" value="1"--}}
{{--                                                   @if(request()->is_lawsuit) checked @endif>--}}
                                            <select name="is_lawsuit" required class="form-select"
                                                    aria-label="Small select example"
                                                    id="">
                                                <option selected >-- الكل   --</option>
                                                <option @if(request()->is_lawsuit == "1") selected @endif  value="1">يوجد دعوي قضائية </option>
                                                <option @if(request()->is_lawsuit == "0") selected @endif  value="0">لا دعوي قضائية </option>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="mb-4">
                                        &nbsp;&nbsp;
                                        <div class="form-check form-check-inline form-check-reverse">
                                            <label class="form-check-label pe-2 ps-5"
                                                   for="rightsInlineRadio4">يرغب بالحصول على حقوق الامتياز   ؟ </label>
{{--                                            <input class="form-check-input" type="checkbox" name="is_rights"--}}
{{--                                                   id="rightsInlineRadio4" value="1"--}}
{{--                                                   @if(request()->is_rights) checked @endif>--}}
                                            <select name="is_rights" required class="form-select"
                                                    aria-label="Small select example"
                                                    id="">
                                                <option selected >-- الكل   --</option>
                                                <option @if(request()->is_rights == "1") selected @endif  value="1">نعم  </option>
                                                <option @if(request()->is_rights == "0") selected @endif  value="0">لا  </option>

                                            </select>
                                        </div>
                                    </div>
                                    &nbsp;&nbsp;
                                    <button type="submit" class="btn btn-info">بحث</button>
                                </form>
                            </li>

                        </ul>
                        <!--end::Navigation-->
                    </div>
                    <!--end::Dropdown Menu-->
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                {!! $dataTable->table() !!}

            </div>
        </div>
    </div>


@endsection
@push('scripts')
    {!! $dataTable->scripts() !!}

@endpush


