@extends('adminlte::page')

<?php
//dd($data["urls"]["fetchUrl"]);
if(!isset($page_title) || $page_title == "")
{
    $page_title = "Dashboard";
}
?>

@section('title', $page_title)

@section('css')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('academic/css/academic.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/magicsuggest/magicsuggest-min.css') }}" rel="stylesheet">
    @yield('page_css')
@endsection

@section('js')
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.form.min.js') }}"></script>
    <script src="{{ asset('academic/js/academic.js') }}"></script>
    <script src="{{ asset('assets/plugins/magicsuggest/magicsuggest-min.js') }}"></script>
    @yield('page_js')
@endsection

@section('content_header')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body p-3">
                    <h4 class="mb-0">Academic Operation Management</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card mb-0">
                <div class="card-body p-0">
                    <nav class="navbar navbar-expand navbar-white navbar-light">
                        <!-- Left navbar links -->
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#" role="button"><i class="fas fa-bars"></i></a>
                            </li>
                            <li class="nav-item d-none d-sm-inline-block">
                                <a href="/academic/manager" class="nav-link">Academic Manager</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Faculties
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/academic/faculty/create">Add New Faculties</a>
                                    <a class="dropdown-item" href="/academic/faculty">List Faculties</a>
                                    <a class="dropdown-item" href="/academic/faculty/trash">List Faculties in Trash</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Departments
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="/academic/department/create">Add New Departments</a>
                                    <a class="dropdown-item" href="/academic/department">List Departments</a>
                                    <a class="dropdown-item" href="/academic/department/trash">List Departments in Trash</a>
                                </div>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    @yield('page_header')
@endsection

@section('content')
    @yield('page_content')
@endsection