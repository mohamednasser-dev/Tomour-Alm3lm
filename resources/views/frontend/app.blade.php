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
    <title> شركة تمور المعلم</title>
</head>

<body>
<!-- start home -->
<section id="home">
    <div class="slider">
        <h3>الإمتياز التجاري</h3>
        <h1>استمارة التقديم</h1>
        <br>
        <br>
        <br>
        <br>
    </div>
    <div class="content">
        <div class="container" id="container_div" >
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
    });

</script>
</body>

</html>
