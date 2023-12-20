@extends('frontend.app')
@section('content')
    <form action="{{route('reservation.store')}}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="form-header">
                    <h2>تقدم بطلب الإمتياز التجاري</h2>
                    <span></span>
                </div>
            </div>
            <div class="col-md-3" style="direction: ltr;">
                <div style="margin-top: 46px;">
                    <a href="{{route('reservation.search.page')}}" class="btn btn-warning submit-btn"
                       style="background-color: #B08400; !important; color: white;" type="button" id="btn-search">متابعة
                        طلبك</a>
                </div>
            </div>
        </div>
        @include('adminLayouts.errors')
        @include('adminLayouts.messages')
        <div class="form-body py-5">

            <div class="row">
                <div class="mb-4">
                    <label for="name" class="form-label">الاسم رباعي</label>
                    <input type="text" required name="full_name" class="form-control" id="full_name"
                           value="{{old('full_name')}}"
                           placeholder="ادخل الاسم رباعي">
                </div>
                <div class="mb-4">
                    <label for="id_number" class="form-label">رقم الهوية</label>
                    <input type="text" required name="id_number" class="form-control" id="id_number"
                           value="{{old('id_number')}}"
                           placeholder="ادخل رقم الهوية ">
                </div>
                <div class="mb-4">
                    <label for="phone" class="form-label">رقم الجوال</label>
                    {{--                    <input type="num" required name="phone" class="form-control" id="phone"--}}
                    {{--                           placeholder="ادخل رقم الجوال ">--}}
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1" style="height: 40px">
                                <img src="{{url('assets/media/svg/flags/008-saudi-arabia.svg')}}" alt="KSA Flag"
                                     width="20"
                                     height="auto">
                            </span>
                        </div>
                        <input type="number" required name="phone" class="form-control" id="phone"
                               placeholder="ادخل رقم الجوال" value="{{old('phone')}}">
                    </div>
                </div>
                <div class="mb-4">
                    <label for="email" class="form-label">البريد الإلكتروني</label>
                    <input type="email" name="email" required class="form-control" id="email"
                           placeholder="ادخل البريد الإلكتروني " value="{{old('email')}}">
                </div>
                <div class="mb-4">
                    <label class="form-label">لايوجد اي سجل
                        تجاري</label>  &nbsp; &nbsp;
                    <input type="checkbox" class="form-check-input" id="is_no_cr_num">
                </div>
                <div class="mb-4" id="c_r_num">
                    <label for="c_r_num" class="form-label">رقم السجل التجارى</label>

                    <input type="number" required name="c_r_num" value="{{old('c_r_num')}}" class="form-control"
                           id="c_r_num"
                           placeholder="ادخل رقم السجل التجارى ">
                </div>
                <div class="mb-4">
                    <label for="address" class="form-label">العنوان</label>
                    <input type="text" required name="address" class="form-control" id="address"
                           placeholder="ادخل العنوان" value="{{old('address')}}">
                </div>

                {{--                <div class="mb-4">--}}
                {{--                    <label for="city" class="form-label">المدينة</label>--}}
                {{--                    <select name="city" required class="form-select"--}}
                {{--                            aria-label="Small select example"--}}
                {{--                            id="city">--}}
                {{--                        <option selected disabled>-- فضلا اختر المدينة --</option>--}}
                {{--                        @foreach(\App\Models\City::orderBy('id','desc')->get() as $row)--}}
                {{--                            <option value="{{$row->name}}">{{$row->name}}</option>--}}
                {{--                        @endforeach--}}
                {{--                    </select>--}}
                {{--                </div>--}}
                {{--                <div class="mb-4">--}}
                {{--                    <label for="government" class="form-label">المحافظة</label>--}}
                {{--                    <input type="text" required name="government" class="form-control" id="government"--}}
                {{--                           placeholder="ادخل المحافظة">--}}
                {{--                </div>--}}
                <div class="mb-4">
                    <label class="form-label">هل لديك دعوى قضائية مازالت تحت النظر ؟</label>
                    <div class="question ">
                        <div class="form-check form-check-inline form-check-reverse">
                            <input class="form-check-input" type="radio" name="is_lawsuit"
                                   id="stillLawsuitInlineRadio1" value="1" required>
                            <label class="form-check-label pe-2 ps-5"
                                   for="stillLawsuitInlineRadio1">نعم</label>
                        </div>
                        <div class="form-check form-check-inline form-check-reverse">
                            <input class="form-check-input" type="radio" name="is_lawsuit"
                                   id="stillLawsuitInlineRadio2" value="0">
                            <label class="form-check-label pe-2 ps-5"
                                   for="stillLawsuitInlineRadio2">لا</label>
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <label class="form-label">هل انت موظف ؟ </label>
                    <div class="question ">
                        <div class="form-check form-check-inline form-check-reverse">
                            <input class="form-check-input" type="radio" name="is_employee"
                                   id="workTypeInlineRadio1" value="1" required>
                            <label class="form-check-label pe-2 ps-5" for="workTypeInlineRadio1">قطاع
                                خاص</label>
                        </div>
                        <div class="form-check form-check-inline form-check-reverse">
                            <input class="form-check-input" type="radio" name="is_employee"
                                   id="workTypeInlineRadio2" value="0">
                            <label class="form-check-label pe-2 ps-5" for="workTypeInlineRadio2">
                                قطاع حكومى</label>
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="company_name" class="form-label">اسم الجهة او الشركة</label>
                    <input type="text" name="company_name" class="form-control" id="company_name"
                           placeholder="" value="{{old('company_name')}}">
                </div>
                <div class="mb-4">
                    <label for="income_source" class="form-label">مصادر الدخل ؟ </label>
                    <div class="input-group flex-nowrap">
                        <textarea type="number" required name="income_source" class="form-control"
                                  placeholder="برجاء تحديد مصادر الدخل الشهرية"
                                  aria-describedby="addon-currency"
                                  id="income_source">{{old('income_source')}}</textarea>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="salary" class="form-label">الدخل الشهري </label>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-currency">ر.س</span>
                        <input type="number" required name="salary" class="form-control"
                               placeholder="الدخل الشهري" aria-label="currency"
                               aria-describedby="addon-currency" id="salary" value="{{old('salary')}}">
                    </div>
                </div>
                <div class="mb-4">
                    <label for="financial" class="form-label">الالتزامات المالية ؟ </label>
                    <div class="input-group flex-nowrap">
                        <textarea type="number" required name="financial" class="form-control"
                                  placeholder="برجاء كتابة الالتزامات المالية "
                                  aria-describedby="addon-currency" id="financial">{{old('financial')}}</textarea>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="projects_owned" class="form-label">المشاريع المملوكة و القائمة ؟ </label>
                    <div class="input-group flex-nowrap">
                        <textarea type="number" required name="projects_owned" class="form-control"
                                  placeholder="برجاء كتابة المشاريع المملوكة و القائمة "
                                  aria-describedby="addon-currency"
                                  id="projects_owned">{{old('projects_owned')}}</textarea>
                    </div>
                </div>

                <div class="mb-4">
                    <label for="projects_owned" class="form-label">هل تم منحك حقوق الامتياز لاي علامة تجارية ؟ </label>

                    <div class="question ">
                        <div class="form-check form-check-inline form-check-reverse">
                            <input class="form-check-input" type="radio" name="have_granted_brand"
                                   id="relocateInlineRadio1" value="1" required>
                            <label class="form-check-label pe-2 ps-5"
                                   for="relocateInlineRadio1">نعم</label>
                        </div>
                        <div class="form-check form-check-inline form-check-reverse">
                            <input class="form-check-input" type="radio" name="have_granted_brand"
                                   id="relocateInlineRadio2" value="0">
                            <label class="form-check-label pe-2 ps-5"
                                   for="relocateInlineRadio2">لا</label>
                        </div>
                    </div>
                </div>
                <div class="mb-4 d-flex flex-column">
                    <p>إذا كان كذلك، فما هى؟</p>
                    <textarea name="granted_brands" class="form-control" rows="3"
                              id="textareaQuestion">{{old('granted_brands')}} </textarea>
                </div>
                <div class="mb-4">
                    <label for="how_know" class="form-label">ما مدى علمك بتمور المعلم؟</label>
                    <input type="text" required name="how_know" class="form-control" id="how_know"
                           value="{{old('how_know')}}">
                </div>
                <div class="mb-4">
                    <label for="how_satisfied" class="form-label">ما مدى رضاك على علامة تمور
                        المعلم؟ </label>
                    <input type="text" required name="how_satisfied" class="form-control"
                           value="{{old('how_satisfied')}}"
                           id="how_satisfied">
                </div>
                <div class="mb-4">
                    <label class="form-label"> هل ترغب بالحصول على حقوق الامتياز لتمور المعلم ؟ </label>
                    <div class="question ">
                        <div class="form-check form-check-inline form-check-reverse">
                            <input class="form-check-input" type="radio" name="is_rights"
                                   id="rightsInlineRadio1" value="1" required>
                            <label class="form-check-label pe-2 ps-5"
                                   for="rightsInlineRadio1">نعم</label>
                        </div>
                        <div class="form-check form-check-inline form-check-reverse">
                            <input class="form-check-input" type="radio" name="is_rights"
                                   id="rightsInlineRadio2" value="0">
                            <label class="form-check-label pe-2 ps-5" for="rightsInlineRadio2">
                                لا</label>
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="cities" class="form-label">يرجى تحديد المدن المقترحة للحصول على
                        حقوق الامتياز بها؟
                    </label>
                    <textarea required name="cities" class="form-control"
                              aria-describedby="addon-currency" id="income_source">{{old('cities')}}</textarea>
                </div>
                <div class="mb-4">
                    <label class="form-label">هل انت على استعداد تام على متابعة وتشغيل المشروع في حالة اعتماد
                        طلبك؟ </label>
                    <div class="question ">
                        <div class="form-check form-check-inline form-check-reverse">
                            <input class="form-check-input" type="radio" name="is_follow"
                                   id="readyInlineRadio1" value="1" required>
                            <label class="form-check-label pe-2 ps-5"
                                   for="readyInlineRadio1">نعم</label>
                        </div>
                        <div class="form-check form-check-inline form-check-reverse">
                            <input class="form-check-input" type="radio" name="is_follow"
                                   id="readyInlineRadio2" value="0">
                            <label class="form-check-label pe-2 ps-5" for="readyInlineRadio2">
                                لا</label>
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <label class="form-label"> هل لديك القدرة المالية والادارية للادارة؟ </label>
                    <div class="question ">
                        <div class="form-check form-check-inline form-check-reverse">
                            <input class="form-check-input" type="radio" name="is_financial"
                                   id="abilityInlineRadio1" value="1" required>
                            <label class="form-check-label pe-2 ps-5"
                                   for="abilityInlineRadio1">نعم</label>
                        </div>
                        <div class="form-check form-check-inline form-check-reverse">
                            <input class="form-check-input" type="radio" name="is_financial"
                                   id="abilityInlineRadio2" value="0">
                            <label class="form-check-label pe-2 ps-5" for="abilityInlineRadio2">
                                لا</label>
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="form-check form-check-reverse">
                        <input class="form-check-input" type="checkbox" required name="approved"
                               value="1" id="delegateCheck">
                        <label class="form-label" for="delegateCheck">
                            اقر علي صحة البيانات
                        </label>
                    </div>
                </div>
                <div class="mb-4">
                            <span class="text-danger"
                                  style="display: contents;">تطبق الشروط و الاحكام</span>
                </div>
                <div class="mb-4">
                    <div class="row d-flex justify-content-between align-items-center">
                        <button class="btn send-btn me-3" type="submit">إرسال</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
@push('scripts')


@endpush
