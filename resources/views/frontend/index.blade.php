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
                           placeholder="ادخل الاسم رباعي">
                </div>
                <div class="mb-4">
                    <label for="id_number" class="form-label">رقم الهوية</label>
                    <input type="text" required name="id_number" class="form-control" id="id_number"
                           placeholder="ادخل رقم الهوية ">
                </div>
                <div class="mb-4">
                    <label for="phone" class="form-label">رقم الجوال</label>
                    {{--                    <input type="num" required name="phone" class="form-control" id="phone"--}}
                    {{--                           placeholder="ادخل رقم الجوال ">--}}
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1" style="height: 40px">
                                <img src="{{url('assets/media/svg/flags/008-saudi-arabia.svg')}}" alt="KSA Flag" width="20"
                                     height="auto">
                            </span>
                        </div>
                        <input type="num" required name="phone" class="form-control" id="phone"
                               placeholder="ادخل رقم الجوال">
                    </div>
                </div>
                <div class="mb-4">
                    <label for="email" class="form-label">البريد الإلكتروني</label>
                    <input type="email" name="email" required class="form-control" id="email"
                           placeholder="ادخل البريد الإلكتروني ">
                </div>
                <div class="mb-4">
                    <label for="c_r_num" class="form-label">رقم السجل التجارى</label>
                    <input type="number" required name="c_r_num" class="form-control" id="c_r_num"
                           placeholder="ادخل رقم السجل التجارى ">
                </div>
                <div class="mb-4">
                    <label for="address" class="form-label">العنوان</label>
                    <input type="text" required name="address" class="form-control" id="address"
                           placeholder="ادخل العنوان">
                </div>

                <div class="mb-4">
                    <label for="city" class="form-label">المدينة</label>
                    <select name="city" required class="form-select"
                            aria-label="Small select example"
                            id="city">
                        <option selected disabled>-- فضلا اختر المدينة --</option>
                        @foreach(\App\Models\City::orderBy('id','desc')->get() as $row)
                            <option value="{{$row->name}}">{{$row->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <label for="government" class="form-label">المحافظة</label>
                    <input type="text" required name="government" class="form-control" id="government"
                           placeholder="ادخل المحافظة">
                </div>
                <div class="mb-4">
                    <p>هل لديك دعوى قضائية مازالت تحت النظر؟</p>
                    <div class="question ">
                        <div class="form-check form-check-inline form-check-reverse">
                            <input class="form-check-input" type="radio" name="is_lawsuit"
                                   id="stillLawsuitInlineRadio1" value="1" checked>
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
                    <p>هل انت موظف ؟ </p>
                    <div class="question ">
                        <div class="form-check form-check-inline form-check-reverse">
                            <input class="form-check-input" type="radio" name="is_employee"
                                   id="workTypeInlineRadio1" value="1" checked>
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
                           placeholder="">
                </div>
                <div class="mb-4">
                    <div class="title">
                        <h4>مصادر الدخل ؟</h4>
                    </div>
                </div>
                <div class="mb-4">
                    <label for="salary" class="form-label">الدخل الشهري </label>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-currency">ر.س</span>
                        <input type="number" required name="salary" class="form-control"
                               placeholder="الدخل الشهري" aria-label="currency"
                               aria-describedby="addon-currency" id="salary">
                    </div>
                </div>
                <div class="mb-4">
                    <label for="rewards" class="form-label">المكافأت ، العمولات</label>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-rewards">ر.س</span>
                        <input type="number" required name="rewards" class="form-control"
                               placeholder="ادخل المكافأة , العمولة "
                               aria-label="rewards" aria-describedby="addon-rewards" id="rewards">
                    </div>
                </div>
                <div class="mb-4">
                    <label for="earnings" class="form-label">أرباح الأسهم ، الفوائد</label>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-earnings">ر.س</span>
                        <input type="number" required name="dividends_interest" class="form-control"
                               placeholder="ادخل الإرباح و الفوائد "
                               aria-label="earnings" aria-describedby="addon-earnings" id="earnings">
                    </div>
                </div>
                <div class="mb-4">
                    <label for="income" class="form-label">الدخل العقاري</label>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-income">ر.س</span>
                        <input type="number" required name="real_estate_income" class="form-control"
                               placeholder="ادخل الدخل العقاري " aria-label="income"
                               aria-describedby="addon-income" id="income">
                    </div>
                </div>
                <div class="mb-4">
                    <label for="work-earnings" class="form-label">الأرباح</label>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-earnings">ر.س</span>
                        <input type="number" required name="profits" class="form-control"
                               placeholder="ادخل ارباح العمل " aria-label="work-earnings"
                               aria-describedby="addon-earnings" id="work-earnings">
                    </div>
                </div>
                <div class="mb-4">
                    <label for="income-resources" class="form-label">مصادر دخل أخرى (حدد المصدر ، مثل:
                        الثقة ، الزوج ،
                        إلخ)</label>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-income-resources">ر.س</span>
                        <input type="number" required name="other_income" class="form-control"
                               placeholder="ادخل مصادر الدخل الأخرى "
                               aria-label="Username" aria-describedby="addon-income-resources"
                               id="income-resources">
                    </div>
                </div>
                <div class="mb-4">
                    <label for="total" class="form-label">المجموع</label>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-total">ر.س</span>
                        <input type="number" required name="total" class="form-control"
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
                    <label for="loansPayable" class="form-label">ملاحظات / قروض مستحقة الدفع للأصدقاء
                        والأقارب</label>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-loansPayable">ر.س</span>
                        <input type="number" required name="notes_loans" class="form-control"
                               placeholder="ادخل القروض المستحقة للدفع "
                               aria-label="loansPayable" aria-describedby="addon-loansPayable"
                               id="loansPayable">
                    </div>
                </div>
                <div class="mb-4">
                    <label for="billsPayable" class="form-label">حسابات وفواتير مستحقة الدفع</label>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-billsPayable">ر.س</span>
                        <input type="number" required name="accounts_bills_payable" class="form-control"
                               placeholder="ادخل حساب المطالبات  والفواتير واجبة السداد "
                               aria-label="billsPayable" aria-describedby="addon-billsPayable"
                               id="billsPayable">
                    </div>
                </div>
                <div class="mb-4">
                    <label for="Mortgages" class="form-label">الرهون العقارية</label>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-Mortgages">ر.س</span>
                        <input type="number" required name="mortgages" class="form-control"
                               placeholder="فضلا ادخل الرهون العقارية "
                               aria-label="Mortgages" aria-describedby="addon-Mortgages" id="Mortgages">
                    </div>
                </div>
                <div class="mb-4">
                    <label for="otherObligations" class="form-label">ديون أو التزامات أخرى</label>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-otherObligations">ر.س</span>
                        <input type="number" required name="debt" class="form-control"
                               placeholder="ادخل مستحقات الدفع الأخرى "
                               aria-label="otherObligations" aria-describedby="addon-otherObligations"
                               id="otherObligations">
                    </div>
                </div>
                <div class="mb-4">
                    <label for="totalLiabilities" class="form-label">إجمالي الإلتزامات</label>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-totalLiabilities">ر.س</span>
                        <input type="number" required name="total_liabilities" class="form-control"
                               placeholder="ادخل اجمالي المطالبات "
                               aria-label="totalLiabilities" aria-describedby="addon-totalLiabilities"
                               id="totalLiabilities">
                    </div>
                </div>
                <div class="mb-4">
                    <label for="netClaims" class="form-label">القيمة الصافية (أصول مخصومة
                        الإلتزامات)</label>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-netClaims">ر.س</span>
                        <input type="number" required name="net_worth" class="form-control"
                               placeholder="ادخل صافي قيمة المطالبات "
                               aria-label="netClaims" aria-describedby="addon-netClaims" id="netClaims">
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
                        <span class="input-group-text" id="addon-handCach">ر.س</span>
                        <input type="number" required name="cash_in_bank" class="form-control"
                               placeholder="ادخل الأصول النقدية في البنك "
                               aria-label="handCach" aria-describedby="addon-handCach" id="handCach">
                    </div>
                </div>
                <div class="mb-4">
                    <label for="sharedEarnings" class="form-label">الأرباح المشاركة</label>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-sharedEarnings">ر.س</span>
                        <input type="number" required name="profits_sharing" class="form-control"
                               placeholder="ادخل تقسيم ارباح الأصول "
                               aria-label="sharedEarnings" aria-describedby="addon-sharedEarnings"
                               id="sharedEarnings">
                    </div>
                </div>
                <div class="mb-4">
                    <label for="Guarantees" class="form-label">ضمانات</label>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-Guarantees">ر.س</span>
                        <input type="number" required name="guarantees" class="form-control"
                               placeholder="ادخل الأوراق المالية للأصول "
                               aria-label="Guarantees" aria-describedby="addon-Guarantees"
                               id="Guarantees">
                    </div>
                </div>
                <div class="mb-4">
                    <label for="moneyBills" class="form-label">السندات / الأوراق المالية</label>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-moneyBills">ر.س</span>
                        <input type="number" required name="money_papers" class="form-control"
                               placeholder="ادخل سندات الأصول " aria-label="moneyBills"
                               aria-describedby="addon-moneyBills" id="moneyBills">
                    </div>
                </div>
                <div class="mb-4">
                    <label for="realEstate" class="form-label">العقارات - القيمة السوقية الحالية</label>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-realEstate">ر.س</span>
                        <input type="number" required name="real_estate_value" class="form-control"
                               placeholder="ادخل القيمة السوقية الحالية للعقار "
                               aria-label="realEstate" aria-describedby="addon-realEstate"
                               id="realEstate">
                    </div>
                </div>
                <div class="mb-4">
                    <label for="personalProperty" class="form-label">أخرى: السيارات والممتلكات
                        الشخصية</label>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-personalProperty">ر.س</span>
                        <input type="number" required name="other_properties" class="form-control"
                               placeholder="ادخل غير ذلك  " aria-label="personalProperty"
                               aria-describedby="addon-personalProperty" id="personalProperty">
                    </div>
                </div>
                <div class="mb-4">
                    <label for="totalAssets" class="form-label">إجمالي الأصول</label>
                    <div class="input-group flex-nowrap">
                        <span class="input-group-text" id="addon-totalAssets">ر.س</span>
                        <input type="number" required name="total_assets" class="form-control"
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
                            <input class="form-check-input" type="radio" name="have_granted_brand"
                                   id="relocateInlineRadio1" value="1" checked>
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
                    <label for="textareaQuestion" class="form-label">إذا كان كذلك، فما هى؟</label>
                    <textarea name="granted_brands" class="form-control" rows="3"
                              id="textareaQuestion"></textarea>
                </div>
                <div class="mb-4">
                    <label for="how_know" class="form-label">ما مدى علمك بتمور المعلم؟</label>
                    <input type="text" required name="how_know" class="form-control" id="how_know">
                </div>
                <div class="mb-4">
                    <label for="how_satisfied" class="form-label">ما مدى رضاك على علامة تمور
                        المعلم؟ </label>
                    <input type="text" required name="how_satisfied" class="form-control"
                           id="how_satisfied">
                </div>
                <div class="mb-4">
                    <p> هل ترغب بالحصول على حقوق الامتياز لتمور المعلم ؟ </p>
                    <div class="question ">
                        <div class="form-check form-check-inline form-check-reverse">
                            <input class="form-check-input" type="radio" name="is_rights"
                                   id="rightsInlineRadio1" value="1" checked>
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
                    <label for="country-name" class="form-label">يرجى تحديد المدن المقترحة للحصول على
                        حقوق الامتياز بها؟
                    </label>
                    <select name="city_id" required class="form-select"
                            aria-label="Small select example"
                            id="city_id">
                        <option selected disabled>-- فضلا اختر المدينة --</option>
                        @foreach(\App\Models\City::orderBy('id','desc')->get() as $row)
                            <option value="{{$row->id}}">{{$row->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-4">
                    <p>هل انت على استعداد تام على متابعة وتشغيل المشروع في حالة اعتماد طلبك؟ </p>
                    <div class="question ">
                        <div class="form-check form-check-inline form-check-reverse">
                            <input class="form-check-input" type="radio" name="is_follow"
                                   id="readyInlineRadio1" value="1" checked>
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
                    <p> هل لديك القدرة المالية والادارية للادارة؟ </p>
                    <div class="question ">
                        <div class="form-check form-check-inline form-check-reverse">
                            <input class="form-check-input" type="radio" name="is_financial"
                                   id="abilityInlineRadio1" value="1" checked>
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
                        <label class="form-check-label" for="delegateCheck">
                            اقدم المعلومات السابقة باعتبارها تصريح أو إفادة بوضعي الشخصي و المالي الكامل
                            و الصحيح , اعتبارا
                            من التاريخ الموضح أدناه . لقد فوضت صراحة أي صاحب عمل سابق أو حالي , أو أي
                            وكالة لإنفاذ القانون ,
                            أو ولاية أو محلية أو حكومة أو أي شخص لديه معرفة شخصية بشخصيتي أو خبرتي في
                            العمل أو سجلي الإجرامي
                            لإصدار هذه المعلومات لـ تمور المعلم بنائاً على طلب تمور المعلم , فأنا أوافق على تقديم
                            بيان من مستشاري المهني
                            (أي مصرفي أو سمسار أو محاسب أو محامي ) يتحقق من الأصول المذكورة أعلاه , و
                            أوافق أيضا على تقديم
                            نسخ من أي اقرارات ضريبية أو زكاة للدولة كما تم تقديمها خلال آخر خمس سنوات
                            (05) . أوقن بأن تمور المعلم
                            له حق التصرف بجميع المعلومات المذكورة أعلاه كعامل مادي في اعتبار طلبي لأصبح
                            حائزا على امتياز د.
                            كيف , و بالتالي أوافق على إخطار د. كيف على الفور بأي مادة في أي من المعلومات
                            المذكورة أعلاه أو
                            أي معلومات لاحقة مقدمة إلى تمور المعلم . إضافة إلى ذلك , أعفي أي شخص من مسؤولية
                            دقة و صحة المعلومات
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
