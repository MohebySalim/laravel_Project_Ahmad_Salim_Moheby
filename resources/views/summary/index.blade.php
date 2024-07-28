@extends('layouts.master')
@section('header')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@show
@section('content')
    <div class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3"><a href="{{ route('home') }}">{{__('home') }}</a></div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><a href="{{ route('home') }}"><i class="bx bx-home-alt"></i></a></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{__('caseSummary') }}</li>
                    </ol>
                </nav>
            </div>
        </div>
        @include('includes.message')
        <!-- Details -->
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">{{__('caseSummary') }}</h6>
                <hr>
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <form action="{{ route('addCaseSummary') }}" method="post" enctype="multipart/form-data" autocomplete="off" class="needs-validation" novalidate>
                        @csrf
                        <div class="form-group p-4 row" id="body-create">
                            <div class="col-md-4">
                                <div class="form-floating">
                                    <label class="label">{{__('cases') }}</label>
                                    <select class="form-control js-example-basic-single" name="case_id" required>
                                        <option selected disabled value="">...</option>
                                        @foreach($ajscCases->where('status', 0) as $ajsc)
                                            <option value="{{ $ajsc->id }}">{{ $ajsc->name_dr }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">
                                        The field is required.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating">
                                    <label class="label">{{__('pursuit') }}</label>
                                    <input type="text" class="form-control" name="pursuit" required>
                                    <div class="invalid-feedback">
                                        The field is required.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating">
                                    <label class="label">{{__('shortSummary') }}</label>
                                    <textarea class="form-control" name="shortsummary" required></textarea>
                                    <div class="invalid-feedback">
                                        The field is required.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating">
                                    <label class="label">{{__('status') }}</label>
                                    <select class="form-select" name="status" required>
                                        <option value="0">In process</option>
                                        <option value="1">Completed</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        The field is required.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-floating">
                                    <label class="label">{{__('file') }}</label>
                                    <input type="file" class="form-control" name="summary_file">
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
                            <a href="{{ route('getCaseSummary') }}" class="btn btn-primary" ><i class="bx bx-reset"></i><span class="tooltiptext2">{{__('reset') }}</span></a>
</div>
                        @endif
                        <div class="tooltip1">
                            <a href="{{ route('summaryExport') }}" class="btn btn-primary"><i class="bx bx-export"></i><span class="tooltiptext2">{{__('export') }}</span></a>
                        </div>
                    </div>

                    <form action="{{ route('getCaseSummary') }}" method="get" autocomplete="off">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 mb-2">
                                <div class="input-group">
                                    <input type="text" class="form-control search-control" name="search" placeholder="Type Violence Code and enter..." required><span class="position-absolute top-50 search-show translate-middle-y"><i class="bx bx-search"></i></span>
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
                        <th>#</th>
                        <th>{{__('cases') }}</th>
                        <th>{{__('pursuit') }}</th>
                        <th>{{__('summery') }}</th>
                        <th>{{__('file') }}</th>
                        <th>{{__('uactions') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($results as $item)
                        <tr>
                            <td>{{ $loop->index +1 }}</td>
                            <td>{{ $item->ajscCase->name_dr }}</td>
                            <td>{{ $item->pursuit }}</td>
                            <td>{{ $item->summery }}</td>
                            <td>
                                @if($item->summary_file)
                                    <a href="{{ asset('public/images/files/summary_file') }}/{{ $item->summary_file }}" target="_blank"><i class="fadeIn animated bx bx-file"></i></a>
                                @endif
                            </td>
                            <td>

                                <div class="d-flex justify-content-center order-actions">
                                    <a class="ms-1 reset-pass" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $item->id }}">
                                        <i class="fadeIn animated bx bx-edit"></i>
                                    </a>

                                    <form id="delete-form-{{ $item->id }}" method="post" action="{{ route('violences.destroy', $item->id) }}" style="display: none;">
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
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">{{__('editSummary') }}</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('UpdateCaseSummary', $item->id) }}" method="post" enctype="multipart/form-data" autocomplete="off" class="needs-validation" novalidate>
                                                @csrf
                                                @method('PUT')
                                                <div class="form-group p-4 row" id="body-edit">
                                                    <div class="col-md-4">
                                                        <div class="form-floating">
                                                            <label class="label">{{__('cases') }}</label>
                                                            <select class="form-select sl2" style="width: 100%;" name="case_id" required>
                                                                <option selected disabled value="">...</option>
                                                                @foreach($ajscCases as $ajsc)
                                                                    <option value="{{ $ajsc->id }}"
                                                                            @if($item->ajscCase->id == $ajsc->id)
                                                                                selected
                                                                        @endif
                                                                    >{{ $ajsc->name_dr }}</option>
                                                                @endforeach
                                                            </select>
                                                            <div class="invalid-feedback">The field is required.</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-floating">
                                                            <label class="label">{{__('pursuit') }}</label>
                                                            <input type="text" class="form-control" name="pursuit" value="{{ $item->pursuit }}" required>
                                                            <div class="invalid-feedback">
                                                                The field is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-floating">
                                                            <label class="label">{{__('shortSummary') }}</label>
                                                            <textarea class="form-control" name="shortsummary" required>{{ $item->summery }}</textarea>
                                                            <div class="invalid-feedback">
                                                                The field is required.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-floating">
                                                            <label class="label">{{__('status') }}</label>
                                                            <select class="form-select  sl2" style="width: 100%;"  name="status" id="edit-status" required>
                                                                <option value="0" @if($item->status == 0) selected @endif>In process</option>
                                                                <option value="1" @if($item->status == 1) selected @endif>Completed</option>
                                                            </select>
                                                            <div class="invalid-feedback">The field is required.</div>
                                                                
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-floating">
                                                            <label class="label">{{__('file') }}</label>
                                                            <input type="file" class="form-control" name="summary_file">
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
                    {{ $results->links("pagination::bootstrap-4")}}
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
@section('footer')
    <script>
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
            $('.js-example-basic-multiple').select2();
            $(".sl1").select2({
                dropdownParent: $("#body-create")
            });
            $(".sl2").select2({
                dropdownParent: $("#body-edit")
            });
        });
    </script>
@endsection


