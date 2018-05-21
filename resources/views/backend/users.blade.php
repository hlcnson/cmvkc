@extends('layouts.backend')

@section('content')

{{-- Bread crumb and right sidebar toggle  --}}
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Quản trị hệ thống</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Trang chủ</a></li>
            <li class="breadcrumb-item active">Danh mục người dùng</li>
        </ol>
    </div>
    
</div>
{{--  End Bread crumb and right sidebar toggle  --}}

{{--  Container fluid   --}}
<div class="container-fluid">
    {{--  Start Page Content  --}}
    
    <div class="row">
        <!-- .col -->
        <div class="col-md-6 col-lg-6 col-xlg-4">
            <div class="card card-body">
                <div class="row">
                    <div class="col-md-4 col-lg-3 text-center">
                        <a href="app-contact-detail.html"><img src="../assets/images/users/1.jpg" alt="user" class="img-circle img-responsive"></a>
                    </div>
                    <div class="col-md-8 col-lg-9">
                        <h3 class="box-title m-b-0">Johnathan Doe</h3> <small>Web Designer</small>
                        <address>
                            795 Folsom Ave, Suite 600 San Francisco, CADGE 94107
                            
                            <br/>
                            <abbr title="Phone">P:</abbr> (123) 456-7890
                            <br/>
                            <abbr title="Mail">M:</abbr> mail@gmail.com
                        </address>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.col -->
        <!-- .col -->
        <div class="col-md-6 col-lg-6 col-xlg-4">
            <div class="card card-body">
                <div class="row">
                    <div class="col-md-4 col-lg-3 text-center">
                        <a href="app-contact-detail.html"><img src="../assets/images/users/2.jpg" alt="user" class="img-circle img-responsive"></a>
                    </div>
                    <div class="col-md-8 col-lg-9">
                        <h3 class="box-title m-b-0">Johnathan Doe</h3> <small>Web Designer</small>
                        <address>
                            795 Folsom Ave, Suite 600 San Francisco, CADGE 94107
                            <br/>
                            <br/>
                            <abbr title="Phone">P:</abbr> (123) 456-7890
                        </address>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.col -->
        <!-- .col -->
        <div class="col-md-6 col-lg-6 col-xlg-4">
            <div class="card card-body">
                <div class="row">
                    <div class="col-md-4 col-lg-3 text-center">
                        <a href="app-contact-detail.html"><img src="../assets/images/users/3.jpg" alt="user" class="img-circle img-responsive"></a>
                    </div>
                    <div class="col-md-8 col-lg-9">
                        <h3 class="box-title m-b-0">Johnathan Doe</h3> <small>Web Designer</small>
                        <address>
                            795 Folsom Ave, Suite 600 San Francisco, CADGE 94107
                            <br/>
                            <br/>
                            <abbr title="Phone">P:</abbr> (123) 456-7890
                        </address>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.col -->
        <!-- .col -->
        <div class="col-md-6 col-lg-6 col-xlg-4">
            <div class="card card-body">
                <div class="row">
                    <div class="col-md-4 col-lg-3 text-center">
                        <a href="app-contact-detail.html"><img src="../assets/images/users/4.jpg" alt="user" class="img-circle img-responsive"></a>
                    </div>
                    <div class="col-md-8 col-lg-9">
                        <h3 class="box-title m-b-0">Johnathan Doe</h3> <small>Web Designer</small>
                        <address>
                            795 Folsom Ave, Suite 600 San Francisco, CADGE 94107
                            <br/>
                            <br/>
                            <abbr title="Phone">P:</abbr> (123) 456-7890
                        </address>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.col -->
        
    </div>
</div>
{{--  End Container fluid   --}}

@endsection