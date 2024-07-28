<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--favicon-->
    <link rel="icon" href="{{ asset('/assets/endashboard/assets/images/favicon-32x32.png') }}" type="image/png" />
    <!--plugins-->
    <link href="{{ asset('/assets/endashboard/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="{{ asset('/assets/endashboard/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/endashboard/assets/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('/assets/endashboard/assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/assets/endashboard/assets/css/icons.css') }}" rel="stylesheet">

    @if(session('locale') == 'en')
    @else
        <link href="{{ asset('/assets/endashboard/assets/css/rtl.css') }}" rel="stylesheet">
    @endif


    <title>Case Application and Registration System (CARS)</title>
    @section('header')
    @show
</head>
<body>
<div class="wrapper">
    <!--sidebar wrapper -->
@include('layouts.navbar')
<!--end sidebar wrapper -->
    <!--start header -->
    <header>
        <div class="topbar d-flex align-items-center">
            <nav class="navbar navbar-expand">
                <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
                </div>
                <div class="search-bar flex-grow-1">
                    <div class="position-relative search-bar-box">
                        <input type="text" class="form-control search-control" placeholder="Type to search..."> <span class="position-absolute top-50 search-show translate-middle-y"><i class='bx bx-search'></i></span>
                        <span class="position-absolute top-50 search-close translate-middle-y"><i class='bx bx-x'></i></span>
                    </div>
                </div>
                <div class="top-menu ms-auto">
                    <ul class="navbar-nav align-items-center">
                        <li class="nav-item mobile-search-icon">
                            <a class="nav-link" href="#"><i class='bx bx-search'></i>
                            </a>
                        </li>
                        {{--                        <li class="nav-item ">1</li>--}}
                        {{--                        <li class="nav-item ">2</li>--}}
                        @include('partials.language_switcher')
                        @if(Auth::user()->unreadNotifications->count())
                            <li class="nav-item dropdown dropdown-large">
                                <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="alert-count">{{ Auth::user()->unreadNotifications->count() }}</span>
                                    <i class='bx bx-bell'></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end">
                                    <a href="javascript:;">
                                        <div class="msg-header">
                                            <p class="msg-header-title">{{__('Notifications')}}</p>
                                            {{--                                        <p class="msg-header-clear ms-auto">Marks all as read</p>--}}
                                        </div>
                                    </a>

                                    <div class="header-notifications-list">
                                        @foreach(auth()->user()->unreadNotifications as $notification)
                                            <div class="alert">
                                                {{ $notification->data['name'] }} ({{ date('d-m-y', strtotime($notification->created_at)) }})
                                                <a href="{{ route('markAsRead') }}" class="float-right mark-as-read">
                                                    Mark as read
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                    <a href="{{ route('UserAllNotifications') }}">
                                        <div class="text-center msg-footer">View All Notifications</div>
                                    </a>
                                </div>
                            </li>
                        @endif
                    </ul>
                </div>
                <div class="user-box dropdown">
                    <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('/images/profile') }}/{{ auth()->user()->profile }}" class="user-img" alt="user avatar">
                        <div class="user-info ps-3">
                            <p class="user-name mb-0">{{ auth()->user()->name }}</p>
                            <p class="designattion mb-0">{{ auth()->user()->job }}</p>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item" href="{{ route('MyProfile') }}"><i class="bx bx-user"></i><span>Profile</span></a>
                        </li>
                        <li>
                            <div class="dropdown-divider mb-0"></div>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                <i class='bx bx-log-out-circle'></i><span>Logout</span>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!--end header -->
    <!--start page wrapper -->
    <div class="page-wrapper">
        @yield('content')
    </div>
    <!--end page wrapper -->
    <!--start overlay-->
    <div class="overlay toggle-icon"></div>
    <!--end overlay-->
    <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->
    <footer class="page-footer">
        <p class="mb-0">Copyright © 2021. All right reserved.</p>
    </footer>
</div>
<!--end wrapper-->
@include('layouts.footer')

</body>

</html>