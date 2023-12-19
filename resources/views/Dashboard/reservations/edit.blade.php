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
                                <input type="text" readonly value="{{$data->full_name}}" required name="full_name" class="form-control" id="full_name"
                                       placeholder="ادخل الاسم رباعي">
                            </div>
                            <div class="mb-4">
                                <label for="id_number" class="form-label">رقم الهوية</label>
                                <input type="text" readonly value="{{$data->id_number}}" required name="id_number" class="form-control" id="id_number"
                                       placeholder="ادخل رقم الهوية ">
                            </div>
                            <div class="mb-4">
                                <label for="phone" class="form-label">رقم الجوال</label>
                                <input type="text" readonly value="{{$data->phone}}" required name="phone" class="form-control" id="phone"
                                       placeholder="ادخل رقم الجوال ">
                            </div>
                            <div class="mb-4">
                                <label for="email" class="form-label">البريد الإلكتروني</label>
                                <input type="text" readonly value="{{$data->email}}"  name="email" required class="form-control" id="email"
                                       placeholder="ادخل البريد الإلكتروني ">
                            </div>
                            <div class="mb-4">
                                <label for="c_r_num" class="form-label">رقم السجل التجارى</label>
                                <input type="text" readonly value="{{$data->c_r_num}}" required name="c_r_num" class="form-control" id="c_r_num"
                                       placeholder="ادخل رقم السجل التجارى ">
                            </div>
                            <div class="mb-4">
                                <label for="address" class="form-label">العنوان</label>
                                <input type="text" required name="address" class="form-control" id="address"
                                       placeholder="ادخل العنوان">
                            </div>

                            <div class="mb-4">
                                <label for="city" class="form-label">المدينة</label>
                                <input type="text" readonly value="{{$data->city}}" required name="city" class="form-control" id="city"
                                       placeholder="ادخل المدينة">
                            </div>
                            <div class="mb-4">
                                <label for="government" class="form-label">المحافظة</label>
                                <input type="text" readonly value="{{$data->government}}" required name="government" class="form-control"
                                       id="government"
                                       placeholder="ادخل المحافظة">
                            </div>
                            <div class="mb-4">
                                <p>هل لديك دعوى قضائية مازالت تحت النظر؟</p>
                                <div class="question ">
                                    <div class="form-check form-check-inline form-check-reverse">
                                        <input @if($data->is_lawsuit == 1) checked @endif class="form-check-input" type="radio" name="is_lawsuit"
                                               id="stillLawsuitInlineRadio1" value="1" >
                                        <label class="form-check-label pe-2 ps-5"
                                               for="stillLawsuitInlineRadio1">نعم</label>
                                    </div>
                                    <div class="form-check form-check-inline form-check-reverse">
                                        <input @if($data->is_lawsuit == 0) checked @endif class="form-check-input" type="radio" name="is_lawsuit"
                                               id="stillLawsuitInlineRadio2" value="0">
                                        <label class="form-check-label pe-2 ps-5"
                                               for="stillLawsuitInlineRadio2">لا</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <p>هل انت موظف ؟ </p>
                                <div class="question ">
                                    <div class="form-check form-check-inline form-check-reverse">
                                        <input @if($data->is_employee == 1) checked @endif  class="form-check-input" type="radio" name="is_employee"
                                               id="workTypeInlineRadio1" value="1" >
                                        <label class="form-check-label pe-2 ps-5" for="workTypeInlineRadio1">قطاع
                                            خاص</label>
                                    </div>
                                    <div class="form-check form-check-inline form-check-reverse">
                                        <input @if($data->is_employee == 0) checked @endif  class="form-check-input" type="radio" name="is_employee"
                                               id="workTypeInlineRadio2" value="0">
                                        <label class="form-check-label pe-2 ps-5" for="workTypeInlineRadio2">
                                            قطاع حكومى</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="company_name" class="form-label">اسم الجهة او الشركة</label>
                                <input readonly value="{{$data->company_name}}" type="text" name="company_name" class="form-control" id="company_name"
                                       placeholder="">
                            </div>
                            <div class="mb-4">
                                <div class="title">
                                    <h4>مصادر الدخل ؟</h4>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="salary" class="form-label">الدخل الشهري ؟ </label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-currency">SAR</span>
                                    <input type="text" readonly value="{{$data->salary}}" required name="salary" class="form-control"
                                           placeholder="الدخل الشهري" aria-label="currency"
                                           aria-describedby="addon-currency" id="salary">
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="rewards" class="form-label">المكافأت ، العمولات</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-rewards">SAR</span>
                                    <input type="text" readonly value="{{$data->rewards}}" required name="rewards" class="form-control"
                                           placeholder="ادخل المكافأة , العمولة "
                                           aria-label="rewards" aria-describedby="addon-rewards" id="rewards">
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="earnings" class="form-label">أرباح الأسهم ، الفوائد</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-earnings">SAR</span>
                                    <input  type="text" readonly value="{{$data->dividends_interest}}" required name="dividends_interest" class="form-control"
                                           placeholder="ادخل الإرباح و الفوائد "
                                           aria-label="earnings" aria-describedby="addon-earnings"
                                           id="earnings">
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="income" class="form-label">الدخل العقاري</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-income">SAR</span>
                                    <input type="text" readonly value="{{$data->real_estate_income}}" required name="real_estate_income" class="form-control"
                                           placeholder="ادخل الدخل العقاري " aria-label="income"
                                           aria-describedby="addon-income" id="income">
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="work-earnings" class="form-label">الأرباح</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-earnings">SAR</span>
                                    <input type="text" readonly value="{{$data->profits}}" required name="profits" class="form-control"
                                           placeholder="ادخل ارباح العمل " aria-label="work-earnings"
                                           aria-describedby="addon-earnings" id="work-earnings">
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="income-resources" class="form-label">مصادر دخل أخرى (حدد المصدر ،
                                    مثل:
                                    الثقة ، الزوج ،
                                    إلخ)</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-income-resources">SAR</span>
                                    <input type="text" readonly value="{{$data->other_income}}" required name="other_income" class="form-control"
                                           placeholder="ادخل مصادر الدخل الأخرى "
                                           aria-label="Username" aria-describedby="addon-income-resources"
                                           id="income-resources">
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="total" class="form-label">المجموع</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-total">SAR</span>
                                    <input type="text" readonly value="{{$data->total}}" required name="total" class="form-control"
                                           placeholder="ادخل الإجمالي " aria-label="Username"
                                           aria-describedby="addon-total" id="total">
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="title">
                                    <h4>الالتزامات المالية؟</h4>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="loansPayable" class="form-label">ملاحظات / قروض مستحقة الدفع
                                    للأصدقاء
                                    والأقارب</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-loansPayable">SAR</span>
                                    <input type="text" readonly value="{{$data->notes_loans}}" required name="notes_loans" class="form-control"
                                           placeholder="ادخل القروض المستحقة للدفع "
                                           aria-label="loansPayable" aria-describedby="addon-loansPayable"
                                           id="loansPayable">
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="billsPayable" class="form-label">حسابات وفواتير مستحقة الدفع</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-billsPayable">SAR</span>
                                    <input type="text" readonly value="{{$data->accounts_bills_payable}}" required name="accounts_bills_payable"
                                           class="form-control"
                                           placeholder="ادخل حساب المطالبات  والفواتير واجبة السداد "
                                           aria-label="billsPayable" aria-describedby="addon-billsPayable"
                                           id="billsPayable">
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="Mortgages" class="form-label">الرهون العقارية</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-Mortgages">SAR</span>
                                    <input type="text" readonly value="{{$data->mortgages}}" required name="mortgages" class="form-control"
                                           placeholder="فضلا ادخل الرهون العقارية "
                                           aria-label="Mortgages" aria-describedby="addon-Mortgages"
                                           id="Mortgages">
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="otherObligations" class="form-label">ديون أو التزامات أخرى</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-otherObligations">SAR</span>
                                    <input type="text" readonly value="{{$data->debt}}"  required name="debt" class="form-control"
                                           placeholder="ادخل مستحقات الدفع الأخرى "
                                           aria-label="otherObligations"
                                           aria-describedby="addon-otherObligations"
                                           id="otherObligations">
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="totalLiabilities" class="form-label">إجمالي الإلتزامات</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-totalLiabilities">SAR</span>
                                    <input type="text" readonly value="{{$data->total_liabilities}}"  required name="total_liabilities" class="form-control"
                                           placeholder="ادخل اجمالي المطالبات "
                                           aria-label="totalLiabilities"
                                           aria-describedby="addon-totalLiabilities"
                                           id="totalLiabilities">
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="netClaims" class="form-label">القيمة الصافية (أصول مخصومة
                                    الإلتزامات)</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-netClaims">SAR</span>
                                    <input type="text" readonly value="{{$data->net_worth}}" required name="net_worth" class="form-control"
                                           placeholder="ادخل صافي قيمة المطالبات "
                                           aria-label="netClaims" aria-describedby="addon-netClaims"
                                           id="netClaims">
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="title">
                                    <h4>المشاريع المملوكة والقائمة ؟</h4>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="handCach" class="form-label">النقد في الصندوق وفي البنك</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-handCach">SAR</span>
                                    <input type="text" readonly value="{{$data->cash_in_bank}}" required name="cash_in_bank" class="form-control"
                                           placeholder="ادخل الأصول النقدية في البنك "
                                           aria-label="handCach" aria-describedby="addon-handCach"
                                           id="handCach">
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="sharedEarnings" class="form-label">الأرباح المشاركة</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-sharedEarnings">SAR</span>
                                    <input type="text" readonly value="{{$data->profits_sharing}}" required name="profits_sharing" class="form-control"
                                           placeholder="ادخل تقسيم ارباح الأصول "
                                           aria-label="sharedEarnings" aria-describedby="addon-sharedEarnings"
                                           id="sharedEarnings">
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="Guarantees" class="form-label">ضمانات</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-Guarantees">SAR</span>
                                    <input type="text" readonly value="{{$data->guarantees}}"  required name="guarantees" class="form-control"
                                           placeholder="ادخل الأوراق المالية للأصول "
                                           aria-label="Guarantees" aria-describedby="addon-Guarantees"
                                           id="Guarantees">
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="moneyBills" class="form-label">السندات / الأوراق المالية</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-moneyBills">SAR</span>
                                    <input type="text" readonly value="{{$data->money_papers}}" required name="money_papers" class="form-control"
                                           placeholder="ادخل سندات الأصول " aria-label="moneyBills"
                                           aria-describedby="addon-moneyBills" id="moneyBills">
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="realEstate" class="form-label">العقارات - القيمة السوقية
                                    الحالية</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-realEstate">SAR</span>
                                    <input type="text" readonly value="{{$data->real_estate_value}}" required name="real_estate_value" class="form-control"
                                           placeholder="ادخل القيمة السوقية الحالية للعقار "
                                           aria-label="realEstate" aria-describedby="addon-realEstate"
                                           id="realEstate">
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="personalProperty" class="form-label">أخرى: السيارات والممتلكات
                                    الشخصية</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-personalProperty">SAR</span>
                                    <input type="text" readonly value="{{$data->other_properties}}" required name="other_properties" class="form-control"
                                           placeholder="ادخل غير ذلك  " aria-label="personalProperty"
                                           aria-describedby="addon-personalProperty" id="personalProperty">
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="totalAssets" class="form-label">إجمالي الأصول</label>
                                <div class="input-group flex-nowrap">
                                    <span class="input-group-text" id="addon-totalAssets">SAR</span>
                                    <input type="text" readonly value="{{$data->total_assets}}" required name="total_assets" class="form-control"
                                           placeholder="ادخل إجمالي الإصول " aria-label="totalAssets"
                                           aria-describedby="addon-totalAssets" id="totalAssets">
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="title">
                                    <h4>هل تم منحك حقوق الامتياز لاي علامة تجارية؟</h4>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="question ">
                                    <div class="form-check form-check-inline form-check-reverse">
                                        <input @if($data->have_granted_brand == 1) checked @endif class="form-check-input" type="radio" name="have_granted_brand"
                                               id="relocateInlineRadio1" value="1" >
                                        <label class="form-check-label pe-2 ps-5"
                                               for="relocateInlineRadio1">نعم</label>
                                    </div>
                                    <div class="form-check form-check-inline form-check-reverse">
                                        <input @if($data->have_granted_brand == 0) checked @endif class="form-check-input" type="radio" name="have_granted_brand"
                                               id="relocateInlineRadio2" value="0">
                                        <label class="form-check-label pe-2 ps-5"
                                               for="relocateInlineRadio2">لا</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4 d-flex flex-column">
                                <label for="textareaQuestion" class="form-label">إذا كان كذلك، فما هى؟</label>
                                <textarea name="granted_brands" class="form-control" rows="3"
                                         readonly id="textareaQuestion">{!! $data->granted_brands !!}</textarea>
                            </div>
                            <div class="mb-4">
                                <label for="how_know" class="form-label">ما مدى علمك بتمور المعلم؟</label>
                                <input type="text" readonly value="{{$data->how_know}}" required name="how_know" class="form-control" id="how_know">
                            </div>
                            <div class="mb-4">
                                <label for="how_satisfied" class="form-label">ما مدى رضاك على علامة تمور
                                    المعلم؟ </label>
                                <input type="text" readonly value="{{$data->how_satisfied}}" required name="how_satisfied" class="form-control"
                                       id="how_satisfied">
                            </div>
                            <div class="mb-4">
                                <p> هل ترغب بالحصول على حقوق الامتياز لتمور المعلم ؟ </p>
                                <div class="question ">
                                    <div class="form-check form-check-inline form-check-reverse">
                                        <input @if($data->is_rights == 1) checked @endif class="form-check-input" type="radio" name="is_rights"
                                               id="rightsInlineRadio1" value="1" >
                                        <label class="form-check-label pe-2 ps-5"
                                               for="rightsInlineRadio1">نعم</label>
                                    </div>
                                    <div class="form-check form-check-inline form-check-reverse">
                                        <input @if($data->is_rights == 0) checked @endif class="form-check-input" type="radio" name="is_rights"
                                               id="rightsInlineRadio2" value="0">
                                        <label class="form-check-label pe-2 ps-5" for="rightsInlineRadio2">
                                            لا</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <label for="country-name" class="form-label">يرجى تحديد المدن المقترحة للحصول
                                    على
                                    حقوق الامتياز بها؟
                                </label>
                                <input type="text" readonly value="{{$data->city_relation->name}}" required name="how_satisfied" class="form-control"
                                       id="how_satisfied" >
                            </div>
                            <div class="mb-4">
                                <p>هل انت على استعداد تام على متابعة وتشغيل المشروع في حالة اعتماد طلبك؟ </p>
                                <div class="question ">
                                    <div class="form-check form-check-inline form-check-reverse">
                                        <input @if($data->is_follow == 1) checked @endif class="form-check-input" type="radio" name="is_follow"
                                               id="readyInlineRadio1" value="1" >
                                        <label class="form-check-label pe-2 ps-5"
                                               for="readyInlineRadio1">نعم</label>
                                    </div>
                                    <div class="form-check form-check-inline form-check-reverse">
                                        <input @if($data->is_follow == 0) checked @endif class="form-check-input" type="radio" name="is_follow"
                                               id="readyInlineRadio2" value="0">
                                        <label class="form-check-label pe-2 ps-5" for="readyInlineRadio2">
                                            لا</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <p> هل لديك القدرة المالية والادارية للادارة؟ </p>
                                <div class="question ">
                                    <div class="form-check form-check-inline form-check-reverse">
                                        <input @if($data->is_financial == 1) checked @endif  class="form-check-input" type="radio" name="is_financial"
                                               id="abilityInlineRadio1" value="1" >
                                        <label class="form-check-label pe-2 ps-5"
                                               for="abilityInlineRadio1">نعم</label>
                                    </div>
                                    <div class="form-check form-check-inline form-check-reverse">
                                        <input @if($data->is_financial == 0) checked @endif  class="form-check-input" type="radio" name="is_financial"
                                               id="abilityInlineRadio2" value="0">
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
                                                    @endif value="pending">{{trans('lang.pending')}}</option>
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


