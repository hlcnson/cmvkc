{{-- Sử dụng giao diện backend --}}
@extends('layouts.backend')

@section('styles')
    <link href="{{ asset('backend/plugins/bootstrap-table/dist/bootstrap-table.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

@section('content')
{{-- Bread crumb and right sidebar toggle  --}}
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">Quản trị hệ thống</h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javascript:void(0)">Trang chủ</a></li>
            <li class="breadcrumb-item active">Vai trò người dùng</li>
        </ol>
    </div>
    
</div>
{{--  End Bread crumb and right sidebar toggle  --}}


{{--  Container fluid   --}}
<div class="container-fluid">
    {{--  Start Page Content  --}}
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Info Table</h4>
                    <h6 class="card-subtitle">Add class <code>.color-table .info-table</code></h6>
                    {{-- <div class="table-responsive"> --}}
                        <table data-toggle="table" class="table color-table info-table" data-sort-name="stargazers_count" data-height="280" data-mobile-responsive="true" data-sort-order="desc">
                            <thead>
                                <tr>
                                    <th data-field="name" data-sortable="true"> Name </th>
                                    <th data-field="stargazers_count" data-sortable="true" data-width="100"> Stars </th>
                                    <th data-field="forks_count" data-sortable="true" data-width="100"> Forks </th>
                                    <th data-field="description" data-sortable="true"> Description </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Nigam</td>
                                    <td>Eichmann</td>
                                    <td>@Sonu</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Deshmukh</td>
                                    <td>Prohaska</td>
                                    <td>@Genelia</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Roshan</td>
                                    <td>Rogahn</td>
                                    <td>@Hritik</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Roshan</td>
                                    <td>Rogahn</td>
                                    <td>@Hritik</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Roshan</td>
                                    <td>Rogahn</td>
                                    <td>@Hritik</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Roshan</td>
                                    <td>Rogahn</td>
                                    <td>@Hritik</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Roshan</td>
                                    <td>Rogahn</td>
                                    <td>@Hritik</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Roshan</td>
                                    <td>Rogahn</td>
                                    <td>@Hritik</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Roshan</td>
                                    <td>Rogahn</td>
                                    <td>@Hritik</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Roshan</td>
                                    <td>Rogahn</td>
                                    <td>@Hritik</td>
                                </tr>
                            </tbody>
                        </table>
                    {{-- </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>
{{--  End Container fluid   --}}
@endsection

@section('script')
    <script src="{{ asset('backend/plugins/bootstrap-table/dist/bootstrap-table.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/bootstrap-table/dist/bootstrap-table.ints.js') }}"></script>
@endsection