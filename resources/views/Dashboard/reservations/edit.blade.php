@php($title=trans('lang.reservations-details'))
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
                <a href="{{route('reservations')}}"
                   class="text-muted">{{trans('lang.reservations')}}</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{route('admin')}}"
                   class="text-muted">{{trans('lang.dashboard')}}</a>
            </li>

        </ul>
        <!--end::Breadcrumb-->
    </div>
@endsection
@section('content')

    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class="container">

            <!--begin::Card-->
            <div class="card card-custom gutter-b">
                <!--Begin::Header-->
                <div class="card-header card-header-tabs-line">
                    <div class="card-toolbar">
                        <ul class="nav nav-tabs nav-tabs-space-lg nav-tabs-line nav-tabs-bold nav-tabs-line-3x"
                            role="tablist">
                            <li class="nav-item mr-3">
                                <a class="nav-link active" data-toggle="tab" href="#invoice_details_tab">
														<span class="nav-icon mr-2">
															<span class="svg-icon mr-3">
																<!--begin::Svg Icon | path:assets/media/svg/icons/Devices/Display1.svg-->
																<svg xmlns="http://www.w3.org/2000/svg"
                                                                     xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                     width="24px" height="24px" viewBox="0 0 24 24"
                                                                     version="1.1">
																	<g stroke="none" stroke-width="1" fill="none"
                                                                       fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24"/>
																		<path
                                                                            d="M11,20 L11,17 C11,16.4477153 11.4477153,16 12,16 C12.5522847,16 13,16.4477153 13,17 L13,20 L15.5,20 C15.7761424,20 16,20.2238576 16,20.5 C16,20.7761424 15.7761424,21 15.5,21 L8.5,21 C8.22385763,21 8,20.7761424 8,20.5 C8,20.2238576 8.22385763,20 8.5,20 L11,20 Z"
                                                                            fill="#000000" opacity="0.3"/>
																		<path
                                                                            d="M3,5 L21,5 C21.5522847,5 22,5.44771525 22,6 L22,16 C22,16.5522847 21.5522847,17 21,17 L3,17 C2.44771525,17 2,16.5522847 2,16 L2,6 C2,5.44771525 2.44771525,5 3,5 Z M4.5,8 C4.22385763,8 4,8.22385763 4,8.5 C4,8.77614237 4.22385763,9 4.5,9 L13.5,9 C13.7761424,9 14,8.77614237 14,8.5 C14,8.22385763 13.7761424,8 13.5,8 L4.5,8 Z M4.5,10 C4.22385763,10 4,10.2238576 4,10.5 C4,10.7761424 4.22385763,11 4.5,11 L7.5,11 C7.77614237,11 8,10.7761424 8,10.5 C8,10.2238576 7.77614237,10 7.5,10 L4.5,10 Z"
                                                                            fill="#000000"/>
																	</g>
																</svg>
                                                                <!--end::Svg Icon-->
															</span>
														</span>
                                    <span class="nav-text font-weight-bold">تفاصيل الطلب</span>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#law_tab">
														<span class="nav-icon mr-2">
															<span class="svg-icon mr-3">
																<!--begin::Svg Icon | path:assets/media/svg/icons/General/Notification2.svg-->
																<svg xmlns="http://www.w3.org/2000/svg"
                                                                     xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                     width="24px" height="24px" viewBox="0 0 24 24"
                                                                     version="1.1">
																	<g stroke="none" stroke-width="1" fill="none"
                                                                       fill-rule="evenodd">
																		<rect x="0" y="0" width="24" height="24"/>
																		<path
                                                                            d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z"
                                                                            fill="#000000"/>
																		<circle fill="#000000" opacity="0.3" cx="18.5"
                                                                                cy="5.5" r="2.5"/>
																	</g>
																</svg>
                                                                <!--end::Svg Icon-->
															</span>
														</span>
                                    <span class="nav-text font-weight-bold">قبول/رفض؟</span>
                                </a>
                            </li>


                        </ul>
                    </div>
                </div>
                <!--end::Header-->
                <!--Begin::Body-->
                <div class="card-body">
                    <div class="tab-content pt-5">
                        <!--begin::Tab Content-->
                        <!--end::Tab Content-->
                        <!--begin::Tab Content-->
                        <div class="tab-pane active" id="invoice_details_tab" role="tabpanel">
                            <div class="mb-4">
                                <label for="name" class="form-label">الاسم رباعي</label>
                                <input type="text" readonly value="{{$data->full_name}}" required name="full_name"
                                       class="form-control" id="full_name"
                                       placeholder="ادخل الاسم رباعي">
                            </div>
                            <div class="mb-4">
                                <label for="id_number" class="form-label">رقم الهوية</label>
                                <input type="text" readonly value="{{$data->id_number}}" required name="id_number"
                                       class="form-control" id="id_number"
                                       placeholder="ادخل رقم الهوية ">
                            </div>
                            <div class="mb-4">
                                <label for="phone" class="form-label">رقم الجوال</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1" style="height: 40px">
                                <img src="{{url('assets/media/svg/flags/008-saudi-arabia.svg')}}" alt="KSA Flag"
                                     width="20"
                                     height="auto">
                            </span>
                                    </div>
                                    <input type="text" readonly value="{{$data->phone}}" required name="phone"
                                           class="form-control" id="phone"
                                           placeholder="ادخل رقم الجوال">
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="email" class="form-label">البريد الإلكتروني</label>
                                <input type="text" readonly value="{{$data->email}}" name="email" required
                                       class="form-control" id="email"
                                       placeholder="ادخل البريد الإلكتروني ">
                            </div>
                            <div class="mb-4">
                                <label for="c_r_num" class="form-label">رقم السجل التجارى</label>

                                <input type="text" readonly value="{{$data->c_r_num}}" required name="c_r_num"
                                       class="form-control" id="c_r_num"
                                       placeholder="ادخل رقم السجل التجارى ">
                            </div>
                            <div class="mb-4">
                                <label for="address" class="form-label">العنوان</label>
                                <input type="text" readonly value="{{$data->address}}" required name="address"
                                       class="form-control" id="address"
                                       placeholder="ادخل العنوان">
                            </div>

                            <div class="mb-4">
                                <label class="form-label">هل لديك دعوى قضائية مازالت تحت النظر ؟</label>
                                <div class="question ">
                                    <div class="form-check form-check-inline form-check-reverse">
                                        <input class="form-check-input" type="radio" name="is_lawsuit"
                                               disabled @if($data->is_lawsuit == 1) checked
                                               @endif  id="stillLawsuitInlineRadio1" value="1">
                                        <label class="form-check-label pe-2 ps-5"
                                               for="stillLawsuitInlineRadio1">نعم</label>
                                    </div>
                                    <div class="form-check form-check-inline form-check-reverse">
                                        <input class="form-check-input" type="radio" name="is_lawsuit"
                                               disabled @if($data->is_lawsuit == 0) checked
                                               @endif   id="stillLawsuitInlineRadio2" value="0">
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
                                               disabled @if($data->is_employee == 1) checked
                                               @endif id="workTypeInlineRadio1" value="1">
                                        <label class="form-check-label pe-2 ps-5" for="workTypeInlineRadio1">نعم</label>
                                    </div>
                                    <div class="form-check form-check-inline form-check-reverse">
                                        <input class="form-check-input" type="radio" name="is_employee"
                                               disabled @if($data->is_employee == 0) checked
                                               @endif id="workTypeInlineRadio2" value="0">
                                        <label class="form-check-label pe-2 ps-5" for="workTypeInlineRadio2">لا</label>
                                    </div>
                                </div>
                            </div>
                            @if($data->is_employee == 1)
                                <div class="mb-4">
                                    <label for="company_name" class="form-label">اسم الجهة او الشركة</label>
                                    <input type="text" readonly value="{{$data->company_name}}" name="company_name"
                                           class="form-control" id="company_name"
                                           placeholder="">
                                </div>
                            @endif

                            <div class="mb-4">
                                <label for="salary" class="form-label">الدخل الشهري </label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-currency">ر.س</span>
                                    <input type="number" required name="salary" class="form-control"
                                           placeholder="الدخل الشهري" aria-label="currency"
                                           readonly value="{{$data->salary}}" aria-describedby="addon-currency"
                                           id="salary">
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="income_source" class="form-label">مصادر الدخل ؟ </label>
                                <div class="input-group flex-nowrap">
                            <textarea readonly required name="income_source" class="form-control"
                                      placeholder="برجاء تحديد مصادر الدخل الشهرية"
                                      aria-describedby="addon-currency"
                                      id="income_source">{{$data->income_source}}</textarea>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="financial" class="form-label">قيمة الالتزامات المالية ؟ </label>
                                <div class="input-group flex-nowrap">
                        <textarea type="number" required name="financial" class="form-control"
                                  placeholder="برجاء كتابة الالتزامات المالية "
                                  readonly aria-describedby="addon-currency"
                                  id="financial">{{$data->financial}}</textarea>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="financial" class="form-label">مصادر الالتزامات المالية ؟ </label>
                                <div class="input-group flex-nowrap">
                        <textarea type="number" readonly name="financial_source" class="form-control"
                                  placeholder="برجاء كتابة مصادر الالتزامات المالية "
                                  aria-describedby="addon-currency"
                                  id="financial_source">{{$data->financial_source}}</textarea>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label class="form-label">هل لديك اي مشاريع قائمه او مملوكه ؟ </label>
                                <div class="question ">
                                    <div class="form-check form-check-inline form-check-reverse">
                                        <input class="form-check-input" type="radio" name="is_employee"
                                               disabled @if($data->is_pro_owned == 1) checked
                                               @endif id="workTypeInlineRadio1" value="1">
                                        <label class="form-check-label pe-2 ps-5" for="workTypeInlineRadio1">نعم</label>
                                    </div>
                                    <div class="form-check form-check-inline form-check-reverse">
                                        <input class="form-check-input" type="radio" name="is_employee"
                                               disabled @if($data->is_pro_owned == 0) checked
                                               @endif id="workTypeInlineRadio2" value="0">
                                        <label class="form-check-label pe-2 ps-5" for="workTypeInlineRadio2">لا</label>
                                    </div>
                                </div>
                            </div>
                            @if($data->is_pro_owned == 1)
                                <div class="mb-4">
                                    <label for="projects_owned" class="form-label">المشاريع المملوكة و القائمة
                                        ؟ </label>
                                    <div class="input-group flex-nowrap">
                        <textarea type="number" required name="projects_owned" class="form-control"
                                  readonly placeholder="برجاء كتابة المشاريع المملوكة و القائمة "
                                  aria-describedby="addon-currency"
                                  id="projects_owned">{{$data->projects_owned}}</textarea>
                                    </div>
                                </div>
                            @endif

                            <div class="mb-4">
                                <label for="projects_owned" class="form-label">هل تم منحك حقوق الامتياز لاي علامة تجارية
                                    ؟ </label>

                                <div class="question ">
                                    <div class="form-check form-check-inline form-check-reverse">
                                        <input class="form-check-input" type="radio" name="have_granted_brand"
                                               disabled @if($data->have_granted_brand == 1) checked
                                               @endif  id="relocateInlineRadio1" value="1">
                                        <label class="form-check-label pe-2 ps-5"
                                               for="relocateInlineRadio1">نعم</label>
                                    </div>
                                    <div class="form-check form-check-inline form-check-reverse">
                                        <input class="form-check-input" type="radio" name="have_granted_brand"
                                               disabled @if($data->have_granted_brand == 0) checked
                                               @endif  id="relocateInlineRadio2" value="0">
                                        <label class="form-check-label pe-2 ps-5"
                                               for="relocateInlineRadio2">لا</label>
                                    </div>
                                </div>
                            </div>
                            @if($data->have_granted_brand == 1)
                                <div class="mb-4 d-flex flex-column">
                                    <p>إذا كان كذلك، فما هى؟</p>
                                    <textarea name="granted_brands" class="form-control" rows="3"
                                              readonly id="textareaQuestion">{{$data->granted_brands}}</textarea>
                                </div>
                            @endif
                            <div class="mb-4">
                                <label for="how_know" class="form-label">ما مدى علمك بتمور المعلم؟</label>
                                <input type="text" readonly value="{{$data->how_know}}" required name="how_know"
                                       class="form-control" id="how_know">
                            </div>
                            <div class="mb-4">
                                <label for="how_satisfied" class="form-label">ما مدى رضاك على علامة تمور
                                    المعلم؟ </label>
                                <input type="text" required name="how_satisfied" class="form-control"
                                       readonly value="{{$data->how_satisfied}}" id="how_satisfied">
                            </div>
                            <div class="mb-4">
                                <label class="form-label"> هل ترغب بالحصول على حقوق الامتياز لتمور المعلم ؟ </label>
                                <div class="question ">
                                    <div class="form-check form-check-inline form-check-reverse">
                                        <input class="form-check-input" type="radio" name="is_rights"
                                               disabled @if($data->is_rights == 1) checked @endif
                                               id="rightsInlineRadio1" value="1">
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
                            <h4> المدن المقترحة للحصول على
                                حقوق الامتياز بها؟
                            </h4>
                            <div class="mb-4">
                                <label for="cities" class="form-label">المدينة الاولى </label>
                                <input required name="cities1" class="form-control"
                                       aria-describedby="addon-currency" id="income_source" value="{{$data->cities1}}">
                            </div>
                            <div class="mb-4">
                                <label for="cities" class="form-label">المدينة الثانية </label>

                                <input name="cities2" class="form-control"
                                       aria-describedby="addon-currency" id="income_source" value="{{$data->cities2}}">
                            </div>
                            <div class="mb-4">
                                <label for="cities" class="form-label">المدينة الثالثه </label>

                                <input name="cities3" class="form-control"
                                       aria-describedby="addon-currency" id="income_source" value="{{$data->cities3}}">
                            </div>
                            <div class="mb-4">
                                <label class="form-label">هل انت على استعداد تام على متابعة وتشغيل المشروع في حالة
                                    اعتماد
                                    طلبك؟ </label>
                                <div class="question ">
                                    <div class="form-check form-check-inline form-check-reverse">
                                        <input class="form-check-input" type="radio" name="is_follow"
                                               disabled @if($data->is_follow == 1) checked
                                               @endif    id="readyInlineRadio1" value="1" required>
                                        <label class="form-check-label pe-2 ps-5"
                                               for="readyInlineRadio1">نعم</label>
                                    </div>
                                    <div class="form-check form-check-inline form-check-reverse">
                                        <input class="form-check-input" type="radio" name="is_follow"
                                               disabled @if($data->is_follow == 0) checked
                                               @endif   id="readyInlineRadio2" value="0">
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
                                               disabled @if($data->is_financial == 1) checked
                                               @endif   id="abilityInlineRadio1" value="1">
                                        <label class="form-check-label pe-2 ps-5"
                                               for="abilityInlineRadio1">نعم</label>
                                    </div>
                                    <div class="form-check form-check-inline form-check-reverse">
                                        <input class="form-check-input" type="radio" name="is_financial"
                                               disabled @if($data->is_financial == 0) checked
                                               @endif  id="abilityInlineRadio2" value="0">
                                        <label class="form-check-label pe-2 ps-5" for="abilityInlineRadio2">
                                            لا</label>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!--end::Tab Content-->

                        <div class="tab-pane" id="law_tab" role="tabpanel">
                            <form method="post" action="{{route('reservations.update',$data->id)}}"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="card-body row">
                                    <h4>تغيير حاله الطلب؟</h4>
                                    <div class="form-group  col-lg-12 col-sm-12 ">
                                        <label>{{trans('lang.status')}}</label>
                                        <select name="status"
                                                class="form-control select2 w-300px"
                                                id="status_select">
                                            <option selected disabled></option>
                                            <option @if($data->status == "pending") selected
                                                    disabled @endif value="pending">{{trans('lang.pending')}}</option>
                                            <option @if($data->status == "accepted") selected
                                                    @endif value="accepted">{{trans('lang.accepted')}}</option>
                                            <option @if($data->status == "rejected") selected
                                                    @endif value="rejected">{{trans('lang.rejected')}}</option>

                                        </select>
                                    </div>
                                    <div class="form-group  col-lg-12 col-sm-12 ">
                                        <label>الملاحظات</label>

                                        <textarea class="form-control" required name="reject_reasons"
                                                  cols="15" rows="5">{{$data->reject_reasons}}</textarea>
                                    </div>

                                </div>

                                <div class="card-footer text-right">
                                    <button type="Submit" id="submit"
                                            class="btn btn-primary btn-default ">{{trans('lang.save')}}</button>
                                    <a href="{{ URL::previous() }}"
                                       class="btn btn-secondary">{{trans('lang.cancel')}}</a>
                                </div>
                            </form>
                        </div>


                        <!--end::Tab Content-->
                    </div>
                </div>
                <!--end::Body-->

            </div>


            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>

@endsection
@push('scripts')

    <script>

        $('#status_select').select2({
            placeholder: `{{trans('lang.choose_the_status')}}`,
            search: false
        });

    </script>

@endpush


