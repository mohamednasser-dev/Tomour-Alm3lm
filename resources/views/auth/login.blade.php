<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<head><base href="../../../../">
    <meta charset="utf-8" />
    <title>{{env('APP_NAME')}}</title>
    <meta name="description" content="Singin page example" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="canonical" href="https://keenthemes.com/metronic" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Custom Styles(used by this page)-->
    <link href="{{asset('/')}}assets/css/pages/login/login-4.css" rel="stylesheet" type="text/css" />
    <!--end::Page Custom Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="{{asset('/')}}assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('/')}}assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('/')}}assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <link href="{{asset('/')}}assets/css/themes/layout/header/base/light.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('/')}}assets/css/themes/layout/header/menu/light.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('/')}}assets/css/themes/layout/brand/dark.css" rel="stylesheet" type="text/css" />
    <link href="{{asset('/')}}assets/css/themes/layout/aside/dark.css" rel="stylesheet" type="text/css" />
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="{{asset('/')}}assets/media/logos/favicon.ico" />
</head>
<!--end::Head-->
<!--begin::Body-->
<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">
<!--begin::Main-->
<div class="d-flex flex-column flex-root">
    <!--begin::Login-->
    <div class="login login-4 wizard d-flex flex-column flex-lg-row flex-column-fluid">
        <!--begin::Content-->
        <div class="login-container order-2 order-lg-1 d-flex flex-center flex-row-fluid px-7 pt-lg-0 pb-lg-0 pt-4 pb-6 bg-white">
            <!--begin::Wrapper-->
            <div class="login-content d-flex flex-column pt-lg-0 pt-12">
                <!--begin::Logo-->

                <!--end::Logo-->
                <!--begin::Signin-->
                <div class="login-form">
                    <!--begin::Form-->
                    <form method="POST" action="{{ route('login') }}">
                    @csrf
                        <div class="pb-13 pt-lg-0 pt-5">
                            <h3 class="font-weight-bolder text-dark font-size-h4 font-size-h1-lg">اهلا بك في لوحة تحكم هايبر الزهران</h3>
                           </div>
                    <!--begin::Title-->
                        <!--begin::Form group-->
                        <div class="form-group">
                            <label class="font-size-h6 font-weight-bolder text-dark">@lang('lang.email')</label>
                            <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg border-0" type="text" name="email" autocomplete="off" />

                            @if($errors->has('email'))
                                <span  class="text-danger m-2 ">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <!--end::Form group-->
                        <!--begin::Form group-->
                        <div class="form-group">
                            <div class="d-flex justify-content-between mt-n5">
                                <label class="font-size-h6 font-weight-bolder text-dark pt-5">@lang('lang.password')</label>
                            </div>
                            <input class="form-control form-control-solid h-auto py-7 px-6 rounded-lg border-0" type="password" name="password" autocomplete="off" />
                            @if($errors->has('password'))
                                <span  class="text-danger m-2 ">{{ $errors->first('password') }}</span>
                            @endif
                        </div>

                        <!--end::Form group-->
                        <!--begin::Action-->
                        <div class="pb-lg-0 pb-5">
                            <button type="submit"  id="submit" id="kt_login_singin_form_submit_button" class="btn btn-primary font-weight-bolder font-size-h6 px-8 py-4 my-3 mr-3">@lang('lang.login')</button>

                        </div>
                        <!--end::Action-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Signin-->
            </div>
            <!--end::Wrapper-->

        </div>
        <!--begin::Content-->
        <!--begin::Aside-->
        <div class="login-aside order-1 order-lg-2 bgi-no-repeat bgi-position-x-right">
            <div class="login-conteiner bgi-no-repeat bgi-position-x-right bgi-position-y-bottom" style="background-image: url({{asset('/')}}assets/media/svg/illustrations/login-visual-4.svg)  ">
                <!--begin::Aside title-->
            {{--    <h3 class="pt-lg-40 pl-lg-20 pb-lg-0 pl-10 py-20 m-0 d-flex justify-content-lg-start font-weight-boldest display5 display1-lg text-secondary">


                </h3>--}}
                <!--end::Aside title-->
            </div>

        </div>
        <!--end::Aside-->

    </div>
    <!--end::Login-->
</div>
<!--end::Main-->
<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
<!--begin::Global Config(global config for global JS scripts)-->
<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
<!--end::Global Config-->
<!--begin::Global Theme Bundle(used by all pages)-->
<script src="{{asset('/')}}assets/plugins/global/plugins.bundle.js"></script>
<script src="{{asset('/')}}assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
<script src="{{asset('/')}}assets/js/scripts.bundle.js"></script>
<!--end::Global Theme Bundle-->
<!--begin::Page Scripts(used by this page)-->
<script src="{{asset('/')}}assets/js/pages/custom/login/login-4.js"></script>
<script>
    $(document).ready(function() {
        $(document).on('submit', 'form', function() {
            $('button').attr('disabled', 'disabled');
        });
    });
</script>
<!--end::Page Scripts-->
</body>
<!--end::Body-->
</html>
