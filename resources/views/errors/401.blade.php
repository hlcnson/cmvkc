{{-- Giao diện login --}}

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    {{--  Tell the browser to be responsive to screen width  --}}
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    {{--  CSRF Token  --}}
    <meta name="csrf-token" content="{{ csrf_token() }}"> 

    <title>Lỗi truy cập - CMVKC</title>

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('backend/images/favicon.png') }}">
    
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('backend/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet">
    <!-- You can change the theme colors from here -->
    <link href="{{ asset('backend/css/colors/blue.css') }}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    {{-- Kết xuất mã nguồn riêng của trang con, nếu không có thì bỏ qua --}}

</head>

<body>
    
    <section id="wrapper" class="error-page">
        <div class="error-box">
            <div class="error-body text-center">
                <h1>401</h1>
                <h3 class="text-uppercase">Từ chối truy cập!</h3>
                <p class="text-muted m-t-30 m-b-30">Bạn không được cấp quyền để truy cập vào khu vực này.</p>
                <a href="index.html" class="btn btn-info btn-rounded waves-effect waves-light m-b-40">Quay về trang chủ</a> </div>
            <footer class="footer text-center">© 2018 Trường Cao đẳng nghề Việt Nam - Hàn Quốc Cà Mau.</footer>
        </div>
    </section>
    
    
    

    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{asset('backend/plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('backend/plugins/bootstrap/js/popper.min.js')}}"></script>
    <script src="{{asset('backend/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    
    <!--Custom JavaScript -->
    <script src="{{asset('backend/js/custom.min.js')}}"></script>
    
</body>
</html>







