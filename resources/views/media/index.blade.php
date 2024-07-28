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
                        <li class="breadcrumb-item active" aria-current="page">{{__('medias') }}</li>
                    </ol>
                </nav>
            </div>
        </div>
        @include('includes.message')
        <!-- Details -->
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">{{__('medias') }}</h6>
                <hr>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <form action="{{ route('medias.store') }}" method="post" enctype="multipart/form-data" autocomplete="off" class="needs-validation" novalidate>
                        @csrf
                        <div class="form-group p-4 row">
                            <div class="col-md-3">
                                <div class="form-floating">
                                    <label class="label">{{__('code') }}</label>
                                    <input type="text" class="form-control" name="code" required>
                                    <div class="invalid-feedback">
                                        The field is required.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-floating">
                                    <label class="label">{{__('name_dr') }}</label>
                                    <input type="text" class="form-control" name="name_dr" required>
                                    <div class="invalid-feedback">
                                        The field is required.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-floating">
                                    <label class="label">{{__('name_ps') }}</label>
                                    <input type="text" class="form-control" name="name_ps" required>
                                    <div class="invalid-feedback">
                                        The field is required.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-floating">
                                    <label class="label">{{__('name_en') }}</label>
                                    <input type="text" class="form-control" name="name_en" required>
                                    <div class="invalid-feedback">
                                        The field is required.
                                    </div>
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
                                <a href="{{ route('medias.index') }}" class="btn btn-primary" ><i class="bx bx-reset"></i><span class="tooltiptext2">{{__('reset') }}</span></a>
                            </div>
                        @endif
                        <div class="tooltip1">
                            <a href="{{ route('meidaExport') }}" class="btn btn-primary" ><i class="bx bx-export"></i><span class="tooltiptext2">{{__('export') }}</span></a>
                        </div>
                    </div>
                    

                    <form action="{{ route('medias.index') }}" method="get" autocomplete="off">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 mb-2">
                                <div class="input-group">
                                    <input type="text" class="form-control search-control" name="search" placeholder="Type Media Code and enter..." required><span class="position-absolute top-50 search-show translate-middle-y"><i class="bx bx-search"></i></span>
                                    <span class="position-absolute top-50 search-close translate-middle-y"><i class="bx bx-x"></i></span>
                                    <button class="btn btn-primary btn-search">
                                        <i class="bx bx-search"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <table id="datatablesSimple" class="table align-middle mb-0 text-center">
                    <thead class="table-light">
                    <tr>
                        <th>{{__('code') }}</th>
                        <th>{{__('name_dr') }}</th>
                        <th>{{__('name_ps') }}</th>
                        <th>{{__('name_en') }}</th>
                        <th>{{__('uactions') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($zones as $item)
                        <tr>
                            <td>{{ $item->code }}</td>
                            <td>{{ $item->name_dr }}</td>
                            <td>{{ $item->name_ps }}</td>
                            <td>{{ $item->name_en }}</td>
                            <td>

                                <div class="d-flex justify-content-center order-actions">
                                    <a class="ms-1 reset-pass" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $item->id }}">
                                        <i class="fadeIn animated bx bx-edit"></i>
                                    </a>

                                    <form id="delete-form-{{ $item->id }}" method="post" action="{{ route('medias.destroy', $item->id) }}" style="display: none;">
                                        @csrf
                                        @method('delete') <!-- Corrected to 'delete' -->
                                    </form>

                                    <a href="" class="ms-1 btn-reject" onclick="
                                            if(confirm('Are you sure, You Want to Delete this?'))
                                            {
                                                event.preventDefault();
                                                document.getElementById('delete-form-{{ $item->id }}').submit();
                                            }
                                            else{
                                                event.preventDefault();
                                            }"><i class="fadeIn animated bx bx-trash-alt"></i></a>
                                </div>
                            </td>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">{{__('editMedia') }}</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('medias.update', $item->id) }}" method="post" enctype="multipart/form-data" autocomplete="off" class="needs-validation" novalidate>
                                                @csrf
                                                @method('PUT')
                                                <div class="form-group p-4 row">
                                                    <div class="col-md-3">
                                                        <div class="form-floating">
                                                            <label class="label">{{__('code') }}</label>
                                                            <input type="text" class="form-control" name="code" value="{{ $item->code }}" required>
                                                            <div class="invalid-feedback">
                                                                The field is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-floating">
                                                            <label class="label">{{__('name_dr') }}</label>
                                                            <input type="text" class="form-control" name="name_dr" value="{{ $item->name_dr }}" required>
                                                            <div class="invalid-feedback">
                                                                The field is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-floating">
                                                            <label class="label">{{__('name_ps') }}</label>
                                                            <input type="text" class="form-control" name="name_ps" value="{{ $item->name_ps }}" required>
                                                            <div class="invalid-feedback">
                                                                The field is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-floating">
                                                            <label class="label">{{__('name_en') }}</label>
                                                            <input type="text" class="form-control" name="name_en" value="{{ $item->name_en }}" required>
                                                            <div class="invalid-feedback">
                                                                The field is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                {{--                                            </div>--}}
                                                <div class="modal-footer">
                                                    <div class="text-center">
                                                        <button type="submit" class="btn btn-primary">{{__('save')}}</button>
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
                    {{ $zones->links("pagination::bootstrap-4")}}
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
