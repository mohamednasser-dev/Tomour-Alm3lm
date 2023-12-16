<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="شركة تُمور المعلِّم® علامة تجارية مسجلة  ;أجود أنواع التمور الفاخرة تصلك الى منزلك">
    <base href="/">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="أجود,أنواع,التمور,الفاخرة,تصلك,إلى,منزلك">
    <meta name="author" content="TES">
    <meta name="theme-color" content="#e0b173">
    <link rel="icon" type="image/x-icon" href="{{url('/')}}/frontend/images/logo.webp">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Almarai&family=El+Messiri:wght@400;700&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="{{url('/')}}/frontend/css/all.min.css">
    <link rel="stylesheet" href="{{url('/')}}/frontend/css/main.css">
    <title>هدايا - شركة تمور المعلم</title>
</head>

<body>
<!-- start home -->
<section id="home">
    <div class="slider">
        <h3>الإمتياز التجاري</h3>
        <h1>استمارة التقديم</h1>
    </div>
    <div class="content">
        <div class="container">
            <form action="">
                <div class="form-header">
                    <h2>تقدم بطلب الإمتياز التجاري</h2>
                    <span></span>
                </div>
                <div class="form-body py-5">
                    <div class="row row-code">
                        <div>
                            <label for="code" class="form-label">رمز الرقم :</label>
                            <input type="text" class="form-control" id="code">
                        </div>
                    </div>
                    <div class="row">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <button class="nav-link active" id="personal-info-tab" type="button">المعلومات الشخصية</button>
                            </li>
                            <!-- <li class="nav-item">
                              <button class="nav-link" id="educational-background-tab"
                                type="button"
                                >الخلفية التعليمية</button>
                            </li> -->
                            <li class="nav-item" >
                                <button class="nav-link" id="works-tab"
                                        type="button" >الخبرة في الأعمال
                                    التجارية</button>
                            </li>
                            <li class="nav-item" >
                                <button class="nav-link" id="financial-tab" type="button">المعلومات المالية
                                    الشخصية</button>
                            </li>
                            <li class="nav-item" >
                                <button class="nav-link" id="delegation-tab"  type="button" >تفويض</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="personal-info-tab-pane" role="tabpanel"
                                 aria-labelledby="personal-info-tab" tabindex="0">
                                <div class="mb-4">
                                    <label for="name" class="form-label">الأسم بالكامل</label>
                                    <input type="text" class="form-control" id="name" placeholder="ادخل الإسم بالكامل">
                                </div>
                                <!-- <div class="mb-4">
                                  <label for="lastName" class="form-label">الأسم الأخير</label>
                                  <input type="text" class="form-control" id="lastName" placeholder="ادخل الإسم الأخير">
                                </div> -->
                                <!-- <div class="mb-4">
                                  <label for="neckName" class="form-label">اللقب\ الكنية</label>
                                  <input type="text" class="form-control" id="neckName" placeholder="اسم العائلة">
                                </div> -->
                                <!-- <div class="mb-4">
                                  <label for="nationality" class="form-label">الجنسية</label>
                                  <select class="form-select" aria-label="Small select example" id="nationality">
                                    <option selected value="0">-- فضلا اختر الجنسية --</option>
                                    <option value="1">سوري</option>
                                    <option value="2">سعودي</option>
                                    <option value="3">هندي</option>
                                    <option value="4">مصري</option>
                                    <option value="5">كويتي</option>
                                    <option value="6">قطرى</option>
                                  </select>
                                </div> -->
                                <!-- <div class="mb-4">
                                  <label for="birth-date" class="form-label">تاريخ الميلاد</label>
                                  <input type="date" class="form-control" id="birth-date">
                                </div> -->
                                <div class="mb-4">
                                    <label for="id-number" class="form-label">رقم الهوية</label>
                                    <input type="phone" class="form-control" id="id-number" placeholder="ادخل رقم الهوية ">
                                </div>
                                <div class="mb-4">
                                    <label for="phone-number" class="form-label">رقم الجوال</label>
                                    <input type="phone" class="form-control" id="phone-number" placeholder="ادخل رقم الجوال ">
                                </div>
                                <!-- <div class="mb-4">
                                  <label for="mobile-number" class="form-label">رقم الجوال المحمول</label>
                                  <input type="phone" class="form-control" id="mobile-number" placeholder="ادخل رقم  الهاتف المحمول">
                                </div> -->
                                <div class="mb-4">
                                    <label for="email" class="form-label">البريد الإلكتروني</label>
                                    <input type="email" class="form-control" id="email" placeholder="ادخل البريد الإلكتروني ">
                                </div>
                                <div class="mb-4">
                                    <label for="commerce-history" class="form-label">رقم السجل التجارى</label>
                                    <input type="phone" class="form-control" id="commerce-history" placeholder="ادخل رقم السجل التجارى ">
                                </div>
                                <div class="mb-4">
                                    <label for="address" class="form-label">العنوان</label>
                                    <input type="text" class="form-control" id="address" placeholder="ادخل العنوان">
                                </div>
                                <!-- <div class="mb-4">
                                  <label for="envelope-address" class="form-label">صندوق البريد</label>
                                  <input type="text" class="form-control" id="envelope-address" placeholder="ادخل عنوان صندوق البريد">
                                </div> -->
                                <div class="mb-4">
                                    <label for="city" class="form-label">المدينة</label>
                                    <input type="text" class="form-control" id="city" placeholder="ادخل المدينة">
                                </div>
                                <div class="mb-4">
                                    <label for="group" class="form-label">المحافظة</label>
                                    <input type="text" class="form-control" id="group" placeholder="ادخل المحافظة">
                                </div>
                                <!-- <div class="mb-4">
                                  <label for="country" class="form-label">الدولة</label>
                                  <select class="form-select" aria-label="Small select example" id="country">
                                    <option selected value="0">-- فضلا اختر البلد --</option>
                                    <option value="1">سلطنة عمان</option>
                                    <option value="2">المملكة العربية السعودية</option>
                                    <option value="3">Brazil</option>
                                    <option value="4">الكويت</option>
                                    <option value="5">البحرين</option>
                                    <option value="6">الإمارات العربية المتحدة</option>
                                  </select>
                                </div> -->
                                <!-- <div class="mb-4">
                                  <label for="envelope-code" class="form-label">الرمز البريدي</label>
                                  <input type="text" class="form-control" id="envelope-code" placeholder="ادخل الرمز البريدي">
                                </div> -->
                                <!-- <div class="mb-4">
                                  <div class="title">
                                    <h3>المنطقة الجغرافية للإمتياز التجاري</h3>
                                  </div>
                                </div>
                                <div class="mb-0">
                                  <div class="row ">
                                    <div class="col">
                                      <label class="form-label">الدولة</label>
                                    </div>
                                    <div class="col">
                                      <label class="form-label">المدينة</label>
                                    </div>
                                    <div class="col">

                                    </div>
                                  </div>
                                </div> -->
                                <!-- <div class="mb-4">
                                  <div id="repeater1">
                                    <div class="row mb-3">
                                      <div class="col">
                                        <input type="text" class="form-control" name="field1[]" placeholder="ادخل البلد">
                                      </div>
                                      <div class="col">
                                        <input type="text" class="form-control" name="field2[]" placeholder="ادخل المدينة">
                                      </div>
                                      <div class="col">

                                      </div>
                                    </div>
                                  </div>
                                  <button type="button" class="btn add-btn add-region-btn"><i class="fa-solid fa-plus"></i></button>
                                </div>
                                <div class="mb-4">
                                  <p>هل سبق أن تمت إدانتك بأي شيء بخلاف المخالفات المرورية البسيطة؟</p>
                                  <div class="question ">
                                    <div class="form-check form-check-inline form-check-reverse">
                                      <input class="form-check-input" type="radio" name="violationsInlineRadioOptions"
                                        id="violationsInlineRadio1" value="option1">
                                      <label class="form-check-label pe-2 ps-5" for="violationsInlineRadio1">نعم</label>
                                    </div>
                                    <div class="form-check form-check-inline form-check-reverse">
                                      <input class="form-check-input" type="radio" name="violationsInlineRadioOptions"
                                        id="violationsInlineRadio2" value="option2">
                                      <label class="form-check-label pe-2 ps-5" for="violationsInlineRadio2">لا</label>
                                    </div>
                                  </div>
                                </div> -->
                                <!-- <div class="mb-4">
                                  <p>هل توجد هناك أي دعوى قضائية مرفوعة ضدك أو ضد شركتك أو من قبل صاحب العمل ؟</p>
                                  <div class="question ">
                                    <div class="form-check form-check-inline form-check-reverse">
                                      <input class="form-check-input" type="radio" name="lawsuitInlineRadioOptions"
                                        id="lawsuitInlineRadio1" value="option1">
                                      <label class="form-check-label pe-2 ps-5" for="lawsuitInlineRadio1">نعم</label>
                                    </div>
                                    <div class="form-check form-check-inline form-check-reverse">
                                      <input class="form-check-input" type="radio" name="lawsuitInlineRadioOptions"
                                        id="lawsuitInlineRadio2" value="option2">
                                      <label class="form-check-label pe-2 ps-5" for="lawsuitInlineRadio2">لا</label>
                                    </div>
                                  </div>
                                </div> -->
                                <div class="mb-4">
                                    <p>هل لك دعوة قضائية مازالت تحت النظر؟</p>
                                    <div class="question ">
                                        <div class="form-check form-check-inline form-check-reverse">
                                            <input class="form-check-input" type="radio" name="stillLawsuitInlineRadioOptions"
                                                   id="stillLawsuitInlineRadio1" value="option1">
                                            <label class="form-check-label pe-2 ps-5" for="stillLawsuitInlineRadio1">نعم</label>
                                        </div>
                                        <div class="form-check form-check-inline form-check-reverse">
                                            <input class="form-check-input" type="radio" name="stillLawsuitInlineRadioOptions"
                                                   id="stillLawsuitInlineRadio2" value="option2">
                                            <label class="form-check-label pe-2 ps-5" for="stillLawsuitInlineRadio2">لا</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="mb-4">
                                  <p>هل سبق لك أن أعلنت إفلاسك الشخصي؟</p>
                                  <div class="question ">
                                    <div class="form-check form-check-inline form-check-reverse">
                                      <input class="form-check-input" type="radio" name="noMoneyInlineRadioOptions"
                                        id="noMoneyInlineRadio1" value="option1">
                                      <label class="form-check-label pe-2 ps-5" for="noMoneyInlineRadio1">نعم</label>
                                    </div>
                                    <div class="form-check form-check-inline form-check-reverse">
                                      <input class="form-check-input" type="radio" name="noMoneyInlineRadioOptions"
                                        id="noMoneyInlineRadio2" value="option2">
                                      <label class="form-check-label pe-2 ps-5" for="noMoneyInlineRadio2">لا</label>
                                    </div>
                                  </div>
                                </div> -->
                                <div class="mb-4">
                                    <div class="row d-flex justify-content-end align-items-center">
                                        <button class="btn submit-btn" type="button" id="next-1">التالى</button>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="tab-pane fade " id="educational-background-tab-pane" role="tabpanel"
                              aria-labelledby="educational-background-tab" tabindex="0">
                              <div class="mb-4">
                                <div class="title">
                                  <h3>الدرجة العلمية</h3>
                                </div>
                              </div>
                              <div class="mb-4">
                                <div class="question ">
                                  <div class="form-check form-check-inline form-check-reverse">
                                    <input class="form-check-input" type="radio" name="educationalDegreeInlineRadioOptions"
                                      id="educationalDegreeInlineRadio1" value="option1">
                                    <label class="form-check-label pe-2 ps-5" for="educationalDegreeInlineRadio1">نعم</label>
                                  </div>
                                  <div class="form-check form-check-inline form-check-reverse">
                                    <input class="form-check-input" type="radio" name="educationalDegreeInlineRadioOptions"
                                      id="educationalDegreeInlineRadio2" value="option2">
                                    <label class="form-check-label pe-2 ps-5" for="educationalDegreeInlineRadio2">لا</label>
                                  </div>
                                </div>
                              </div>
                              <div class="mb-4">
                                <div class="title">
                                  <h3>الدراسات عليا</h3>
                                </div>
                              </div>
                              <div class="mb-4">
                                <div class="question ">
                                  <div class="form-check form-check-inline form-check-reverse">
                                    <input class="form-check-input" type="radio" name="highStudyInlineRadioOptions"
                                      id="highStudyInlineRadio1" value="option1">
                                    <label class="form-check-label pe-2 ps-5" for="highStudyInlineRadio1">نعم</label>
                                  </div>
                                  <div class="form-check form-check-inline form-check-reverse">
                                    <input class="form-check-input" type="radio" name="highStudyInlineRadioOptions"
                                      id="highStudyInlineRadio2" value="option2">
                                    <label class="form-check-label pe-2 ps-5" for="highStudyInlineRadio2">لا</label>
                                  </div>
                                </div>
                              </div>
                              <div class="mb-4">
                                <div class="title">
                                  <h3>الإدارة</h3>
                                </div>
                              </div>
                              <div class="mb-4">
                                <div class="question ">
                                  <div class="form-check form-check-inline form-check-reverse">
                                    <input class="form-check-input" type="radio" name="managementInlineRadioOptions"
                                      id="managementInlineRadio1" value="option1">
                                    <label class="form-check-label pe-2 ps-5" for="managementInlineRadio1">نعم</label>
                                  </div>
                                  <div class="form-check form-check-inline form-check-reverse">
                                    <input class="form-check-input" type="radio" name="managementInlineRadioOptions"
                                      id="managementInlineRadio2" value="option2">
                                    <label class="form-check-label pe-2 ps-5" for="managementInlineRadio2">لا</label>
                                  </div>
                                </div>
                              </div>
                              <div class="mb-4">
                                <div class="row d-flex justify-content-between align-items-center">
                                  <button class="btn submit-btn" type="button" id="prev-1">السابق</button>
                                  <button class="btn submit-btn" type="button" id="next-2">التالى</button>
                                </div>
                              </div>
                            </div> -->
                            <div class="tab-pane fade" id="works-tab-pane" role="tabpanel" aria-labelledby="works-tab" tabindex="0">
                                <div class="mb-4">
                                    <p >هل أنت موظف</p>
                                    <div class="question ">
                                        <div class="form-check form-check-inline form-check-reverse">
                                            <input class="form-check-input" type="radio" name="workTypeInlineRadioOptions"
                                                   id="workTypeInlineRadio1" value="option1">
                                            <label class="form-check-label pe-2 ps-5" for="workTypeInlineRadio1">قطاع خاص</label>
                                        </div>
                                        <div class="form-check form-check-inline form-check-reverse">
                                            <input class="form-check-input" type="radio" name="workTypeInlineRadioOptions"
                                                   id="workTypeInlineRadio2" value="option2">
                                            <label class="form-check-label pe-2 ps-5" for="workTypeInlineRadio2">
                                                قطاع حكومى</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="famous" class="form-label">ما مدى علمك بتمور المعلم؟</label>
                                    <input type="text" class="form-control" id="famous">
                                </div>
                                <div class="mb-4">
                                    <label for="knowlege" class="form-label">ما مدى رضاك على علامة تمور المعلم؟ </label>
                                    <input type="text" class="form-control" id="knowlege">
                                </div>
                                <div class="mb-4">
                                    <p > هل ترغب بالحصول على حقوق الامتياز لتمور المعلم ؟ </p>
                                    <div class="question ">
                                        <div class="form-check form-check-inline form-check-reverse">
                                            <input class="form-check-input" type="radio" name="rightsInlineRadioOptions"
                                                   id="rightsInlineRadio1" value="option1">
                                            <label class="form-check-label pe-2 ps-5" for="rightsInlineRadio1">نعم</label>
                                        </div>
                                        <div class="form-check form-check-inline form-check-reverse">
                                            <input class="form-check-input" type="radio" name="rightsInlineRadioOptions"
                                                   id="rightsInlineRadio2" value="option2">
                                            <label class="form-check-label pe-2 ps-5" for="rightsInlineRadio2">
                                                لا</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <p >هل انت على استعداد تام على متابعة وتشغيل المشروع في حالة اعتماد طلبك؟ </p>
                                    <div class="question ">
                                        <div class="form-check form-check-inline form-check-reverse">
                                            <input class="form-check-input" type="radio" name="readyInlineRadioOptions"
                                                   id="readyInlineRadio1" value="option1">
                                            <label class="form-check-label pe-2 ps-5" for="readyInlineRadio1">نعم</label>
                                        </div>
                                        <div class="form-check form-check-inline form-check-reverse">
                                            <input class="form-check-input" type="radio" name="readyInlineRadioOptions"
                                                   id="readyInlineRadio2" value="option2">
                                            <label class="form-check-label pe-2 ps-5" for="readyInlineRadio2">
                                                لا</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <p > هل لديك القدرة المالية والادارية للادارة؟ </p>
                                    <div class="question ">
                                        <div class="form-check form-check-inline form-check-reverse">
                                            <input class="form-check-input" type="radio" name="abilityRadioOptions"
                                                   id="abilityInlineRadio1" value="option1">
                                            <label class="form-check-label pe-2 ps-5" for="abilityInlineRadio1">نعم</label>
                                        </div>
                                        <div class="form-check form-check-inline form-check-reverse">
                                            <input class="form-check-input" type="radio" name="abilityRadioOptions"
                                                   id="abilityInlineRadio2" value="option2">
                                            <label class="form-check-label pe-2 ps-5" for="abilityInlineRadio2">
                                                لا</label>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="mb-4">
                                  <label for="workOwnerName" class="form-label">أسم صاحب العمل</label>
                                  <input type="text" class="form-control" id="workOwnerName" placeholder="ادخل الإسم الكامل للموظف ">
                                </div> -->
                                <div class="mb-4">
                                    <label for="company" class="form-label"> اسم جهة العمل</label>
                                    <input type="text" class="form-control" id="company" placeholder="ادخل اسم الشركة ">
                                </div>
                                <!-- <div class="mb-4">
                                  <label for="location" class="form-label">الموقع</label>
                                  <input type="text" class="form-control" id="location" placeholder="ادخل المسمى الوظيفي ">
                                </div> -->
                                <!-- <div class="mb-4">
                                  <div class="title">
                                    <h3>العنوان وبيانات التواصل</h3>
                                  </div>
                                </div>
                                <div class="mb-4">
                                  <label for="houseNumber" class="form-label">رقم المبنى</label>
                                  <input type="text" class="form-control" id="houseNumber" placeholder="ادخل رقم المبنى ">
                                </div>
                                <div class="mb-4">
                                  <label for="streetName" class="form-label">أسم الشارع</label>
                                  <input type="text" class="form-control" id="streetName" placeholder="ادخل اسم الشارع ">
                                </div>
                                <div class="mb-4">
                                  <label for="cityName" class="form-label">المدينة</label>
                                  <input type="text" class="form-control" id="cityName" placeholder="ادخل المدينة ">
                                </div>
                                <div class="mb-4">
                                  <label for="country-name" class="form-label">الدولة</label>
                                  <select class="form-select" aria-label="Small select example" id="country-name">
                                    <option selected value="0">-- فضلا اختر البلد --</option>
                                    <option value="1">سلطنة عمان</option>
                                    <option value="2">المملكة العربية السعودية</option>
                                    <option value="3">Brazil</option>
                                    <option value="4">الكويت</option>
                                    <option value="5">البحرين</option>
                                    <option value="6">الإمارات العربية المتحدة</option>
                                  </select>
                                </div>
                                <div class="mb-4">
                                  <label for="tel-number" class="form-label">رقم التلفون</label>
                                  <input type="phone" class="form-control" id="tel-number" placeholder="ادخل الهاتف">
                                </div>
                                <div class="mb-4">
                                  <label for="mob-number" class="form-label">رقم الجوال المحمول</label>
                                  <input type="phone" class="form-control" id="mob-number" placeholder="ادخل رقم الجوال">
                                </div>
                                <div class="mb-4">
                                  <label for="fax-number" class="form-label">فاكس</label>
                                  <input type="text" class="form-control" id="fax-number" placeholder="ادخل الفاكس">
                                </div>
                                <div class="mb-4">
                                  <label for="e-mail" class="form-label">البريد الإلكتروني</label>
                                  <input type="email" class="form-control" id="e-mail" placeholder="ادخل البريد الإلكتروني ">
                                </div>
                                <div class="mb-4">
                                  <div class="title">
                                    <h3>الخبرات العملية</h3>
                                  </div>
                                </div>
                                <div class="mb-0">
                                  <div class="row ">
                                    <div class="col">
                                      <label class="form-label">الموقع</label>
                                    </div>
                                    <div class="col">
                                      <label class="form-label">المسؤليات</label>
                                    </div>
                                    <div class="col">

                                    </div>
                                  </div>
                                </div>
                                <div class="mb-4">
                                  <div id="repeater2">
                                    <div class="row mb-3">
                                      <div class="col">
                                        <input type="text" class="form-control" name="field1-2[]" placeholder="ادخل المسمى الوظيفي ">
                                      </div>
                                      <div class="col">
                                        <input type="text" class="form-control" name="field2-2[]" placeholder="ادخل المسؤولية">
                                      </div>
                                      <div class="col">

                                      </div>
                                    </div>
                                  </div>
                                  <button type="button" class="btn add-btn add-experience-btn"><i
                                      class="fa-solid fa-plus"></i></button>
                                </div>
                                <div class="mb-4">
                                  <div class="title">
                                    <h3>المراجع</h3>
                                  </div>
                                </div>
                                <div class="mb-0">
                                  <div class="row ">
                                    <div class="col">
                                      <label class="form-label">الإسم</label>
                                    </div>
                                    <div class="col">
                                      <label class="form-label">رقم التلفون</label>
                                    </div>
                                    <div class="col">
                                      <label class="form-label">فاكس</label>
                                    </div>
                                    <div class="col">
                                      <label class="form-label">البريد الإلكتروني</label>
                                    </div>
                                    <div class="col">

                                    </div>
                                  </div>
                                </div>
                                <div class="mb-4">
                                  <div id="repeater3">
                                    <div class="row mb-3">
                                      <div class="col">
                                        <input type="text" class="form-control" name="field1-3[]" placeholder="ادخل اسم المرجع ">
                                      </div>
                                      <div class="col">
                                        <input type="phone" class="form-control" name="field2-3[]" placeholder="ادخل هاتف المرجع">
                                      </div>
                                      <div class="col">
                                        <input type="text" class="form-control" name="field3-3[]" placeholder="ادخل الفاكس">
                                      </div>
                                      <div class="col">
                                        <input type="email" class="form-control" name="field4-3[]"
                                          placeholder="ادخل البريد الالكتروني ">
                                      </div>
                                      <div class="col">

                                      </div>
                                    </div>
                                  </div>
                                  <button type="button" class="btn add-btn add-reference-btn"><i
                                      class="fa-solid fa-plus"></i></button>
                                </div> -->
                                <div class="mb-4">
                                    <div class="row d-flex justify-content-between align-items-center">
                                        <button class="btn submit-btn" type="button" id="prev-1">السابق</button>
                                        <button class="btn submit-btn" type="button" id="next-2">التالى</button>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="financial-tab-pane" role="tabpanel" aria-labelledby="financial-tab"
                                 tabindex="0">
                                <div class="mb-4">
                                    <div class="title">
                                        <h3>قوائم الدخل لمدة 12 شهرًا المنقضية</h3>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="salary" class="form-label">الأجور، المرتبات</label>
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text" id="addon-currency">SAR</span>
                                        <input type="text" class="form-control" placeholder="ادخل الراتب ، الإجور " aria-label="currency"
                                               aria-describedby="addon-currency" id="salary">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="rewards" class="form-label">المكافأت ، العمولات</label>
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text" id="addon-rewards">SAR</span>
                                        <input type="text" class="form-control" placeholder="ادخل المكافأة , العمولة "
                                               aria-label="rewards" aria-describedby="addon-rewards" id="rewards">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="earnings" class="form-label">أرباح الأسهم ، الفوائد</label>
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text" id="addon-earnings">SAR</span>
                                        <input type="text" class="form-control" placeholder="ادخل الإرباح و الفوائد "
                                               aria-label="earnings" aria-describedby="addon-earnings" id="earnings">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="income" class="form-label">الدخل العقاري</label>
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text" id="addon-income">SAR</span>
                                        <input type="text" class="form-control" placeholder="ادخل الدخل العقاري " aria-label="income"
                                               aria-describedby="addon-income" id="income">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="work-earnings" class="form-label">الأرباح</label>
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text" id="addon-earnings">SAR</span>
                                        <input type="text" class="form-control" placeholder="ادخل ارباح العمل " aria-label="work-earnings"
                                               aria-describedby="addon-earnings" id="work-earnings">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="income-resources" class="form-label">مصادر دخل أخرى (حدد المصدر ، مثل: الثقة ، الزوج ،
                                        إلخ)</label>
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text" id="addon-income-resources">SAR</span>
                                        <input type="text" class="form-control" placeholder="ادخل مصادر الدخل الأخرى "
                                               aria-label="Username" aria-describedby="addon-income-resources" id="income-resources">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="total" class="form-label">المجموع</label>
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text" id="addon-total">SAR</span>
                                        <input type="text" class="form-control" placeholder="ادخل الإجمالي " aria-label="Username"
                                               aria-describedby="addon-total" id="total">
                                    </div>
                                </div>
                                <!-- <div class="mb-4">
                                  <div class="title">
                                    <h3>المصرفيين</h3>
                                  </div>
                                </div>
                                <div class="mb-4">
                                  <label for="bankName" class="form-label">الإسم</label>
                                  <input type="text" class="form-control" id="bankName" placeholder="ادخل اسم البنك ">
                                </div>
                                <div class="mb-4">
                                  <label for="bankAddress" class="form-label">العنوان</label>
                                  <input type="text" class="form-control" id="bankAddress" placeholder="ادخل عنوان البنك ">
                                </div>
                                <div class="mb-4">
                                  <label for="bankPhoneNumber" class="form-label">رقم الجوال المحمول</label>
                                  <input type="text" class="form-control" id="bankPhoneNumber" placeholder="ادخل هاتف البنك ">
                                </div>
                                <div class="mb-4">
                                  <label for="faxBankName" class="form-label">فاكس</label>
                                  <input type="text" class="form-control" id="faxBankName" placeholder="ادخل فاكس البنك ">
                                </div> -->
                                <!-- <div class="mb-4">
                                  <div class="title">
                                    <h3>مدقق الحسابات</h3>
                                  </div>
                                </div>
                                <div class="mb-4">
                                  <label for="bauditorName" class="form-label">الإسم</label>
                                  <input type="text" class="form-control" id="auditorkName" placeholder="ادخل اسم المدقق  ">
                                </div>
                                <div class="mb-4">
                                  <label for="bauditorAddress" class="form-label">العنوان</label>
                                  <input type="text" class="form-control" id="auditorkAddress" placeholder="ادخل عنوان المدقق  ">
                                </div>
                                <div class="mb-4">
                                  <label for="bauditorPhoneNumber" class="form-label">رقم الجوال المحمول</label>
                                  <input type="text" class="form-control" id="bauditorPhoneNumber" placeholder="ادخل هاتف المدقق  ">
                                </div>
                                <div class="mb-4">
                                  <label for="faxAuditorName" class="form-label">فاكس</label>
                                  <input type="text" class="form-control" id="faxAuditorName" placeholder="ادخل فاكس المدقق  ">
                                </div> -->
                                <div class="mb-4">
                                    <div class="title">
                                        <h3>الأصول</h3>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="handCach" class="form-label">النقد في الصندوق وفي البنك</label>
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text" id="addon-handCach">SAR</span>
                                        <input type="text" class="form-control" placeholder="ادخل الأصول النقدية في البنك "
                                               aria-label="handCach" aria-describedby="addon-handCach" id="handCach">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="sharedEarnings" class="form-label">الأرباح المشاركة</label>
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text" id="addon-sharedEarnings">SAR</span>
                                        <input type="text" class="form-control" placeholder="ادخل تقسيم ارباح الأصول "
                                               aria-label="sharedEarnings" aria-describedby="addon-sharedEarnings" id="sharedEarnings">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="Guarantees" class="form-label">ضمانات</label>
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text" id="addon-Guarantees">SAR</span>
                                        <input type="text" class="form-control" placeholder="ادخل الأوراق المالية للأصول "
                                               aria-label="Guarantees" aria-describedby="addon-Guarantees" id="Guarantees">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="moneyBills" class="form-label">السندات / الأوراق المالية</label>
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text" id="addon-moneyBills">SAR</span>
                                        <input type="text" class="form-control" placeholder="ادخل سندات الأصول " aria-label="moneyBills"
                                               aria-describedby="addon-moneyBills" id="moneyBills">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="realEstate" class="form-label">العقارات - القيمة السوقية الحالية</label>
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text" id="addon-realEstate">SAR</span>
                                        <input type="text" class="form-control" placeholder="ادخل القيمة السوقية الحالية للعقار "
                                               aria-label="realEstate" aria-describedby="addon-realEstate" id="realEstate">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="personalProperty" class="form-label">أخرى: السيارات والممتلكات الشخصية</label>
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text" id="addon-personalProperty">SAR</span>
                                        <input type="text" class="form-control" placeholder="ادخل غير ذلك  " aria-label="personalProperty"
                                               aria-describedby="addon-personalProperty" id="personalProperty">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="totalAssets" class="form-label">إجمالي الأصول</label>
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text" id="addon-totalAssets">SAR</span>
                                        <input type="text" class="form-control" placeholder="ادخل إجمالي الإصول " aria-label="totalAssets"
                                               aria-describedby="addon-totalAssets" id="totalAssets">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="title">
                                        <h3>الإلتزامات</h3>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="loansPayable" class="form-label">ملاحظات / قروض مستحقة الدفع للأصدقاء والأقارب</label>
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text" id="addon-loansPayable">SAR</span>
                                        <input type="text" class="form-control" placeholder="ادخل القروض المستحقة للدفع "
                                               aria-label="loansPayable" aria-describedby="addon-loansPayable" id="loansPayable">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="billsPayable" class="form-label">حسابات وفواتير مستحقة الدفع</label>
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text" id="addon-billsPayable">SAR</span>
                                        <input type="text" class="form-control" placeholder="ادخل حساب المطالبات  والفواتير واجبة السداد "
                                               aria-label="billsPayable" aria-describedby="addon-billsPayable" id="billsPayable">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="Mortgages" class="form-label">الرهون العقارية</label>
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text" id="addon-Mortgages">SAR</span>
                                        <input type="text" class="form-control" placeholder="فضلا ادخل الرهون العقارية "
                                               aria-label="Mortgages" aria-describedby="addon-Mortgages" id="Mortgages">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="otherObligations" class="form-label">ديون أو التزامات أخرى</label>
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text" id="addon-otherObligations">SAR</span>
                                        <input type="text" class="form-control" placeholder="ادخل مستحقات الدفع الأخرى "
                                               aria-label="otherObligations" aria-describedby="addon-otherObligations" id="otherObligations">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="totalLiabilities" class="form-label">إجمالي الإلتزامات</label>
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text" id="addon-totalLiabilities">SAR</span>
                                        <input type="text" class="form-control" placeholder="ادخل اجمالي المطالبات "
                                               aria-label="totalLiabilities" aria-describedby="addon-totalLiabilities" id="totalLiabilities">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="netClaims" class="form-label">القيمة الصافية (أصول مخصومة الإلتزامات)</label>
                                    <div class="input-group flex-nowrap">
                                        <span class="input-group-text" id="addon-netClaims">SAR</span>
                                        <input type="text" class="form-control" placeholder="ادخل صافي قيمة المطالبات "
                                               aria-label="netClaims" aria-describedby="addon-netClaims" id="netClaims">
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="title">
                                        <h3>أذكر أسماء البنوك أو شركات التمويل حيث يتم فيها الاحتفاظ بالحسابات أو حيث يمكن الحصول على
                                            السجل الائتماني أو التحقق منه:</h3>
                                    </div>
                                </div>
                                <div class="mb-0">
                                    <div class="row ">
                                        <div class="col">
                                            <label class="form-label">الإسم</label>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">العنوان</label>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">الحد الأعلى للرصيد</label>
                                        </div>
                                        <div class="col">
                                            <label class="form-label">الغرض</label>
                                        </div>
                                        <div class="col">

                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div id="repeater4">
                                        <div class="row mb-3">
                                            <div class="col">
                                                <input type="text" class="form-control" name="field1-4[]" placeholder="ادخل الاسم">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="field2-4[]" placeholder="ادخل العنوان">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="field3-4[]" placeholder="أدخل أعلى رصيد ممدد ">
                                            </div>
                                            <div class="col">
                                                <input type="text" class="form-control" name="field4-4[]" placeholder="ادخل الغرض ">
                                            </div>
                                            <div class="col">
                                                <!-- <button type="button" class="btn remove-reference-btn"><i class="fa-solid fa-trash-can"></i></button> -->
                                            </div>
                                        </div>
                                    </div>
                                    <button type="button" class="btn add-btn add-bank-btn"><i class="fa-solid fa-plus"></i></button>
                                </div>

                                <!-- <div class="mb-4">
                                  <div class="title">
                                    <h3>هل تقدمت من قبل على د.كيف كافيه؟</h3>
                                  </div>
                                </div>
                                <div class="mb-4">
                                  <div class="question ">
                                    <div class="form-check form-check-inline form-check-reverse">
                                      <input class="form-check-input" type="checkbox" id="commercialFranchise" value="">
                                      <label class="form-check-label pe-2 ps-5" for="commercialFranchise">الإمتياز التجاري</label>
                                    </div>
                                    <div class="form-check form-check-inline form-check-reverse">
                                      <input class="form-check-input" type="checkbox" id="career" value="">
                                      <label class="form-check-label pe-2 ps-5" for="career">المسار المهني</label>
                                    </div>
                                    <div class="form-check form-check-inline form-check-reverse">
                                      <input class="form-check-input" type="checkbox" id="Endorship" value="">
                                      <label class="form-check-label pe-2 ps-5" for="Endorship">Endorship</label>
                                    </div>
                                  </div>
                                </div> -->
                                <div class="mb-4">
                                    <div class="title">
                                        <h3>هل تم منحك حقوق الامتياز لاي علامة تجارية؟</h3>
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <div class="question ">
                                        <div class="form-check form-check-inline form-check-reverse">
                                            <input class="form-check-input" type="radio" name="relocateInlineRadioOptions"
                                                   id="relocateInlineRadio1" value="option1">
                                            <label class="form-check-label pe-2 ps-5" for="relocateInlineRadio1">نعم</label>
                                        </div>
                                        <div class="form-check form-check-inline form-check-reverse">
                                            <input class="form-check-input" type="radio" name="relocateInlineRadioOptions"
                                                   id="relocateInlineRadio2" value="option2">
                                            <label class="form-check-label pe-2 ps-5" for="relocateInlineRadio2">لا</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-4 d-flex flex-column">
                                    <label for="textareaQuestion" class="form-label">إذا كان كذلك، فما هى؟</label>
                                    <textarea name="" class="form-control" rows="3" id="textareaQuestion"></textarea>
                                </div>
                                <div class="mb-4">
                                    <label for="country-name" class="form-label">يرجى تحديد المدن المقترحة للحصول على حقوق الامتياز بها؟
                                    </label>
                                    <select class="form-select" aria-label="Small select example" id="country-name">
                                        <option selected value="0">-- فضلا اختر المدينة --</option>
                                        <option value="1">سلطنة عمان</option>
                                        <option value="2">المملكة العربية السعودية</option>
                                        <option value="3">Brazil</option>
                                        <option value="4">الكويت</option>
                                        <option value="5">البحرين</option>
                                        <option value="6">الإمارات العربية المتحدة</option>
                                    </select>
                                </div>
                                <div class="mb-4">
                                    <div class="row d-flex justify-content-between align-items-center">
                                        <button class="btn submit-btn" type="button" id="prev-2">السابق</button>
                                        <button class="btn submit-btn" type="button" id="next-3">التالى</button>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="delegation-tab-pane" role="tabpanel" aria-labelledby="delegation-tab"
                                 tabindex="0">
                                <div class="mb-4">
                                    <div class="form-check form-check-reverse">
                                        <input class="form-check-input" type="checkbox" value="" id="delegateCheck">
                                        <label class="form-check-label" for="delegateCheck">
                                            اقدم المعلومات السابقة باعتبارها تصريح أو إفادة بوضعي الشخصي و المالي الكامل و الصحيح , اعتبارا
                                            من التاريخ الموضح أدناه . لقد فوضت صراحة أي صاحب عمل سابق أو حالي , أو أي وكالة لإنفاذ القانون ,
                                            أو ولاية أو محلية أو حكومة أو أي شخص لديه معرفة شخصية بشخصيتي أو خبرتي في العمل أو سجلي الإجرامي
                                            لإصدار هذه المعلومات لـ د.كيف بنائاً على طلب د.كيف , فأنا أوافق على تقديم بيان من مستشاري المهني
                                            (أي مصرفي أو سمسار أو محاسب أو محامي ) يتحقق من الأصول المذكورة أعلاه , و أوافق أيضا على تقديم
                                            نسخ من أي اقرارات ضريبية أو زكاة للدولة كما تم تقديمها خلال آخر خمس سنوات (05) . أوقن بأن د.كيف
                                            له حق التصرف بجميع المعلومات المذكورة أعلاه كعامل مادي في اعتبار طلبي لأصبح حائزا على امتياز د.
                                            كيف , و بالتالي أوافق على إخطار د. كيف على الفور بأي مادة في أي من المعلومات المذكورة أعلاه أو
                                            أي معلومات لاحقة مقدمة إلى د.كيف . إضافة إلى ذلك , أعفي أي شخص من مسؤولية دقة و صحة المعلومات
                                        </label>
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <div class="row d-flex justify-content-between align-items-center">
                                        <button class="btn submit-btn" type="button" id="prev-3">السابق</button>
                                        <div style="width: 320px;">
                                            <span class="text-danger" style="display: contents;">تطبق الشروط و الاحكام</span>
                                            <button class="btn send-btn me-3" type="submit">إرسال</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- end home -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="{{url('/')}}/frontend/js/main.js"> </script>
</body>

</html>
