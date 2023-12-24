<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description"
          content="شركة تُمور المعلِّم® علامة تجارية مسجلة  ;أجود أنواع التمور الفاخرة تصلك الى منزلك">
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

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">
    <title> شركة تمور المعلم</title>
    <style>
        label {
            font-size: 18px !important;
            /*font-weight: bold!important;*/
            content: " *";
            /*color: red;*/
        }

        .form-label::after {
            content: " *";
            color: red;
        }
/*For country code*/
        .vodiapicker{
            display: none;
        }

        #a{
            padding-left: 0px;
        }

        #a img, .btn-select img{
            width: 12px;

        }

        #a li{
            list-style: none;
            padding-top: 5px;
            padding-bottom: 5px;
        }

        #a li:hover{
            background-color: #F4F3F3;
        }

        #a li img{
            margin: 5px;
        }

        #a li span, .btn-select li span{
            margin-left: 30px;
        }

        /* item list */

        .b{
            display: none;
            width: 100%;
            max-width: 350px;
            box-shadow: 0 6px 12px rgba(0,0,0,.175);
            border: 1px solid rgba(0,0,0,.15);
            border-radius: 5px;

        }

        .open{
            display: show !important;
        }

        .btn-select{
            margin-top: 10px;
            width: 100%;
            max-width: 350px;
            height: 34px;
            border-radius: 5px;
            background-color: #fff;
            border: 1px solid #ccc;

        }
        .btn-select li{
            list-style: none;
            float: left;
            padding-bottom: 0px;
        }

        .btn-select:hover li{
            margin-left: 0px;
        }

        .btn-select:hover{
            background-color: #F4F3F3;
            border: 1px solid transparent;
            box-shadow: inset 0 0px 0px 1px #ccc;


        }

        .btn-select:focus{
            outline:none;
        }

        .lang-select{
            margin-left: 50px;
        }


    </style>
    <style>
        .img-flag {
            width: 20px; /* Adjust the width as needed */
            height: 20px; /* Adjust the height as needed */
            margin-right: 10px; /* Adjust the spacing between image and text */
        }
    </style>
</head>

<body>
<!-- start home -->
<section id="home">
    <div class="slider">
        {{--        <h3>الإمتياز التجاري</h3>--}}
        {{--        <h1>استمارة التقديم</h1>--}}
        <br>
        <br>
        <br>
        <br>
    </div>
    <div class="content">
        <div class="container" id="container_div">
            @yield('content')
        </div>
    </div>
</section>
<!-- end home -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="{{url('/')}}/frontend/js/main.js"></script>

@include('sweetalert::alert', ['cdn' => "https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.7.12/sweetalert2.min.css"])
@include('sweetalert::alert')
@stack('scripts')

<script>
    $(document).ready(function () {

        $('#btn-search').click(function () {
            var search = $('#search').val();
            $.ajax({
                url: "/reservation-search/" + search,
                dataType: 'html',
                type: 'get',
                success: function (data) {
                    // $('#cntainer_div').append(data);
                    $('#container_div').html(data);
                }
            });
        });


        // Get the CRM element
        var checkbox = document.getElementById('is_no_cr_num');
        checkbox.addEventListener('change', function () {
            if (checkbox.checked) {
                $('#c_r_num_dev').hide();
                $('#c_r_num').val('');
                document.getElementById('c_r_num').removeAttribute('required');
            } else {
                $('#c_r_num_dev').show();
                document.getElementById('c_r_num').setAttribute('required', 'true');
            }
        });

        // Get the CRM element
        var checkbox1 = document.getElementById('is_no_cr_num1');
        checkbox1.addEventListener('change', function () {
            if (checkbox1.checked) {
                $('#c_r_num_dev').show();
                document.getElementById('c_r_num').setAttribute('required', 'true');
            }
        });

        // Get the emp element
        var workTypeInlineRadio2 = document.getElementById('workTypeInlineRadio2');
        workTypeInlineRadio2.addEventListener('change', function () {
            if (workTypeInlineRadio2.checked) {
                $('#is_emp').hide();
                $('#company_name').val('');
                document.getElementById('company_name').removeAttribute('required');
            }
        });

        var workTypeInlineRadio1 = document.getElementById('workTypeInlineRadio1');
        workTypeInlineRadio1.addEventListener('change', function () {
            if (workTypeInlineRadio1.checked) {
                $('#is_emp').show();
                document.getElementById('company_name').setAttribute('required', 'true');
            }
        });


        // Get the project owened element
        var projects_ownedRadio2 = document.getElementById('projects_ownedRadio2');
        projects_ownedRadio2.addEventListener('change', function () {
            if (projects_ownedRadio2.checked) {
                $('#pro_owened').hide();
                $('#projects_owned').val('');
                document.getElementById('projects_owned').removeAttribute('required');
            }
        });

        var projects_ownedRadio1 = document.getElementById('projects_ownedRadio1');
        projects_ownedRadio1.addEventListener('change', function () {
            if (projects_ownedRadio1.checked) {
                $('#pro_owened').show();
                document.getElementById('projects_owned').setAttribute('required', 'true');
            }
        });

        // Get the project granted_brands element
        var relocateInlineRadio2 = document.getElementById('relocateInlineRadio2');

        relocateInlineRadio2.addEventListener('change', function () {

            if (relocateInlineRadio2.checked) {
                $('#granted_brands_dev').hide();
                $('#granted_brands').val('');
                document.getElementById('granted_brands').removeAttribute('required');
            }
        });

        var relocateInlineRadio1 = document.getElementById('relocateInlineRadio1');
        relocateInlineRadio1.addEventListener('change', function () {
            if (relocateInlineRadio1.checked) {
                $('#granted_brands_dev').show();
                document.getElementById('granted_brands').setAttribute('required', 'true');
            }
        });

    });

    // For country code
    //test for getting url value from attr
    // var img1 = $('.test').attr("data-thumbnail");
    // console.log(img1);

    //test for iterating over child elements
    var langArray = [];
    $('.vodiapicker option').each(function(){
        var img = $(this).attr("data-thumbnail");
        var text = this.innerText;
        var value = $(this).val();
        var item = '<li><img src="'+ img +'" alt="" value="'+value+'"/><span>'+ text +'</span></li>';
        langArray.push(item);
    })

    $('#a').html(langArray);

    //Set the button value to the first el of the array
    $('.btn-select').html(langArray[0]);
    $('.btn-select').attr('value', 'en');

    //change button stuff on click
    $('#a li').click(function(){
        var img = $(this).find('img').attr("src");
        var value = $(this).find('img').attr('value');
        var text = this.innerText;
        var item = '<li><img src="'+ img +'" alt="" /><span>'+ text +'</span></li>';
        $('.btn-select').html(item);
        $('.btn-select').attr('value', value);
        $(".b").toggle();
        //console.log(value);
    });

    $(".btn-select").click(function(){
        $(".b").toggle();
    });

    //check local storage for the lang
    var sessionLang = localStorage.getItem('lang');
    if (sessionLang){
        //find an item with value of sessionLang
        var langIndex = langArray.indexOf(sessionLang);
        $('.btn-select').html(langArray[langIndex]);
        $('.btn-select').attr('value', sessionLang);
    } else {
        var langIndex = langArray.indexOf('ch');
        console.log(langIndex);
        $('.btn-select').html(langArray[langIndex]);
        //$('.btn-select').attr('value', 'en');
    }



</script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2({
            templateResult: formatState
        });
    });

    function formatState(state) {
        if (!state.id) {
            return state.text;
        }
        var $state = $(
            '<span><img src="' + $(state.element).data('image') + '" class="img-flag" /> ' + state.text + '</span>'
        );
        return $state;
    }
</script>
</body>

</html>
