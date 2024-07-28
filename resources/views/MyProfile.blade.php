@extends('layouts.master')

@section('content')
    <div class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3"><a href="{{ route('home') }}">Home</a></div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><a href="{{ route('home') }}"><i class="bx bx-home-alt"></i></a></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">Users</li>
                    </ol>
                </nav>
            </div>
        </div>
    @include('includes.message')
    <!-- Details -->
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">User List</h5>
                <hr>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="row">
                        <div class="col-md-6">
                            <form action="{{ route('UpdateMyProfile', $data->id) }}" method="post" enctype="multipart/form-data" autocomplete="off">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <lable>Name</lable>
                                    <input type="text" class="form-control" name="name" value="{{ $data->name }}" required>
                                </div>
                                <div class="form-group">
                                    <lable>Job</lable>
                                    <input type="text" class="form-control" name="job" value="{{ $data->job }}" required>
                                </div>
                                <div class="form-group">
                                    <lable>Email</lable>
                                    <input type="email" class="form-control" name="email" value="{{ $data->email }}" required>
                                </div>
                                <div class="form-group">
                                    <lable>Password</lable>
                                    <input type="password" class="form-control" name="password">
                                </div>
                                <div class="form-group">
                                    <lable>Conform Password</lable>
                                    <input type="password" class="form-control" name="password_confirmation">
                                </div>
                                <div class="form-group">
                                    <lable>Profile</lable>
                                    <input type="file" class="form-control" name="profile">
                                </div>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-title">
                                    <h5>Current Profile Picture</h5>
                                </div>
                                <div class="card-body">
                                    <img src="{{ asset('public/images/profile') }}/{{ auth()->user()->profile }}" height="190" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
