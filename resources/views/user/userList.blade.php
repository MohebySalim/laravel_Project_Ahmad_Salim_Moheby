@extends('layouts.master')
@section('content')
    <div class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3"><a href="{{ route('home') }}">{{__('home') }}</a></div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><a href="{{ route('home') }}"><i class="bx bx-home-alt"></i></a></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{__('users') }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    @include('includes.message')
    <!-- Details -->
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">{{__('users') }}</h6>
                <hr>
                <div class="accordion accordion-flush mt-4 p-3" id="accordionFlushExample">

                    <form action="{{ route('StoreUser') }}" method="post" enctype="multipart/form-data" autocomplete="off" class="needs-validation" novalidate>
                        @csrf
                        <div class="form-group row">
                            <div class="col-md-3 mb-3">
                                <div class="form-floating">
                                    <label class="label">{{__('uname') }}</label>
                                    <input type="text" class="form-control" name="name" required>
                                    <div class="invalid-feedback">
                                        The field is required.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="form-floating">
                                    <label class="label">{{__('ujob') }}</label>
                                    <input type="text" class="form-control" name="job" required>
                                    <div class="invalid-feedback">
                                        The field is required.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="form-floating">
                                    <label class="label">{{__('uemail') }}</label>
                                    <input type="email" class="form-control" name="email" required>
                                    <div class="invalid-feedback">
                                        The field is required.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="form-floating">
                                    <label class="label">Password</label>
                                    <input type="password" class="form-control" name="password" required>
                                    <div class="invalid-feedback">
                                        The field is required.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="form-floating">
                                    <label class="label">Conform Password</label>
                                    <input type="password" class="form-control" name="password_confirmation" required>
                                    <div class="invalid-feedback">
                                        The field is required.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="form-floating form-control">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="is_admin" id="flexRadioDefault1" value="1">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            System Admin
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="form-floating form-control">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="is_admin" id="flexRadioDefault2" value="0" checked>
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            Employee
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 mb-3">
                                <div class="form-floating">
                                    <label class="label">Profile</label>
                                    <input type="file" class="form-control" name="profile">
                                </div>
                            </div>
                            <div class="text-add">
                                <div class="tooltip1">
                                    <button type="submit" class="btn btn-primary"><i class="bx bx-save"></i><span class="tooltiptext2">{{__('save')}}</span></button>
                                </div>
                            </div>
                        </div>
                        
                    </form>

                    <hr>

                    <div class="float-end">

                        @if(request('search'))
                            <div class="tooltip1">
                                <a href="{{ route('userList') }}" class="btn btn-primary" >{{__('reset') }}</a>
                            </div>
                        @endif

                        <div class="tooltip1">
                            <a href="#" class="btn btn-primary" ><i class="bx bx-export"></i><span class="tooltiptext2">{{__('export') }}</span></a>
                        </div>
                    </div>
                    <form action="{{ route('userList') }}" method="get" autocomplete="off">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 mb-2">
                                <div class="input-group">
                                    <input type="text" class="form-control search-control" name="search" placeholder="Type User Name and enter..." required><span class="position-absolute top-50 search-show translate-middle-y"><i class="bx bx-search"></i></span>
                                    <span class="position-absolute top-50 search-close translate-middle-y"><i class="bx bx-x"></i></span>
                                    <button class="btn btn-primary btn-search">
                                        <i class="bx bx-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <table id="datatablesSimple" class="table align-middle mb-0 text-center">
                        <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>{{__('uname') }}</th>
                            <th>{{__('ujob') }}</th>
                            <th>{{__('usertype') }}</th>
                            <th>{{__('uemail') }}</th>
                            <th>{{__('ustatus') }}</th>
                            <th>{{__('uactions') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->job }}</td>
                                <td>{{ $user->is_admin? 'System Admin':'Employee' }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->status? 'Active':'deactive' }}</td>
                                <td>
                                    <div class="d-flex justify-content-center order-actions">
                                    <!-- Button trigger modal -->
                                    <a class="ms-1 reset-pass" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $user->id }}">
                                       <i class="fadeIn animated bx bx-reset"></i>
                                    </a>
                                    </div>
                                    </td>
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal{{ $user->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-xl modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Reset Password</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
{{--                                                    <form action="{{ route('UpdatePassword', $user->id) }}" method="post" enctype="multipart/form-data" autocomplete="off">--}}
                                                    <form action="{{ route('UpdateUser', $user->id) }}" method="post" enctype="multipart/form-data" autocomplete="off" class="needs-validation" novalidate>
                                                        @csrf
                                                        @method('PUT')

                                                        <div class="form-group row">
                                                            <div class="col-md-3 mb-3">
                                                                <div class="form-floating">
                                                                    <label class="label">{{__('uname') }}</label>
                                                                    <input type="text" class="form-control" name="name" value="{{ $user->name }}" required>
                                                                    <div class="invalid-feedback">
                                                                        The field is required.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 mb-3">
                                                                <div class="form-floating">
                                                                    <label class="label">{{__('ujob') }}</label>
                                                                    <input type="text" class="form-control" name="job" value="{{ $user->job }}" required>
                                                                    <div class="invalid-feedback">
                                                                        The field is required.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                                <div class="col-md-3 mb-3">
                                                                <div class="form-floating">
                                                                    <label class="label">{{__('uemail') }}</label>
                                                                    <input type="email" class="form-control" name="email" value="{{ $user->email }}" required>
                                                                    <div class="invalid-feedback">
                                                                        The field is required.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-floating">
                                                                    <label class="label">Password</label>
                                                                    <input type="password" class="form-control" name="password">
                                                                    <div class="invalid-feedback">
                                                                        The field is required.
                                                                    </div>
                                                                </div>
                                                            </div>
{{--                                                            <div class="col-md-3">--}}
{{--                                                                <label class="label">Conform Password</label>--}}
{{--                                                                <input type="password" class="form-control" name="password_confirmation">--}}
{{--                                                                <div class="invalid-feedback">--}}
{{--                                                                    The field is required.--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
                                                            <div class="col-md-3 mb-3">
                                                                <div class="form-floating">
                                                                    <label class="label">Profile</label>
                                                                    <input type="file" class="form-control" name="profile">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 mb-3">
                                                                <div class="form-floating">
                                                                    <label class="label">{{__('ustatus') }}</label>
                                                                    <div class="checkbox">
                                                                        <label class="label"><input type="checkbox" name="status" @if(old('status') == 1 || $user->status == 1)
                                                                                checked
                                                                                    @endif value="1">Status</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3 mb-3">
                                                                <div class="form-floating">
                                                                    <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="is_admin" value="1" {{ ($user->is_admin=="1")? "checked":"" }}>
                                                                        <label class="form-check-label">
                                                                            System Admin
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="form-check">
                                                                    <div class="form-floating form-control">
                                                                        <input class="form-check-input" type="radio" name="is_admin" value="0" {{ ($user->is_admin=="0")? "checked":"" }}>
                                                                        <label class="form-check-label">
                                                                            Employee
                                                                        </label>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="modal-footer">
                                                        <div class="text-center">
                                                            <button type="submit" class="btn btn-primary">Save</button>
                                                        </div>
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="row justify-content-center align-items-center">
                        {{ $users->links("pagination::bootstrap-4")}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
