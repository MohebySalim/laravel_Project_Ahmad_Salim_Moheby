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
                        <li class="breadcrumb-item active" aria-current="page">{{__('cases') }}</li>
                    </ol>
                </nav>
            </div>
        </div>
        @include('includes.message')
        <!-- Details -->
        <div class="card">
    
            <div class="card-body">
                <h6 class="card-title">{{__('cases') }}</h6>
                <hr>
                
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="float-end d-flex">

                        @if(request('search'))
                            <a href="{{ route('medias.index') }}" class="btn btn-primary" >{{__('reset') }}</a>
                        @endif
                        <div class="tooltip1 me-1 ms-1">
                            <button class="btn btn-primary " type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                            <i class="bx bx-search"></i> <span class="tooltiptext2"> {{__('advancedSearch') }}</span>
                            </button>
                        </div>
                        <div class="tooltip1">
                            <a href="#" class="btn btn-primary btn-add" data-bs-toggle="modal" data-bs-target="#zoneModal"><i class="bx bx-plus-circle"></i><span class="tooltiptext2"> {{__('createCases') }}</span></a>
                        </div>
                    </div>
                    
                    <div class="modal fade" id="zoneModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-xl modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title" id="exampleModalLabel">{{__('createCases') }}</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form action="{{ route('storeAjscCase') }}" method="post" enctype="multipart/form-data" autocomplete="off" class="needs-validation" novalidate>
                                        @csrf
                                        <div class="form-group p-4 row" id="body-train">
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <label class="label">{{__('zones') }}</label>
                                                    <select class="form-control sl1" name="zone_id" style="width: 100%" id="zoneId" onchange="bringRelatedProvinces()" required>
                                                        <option selected disabled value="">...</option>
                                                        @foreach($zones as $zone)
                                                            <option value="{{ $zone->id }}">{{ $zone->code }} - {{ (app()->getLocale() === 'dr') ? $zone->zone_dr :
                                                            ((app()->getLocale() === 'ps') ? $zone->zone_ps :
                                                            ((app()->getLocale() === 'en') ? $zone->zone_en : '')) }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="invalid-feedback">
                                                    The field is required.
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <label class="label">{{__('provinces') }}</label>
                                                    <select class="form-select sl1" name="province_id" style="width: 100%" id="provinceId" onchange="bringRelatedDistrict()" required>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        The field is required.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <label class="label">{{__('districts') }}</label>
                                                    <select class="form-select sl1" name="district_id"  style="width: 100%" id="districtId" required>
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        The field is required.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <label class="label">{{__('medias') }}</label>
                                                    <select class="form-select sl1" name="media_id[]" style="width: 100%" multiple="multiple" required>
                                        {{--          <option selected disabled value="">...</option>--}}
                                                        @foreach($medias as $media)
                                                            <option value="{{ $media->id }}">{{ $media->code }} - {{ (app()->getLocale() === 'dr') ? $media->name_dr :
                                                                ((app()->getLocale() === 'ps') ? $media->name_ps :
                                                                ((app()->getLocale() === 'en') ? $media->name_en : '')) }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        The field is required.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <label class="label">{{__('occupations') }}</label>
                                                    <select class="form-select sl1" name="occupation_id[]" style="width: 100%" multiple="multiple" required>
                                                    {{--                <option selected disabled value="">...</option>--}}
                                                        @foreach($occupations as $occupation)
                                                            <option value="{{ $occupation->id }}">{{ $occupation->code }} - {{ (app()->getLocale() === 'dr') ? $occupation->name_dr :
                                                                ((app()->getLocale() === 'ps') ? $occupation->name_ps :
                                                                ((app()->getLocale() === 'en') ? $occupation->name_en : '')) }}
                                                            </option>

                                                        @endforeach
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        The field is required.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <label class="label">{{__('perpetrators') }}</label>
                                                    <select class="form-select sl1" name="perpetrator_id[]" style="width: 100%" multiple="multiple" required>
                                                        {{--   <option selected disabled value="">...</option>--}}
                                                        @foreach($perpetrators as $perpetrator)
                                                            <option value="{{ $perpetrator->id }}">{{ $perpetrator->code }} - {{ (app()->getLocale() === 'dr') ? $perpetrator->name_dr :
                                                                ((app()->getLocale() === 'ps') ? $perpetrator->name_ps :
                                                                ((app()->getLocale() === 'en') ? $perpetrator->name_en : '')) }}
                                                            </option>

                                                        @endforeach
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        The field is required.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <label class="label">{{__('complaint') }}</label>
                                                    <select class="form-select sl1" name="complaint_id[]" style="width: 100%" multiple="multiple" required>
                                                        {{--   <option selected disabled value="">...</option>--}}
                                                        @foreach($complaints as $complaint)
                                                            <option value="{{ $complaint->id }}">{{ $complaint->code }} - {{ (app()->getLocale() === 'dr') ? $complaint->name_dr :
                                                                ((app()->getLocale() === 'ps') ? $complaint->name_ps :
                                                                ((app()->getLocale() === 'en') ? $complaint->name_en : '')) }}
                                                            </option>

                                                        @endforeach
                                                    </select>
                                                    <div class="invalid-feedback">
                                                        The field is required.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <label class="label">{{__('violences') }}</label>
                                                    <select class="form-select sl1" name="violence_id[]" style="width: 100%" multiple="multiple" required>
                                                        {{--  <option selected disabled value="">...</option>--}}
                                                        @foreach($violences as $violence)
                                                            <option value="{{ $violence->id }}">{{ $violence->code }} - {{ (app()->getLocale() === 'dr') ? $violence->name_dr :
                                                                ((app()->getLocale() === 'ps') ? $violence->name_ps :
                                                                ((app()->getLocale() === 'en') ? $violence->name_en : '')) }}
                                                            </option>

                                                        @endforeach
                                                    </select>
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
                                                    <label class="label">{{__('name_ps') }}</label>
                                                    <input type="text" class="form-control" name="name_en" required>
                                                    <div class="invalid-feedback">
                                                        The field is required.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <label class="label">{{__('phone') }}</label>
                                                    <input type="text" class="form-control" name="phone" required>
                                                    <div class="invalid-feedback">
                                                        The field is required.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <label class="label">{{__('email') }}</label>
                                                    <input type="text" class="form-control" name="email" required>
                                                    <div class="invalid-feedback">
                                                        The field is required.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <label class="label">{{__('date') }}</label>
                                                    <input type="date" class="form-control" name="date" required>
                                                    <div class="invalid-feedback">
                                                        The field is required.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <label class="label">{{__('file') }}</label>
                                                    <input type="file" class="form-control" name="case_file" required>
                                                    <div class="invalid-feedback">
                                                        The field is required.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-floating">
                                                    <label class="label">{{__('oldCase') }}</label>
                                                    <select class="form-select sl1"  style="width: 100%" name="previous_id">
                                                        <option selected disabled value="">...</option>
                                                        @foreach($previous as $prev)
                                                            <option value="{{ $prev->id }}">{{ (app()->getLocale() === 'dr') ? $prev->name_dr :
                                                                ((app()->getLocale() === 'ps') ? $prev->name_ps :
                                                                ((app()->getLocale() === 'en') ? $prev->name_en : '')) }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-floating">
                                                    <label class="label">{{__('description') }}</label>
                                                    <textarea class="form-control" name="description" required></textarea>
                                                    <div class="invalid-feedback">
                                                        The field is required.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                </div>
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

                    <form action="{{ route('getCaseList') }}" method="get" autocomplete="off">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 mb-2">
                                <div class="input-group">
                                    <input type="text" class="form-control search-control" name="search" placeholder="Type Name and enter..." required><span class="position-absolute top-50 search-show translate-middle-y"><i class="bx bx-search"></i></span>
                                    <span class="position-absolute top-50 search-close translate-middle-y"><i class="bx bx-x"></i></span>
                                    <button class="btn btn-primary btn-search">
                                        <i class="bx bx-search"></i>
                                    </button>
                                   
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

                <div class="collapse" id="collapseExample">
                    <div class="s-card">
                        <form action="{{ route('getAjscCaseReports') }}" method="get" autocomplete="off">
                            @csrf
                            <div class="form-group row" id="body-search">
                                <div class="col-md-3">
                                    <div class="form-floating">
                                        <label class="label">{{__('zones') }}</label>
                                        <select class="form-select sl3" style="width: 100%" name="zone_id[]" id="zone" multiple>
    {{--                                        <option selected disabled value="">...</option>--}}
                                            @foreach($zones as $zone)
                                                <option value="{{ $zone->id }}">{{ $zone->code }} - {{ (app()->getLocale() === 'dr') ? $zone->zone_dr :
                                                ((app()->getLocale() === 'ps') ? $zone->zone_ps :
                                                ((app()->getLocale() === 'en') ? $zone->zone_en : '')) }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-floating">
                                        <label class="label">{{__('provinces') }}</label>
                                        <select class="form-select province sl3" style="width: 100%" name="province_id[]" id="provinceId" onchange="bringRelatedDistrict()" multiple>
    {{--                                        <option selected disabled value="">...</option>--}}
                                            @foreach($provinces as $province)
                                                <option value="{{ $province->id }}">{{ $province->code }} - {{ (app()->getLocale() === 'dr') ? $province->name_dr :
                                                ((app()->getLocale() === 'ps') ? $province->name_ps :
                                                ((app()->getLocale() === 'en') ? $province->name_en : '')) }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-floating">
                                        <label class="label">{{__('districts') }}</label>
                                        <select class="form-select district sl3" style="width: 100%" name="district_id[]" id="districtId" multiple>
    {{--                                        <option selected disabled value="">...</option>--}}
                                            @foreach($districts as $district)
                                                <option value="{{ $district->id }}">{{ $district->code }} - {{ (app()->getLocale() === 'dr') ? $district->name_dr :
                                                                ((app()->getLocale() === 'ps') ? $district->name_ps :
                                                                ((app()->getLocale() === 'en') ? $district->name_en : '')) }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-floating">
                                        <label class="label">{{__('medias') }}</label>
                                        <select class="form-select media sl3" style="width: 100%" name="media_id[]" multiple="multiple">
    {{--                                        <option selected disabled value="">...</option>--}}
                                            @foreach($medias as $media)
                                                <option value="{{ $media->id }}" {{ in_array($media->id, request('media_id', [])) ? 'selected' : '' }} >{{ $media->code }} - {{ (app()->getLocale() === 'dr') ? $media->name_dr :
                                                                ((app()->getLocale() === 'ps') ? $media->name_ps :
                                                                ((app()->getLocale() === 'en') ? $media->name_en : '')) }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-floating">
                                        <label class="label">{{__('occupations') }}</label>
                                        <select class="form-select  sl3" style="width: 100%" name="occupation_id[]" multiple="multiple">
    {{--                                        <option selected disabled value="">...</option>--}}
                                            @foreach($occupations as $occupation)
                                                <option value="{{ $occupation->id }}" {{ in_array($occupation->id, request('occupation_id', [])) ? 'selected' : '' }} >{{ $occupation->code }} - {{ (app()->getLocale() === 'dr') ? $occupation->name_dr :
                                                                ((app()->getLocale() === 'ps') ? $occupation->name_ps :
                                                                ((app()->getLocale() === 'en') ? $occupation->name_en : '')) }}
                                                </option>

                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-floating">
                                        <label class="label">{{__('perpetrators') }}</label>
                                        <select class="form-select  sl3" style="width: 100%" name="perpetrator_id[]" multiple="multiple">
    {{--                                        <option selected disabled value="">...</option>--}}
                                            @foreach($perpetrators as $perpetrator)
                                                <option value="{{ $perpetrator->id }}" {{ in_array($perpetrator->id, request('perpetrator_id', [])) ? 'selected' : '' }} >{{ $perpetrator->code }} - {{ (app()->getLocale() === 'dr') ? $perpetrator->name_dr :
                                                                ((app()->getLocale() === 'ps') ? $perpetrator->name_ps :
                                                                ((app()->getLocale() === 'en') ? $perpetrator->name_en : '')) }}
                                                </option>

                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-floating">
                                        <label class="label">{{__('complaint') }}</label>
                                        <select class="form-select  sl3" style="width: 100%" name="complaint_id[]" multiple="multiple">
    {{--                                        <option selected disabled value="">...</option>--}}
                                            @foreach($complaints as $complaint)
                                                <option value="{{ $complaint->id }}" {{ in_array($complaint->id, request('complaint_id', [])) ? 'selected' : '' }} >{{ $complaint->code }} - {{ (app()->getLocale() === 'dr') ? $complaint->name_dr :
                                                                ((app()->getLocale() === 'ps') ? $complaint->name_ps :
                                                                ((app()->getLocale() === 'en') ? $complaint->name_en : '')) }}
                                                </option>

                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-floating">
                                        <label class="label">{{__('violences') }}</label>
                                        <select class="form-select  sl3" style="width: 100%" name="violence_id[]" multiple="multiple">
    {{--                                        <option selected disabled value="">...</option>--}}
                                            @foreach($violences as $violence)
                                                <option value="{{ $violence->id }}" {{ in_array($violence->id, request('violence_id', [])) ? 'selected' : '' }} >{{ $violence->code }} - {{ (app()->getLocale() === 'dr') ? $violence->name_dr :
                                                                ((app()->getLocale() === 'ps') ? $violence->name_ps :
                                                                ((app()->getLocale() === 'en') ? $violence->name_en : '')) }}
                                                </option>

                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-floating">
                                        <label class="label">{{__('fromDate') }}</label>
                                        <input type="date" class="form-control fromDate" name="from_date" value="{{ request('from_date') }}">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-floating">
                                        <label class="label">{{__('toDate') }}</label>
                                        <input type="date" class="form-control endDate" name="to_date" value="{{ request('to_date') }}">
                                    </div>
                                </div>

                            </div>

                            <div class="pt-2 text-add">
                                <div class="tooltip1">
                                    <button type="submit" name="filter" class="btn btn-primary"><i class="bx bx-search"></i><span class="tooltiptext2">{{__('search')}}</span></button>
                                </div>
                                <div class="tooltip1">
                                    <a href="{{ route('getAjscCaseReports') }}" class="btn btn-primary"><i class="bx bx-reset"></i><span class="tooltiptext2">{{__('reset')}}</span></a>
                                </div>
                                <div class="tooltip1">
                                    <button type="submit" name="export" class="btn btn-primary"><i class="bx bx-export"></i><span class="tooltiptext2">{{__('export')}}</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>


                <table id="datatablesSimple" class="table align-middle mb-0 text-center">
                    <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>{{__('name_dr') }}</th>
                        <th>{{__('name_ps') }}</th>
                        <th>{{__('name_en') }}</th>
                        <th>{{__('phone') }}</th>
                        <th>{{__('email') }}</th>
                        <th>{{__('zones') }}</th>
                        <th>{{__('provinces') }}</th>
                        <th>{{__('districts') }}</th>
                        <th>{{__('uactions') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($results as $item)
                        <tr>
                            <td>{{ $loop->index +1 }}</td>
{{--                            <td>{{ (app()->getLocale() === 'dr') ? $item->name_dr :--}}
{{--                                                            ((app()->getLocale() === 'ps') ? $item->name_ps :--}}
{{--                                                            ((app()->getLocale() === 'en') ? $item->name_en : '')) }}</td>--}}
                            <td>{{ $item->name_dr }}</td>
                            <td>{{ $item->name_ps }}</td>
                            <td>{{ $item->name_en }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->zone->code }} - {{ $item->zone->zone_dr }}</td>
                            <td>{{ $item->province->code }} - {{ $item->province->name_dr }}</td>
                            <td>{{ $item->district->code }} - {{ $item->district->name_dr }}</td>
                            <td>

                                <div class="d-flex justify-content-center order-actions">
                                    <a href="{{ route('getCaseDetails', $item->id) }}" class="ms-1 btn-edit"><i class="fadeIn animated bx bx-show"></i></a>

                                    <a class="ms-1 reset-pass" data-bs-toggle="modal" data-bs-target="#editModal" onclick="editModal({{ $item }})">
                                        <i class="fadeIn animated bx bx-edit"></i>
                                    </a>

                                    <form id="delete-form-{{ $item->id }}" method="post" action="{{ route('getDestroyCase', $item->id) }}" style="display: none;">
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

    <!--Edit-->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModal" aria-hidden="true">
        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title" id="editModal">{{__('editCases') }}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="edit-case-form" method="post" enctype="multipart/form-data" autocomplete="off" class="needs-validation" novalidate>
                        @csrf
                        @method('PUT')
                        <div class="form-group p-4 row" id="body-edit">
                            <div class="col-md-3">
                                <div class="form-floating">
                                    <label class="label">{{__('zones') }}</label>
                                    <select class="form-select edit-zoneid sl2" style="width: 100%" name="zone_id" id="zoneId" onchange="bringRelatedProvinces()" required>
                                        <option selected disabled value="">...</option>
                                        @foreach($zones as $zone)
                                            <option value="{{ $zone->id }}">{{ $zone->code }} - {{ (app()->getLocale() === 'dr') ? $zone->zone_dr :
                                                                ((app()->getLocale() === 'ps') ? $zone->zone_ps :
                                                                ((app()->getLocale() === 'en') ? $zone->zone_en : '')) }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">
                                        The field is required.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-floating">
                                    <label class="label">{{__('provinces') }}</label>
                                    <select class="form-select edit-provinceid sl2" style="width: 100%" name="province_id" id="provinceId" onchange="bringRelatedDistrict()" required>
                                        <option selected disabled value="">...</option>
                                        @foreach($provinces as $province)
                                            <option value="{{ $province->id }}">{{ $province->code }} - {{ (app()->getLocale() === 'dr') ? $province->name_dr :
                                                                ((app()->getLocale() === 'ps') ? $province->name_ps :
                                                                ((app()->getLocale() === 'en') ? $province->name_en : '')) }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">
                                        The field is required.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-floating">
                                    <label class="label">{{__('districts') }}</label>
                                    <select class="form-select edit-districtid sl2" style="width: 100%" name="district_id" id="districtId" required>
                                        <option selected disabled value="">...</option>
                                        @foreach($districts as $district)
                                            <option value="{{ $district->id }}">{{ $district->code }} - {{ (app()->getLocale() === 'dr') ? $district->name_dr :
                                                                ((app()->getLocale() === 'ps') ? $district->name_ps :
                                                                ((app()->getLocale() === 'en') ? $district->name_en : '')) }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">
                                        The field is required.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-floating">
                                    <label class="label">{{__('medias') }}</label>
                                    <select class="form-select sl2" style="width: 100%" name="media_id[]" id="edit-mediaId" multiple="multiple" required>
    {{--                                    <option selected disabled value="">...</option>--}}
                                        @foreach($medias as $media)
                                            <option value="{{ $media->id }}">{{ $media->code }} - {{ (app()->getLocale() === 'dr') ? $media->name_dr :
                                                                ((app()->getLocale() === 'ps') ? $media->name_ps :
                                                                ((app()->getLocale() === 'en') ? $media->name_en : '')) }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">
                                        The field is required.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-floating">
                                    <label class="label">{{__('occupations') }}</label>
                                    <select class="form-select sl2" style="width: 100%" name="occupation_id[]" id="edit-occupationId" multiple="multiple" required>
    {{--                                    <option selected disabled value="">...</option>--}}
                                        @foreach($occupations as $occupation)
                                            <option value="{{ $occupation->id }}">{{ $occupation->code }} - {{ (app()->getLocale() === 'dr') ? $occupation->name_dr :
                                                                ((app()->getLocale() === 'ps') ? $occupation->name_ps :
                                                                ((app()->getLocale() === 'en') ? $occupation->name_en : '')) }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">
                                        The field is required.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-floating">
                                    <label class="label">{{__('perpetrators') }}</label>
                                    <select class="form-select sl2" style="width: 100%" name="perpetrator_id[]" id="edit-perpetratorId" multiple="multiple" required>
    {{--                                    <option selected disabled value="">...</option>--}}
                                        @foreach($perpetrators as $perpetrator)
                                            <option value="{{ $perpetrator->id }}">{{ $perpetrator->code }} - {{ (app()->getLocale() === 'dr') ? $perpetrator->name_dr :
                                                                ((app()->getLocale() === 'ps') ? $perpetrator->name_ps :
                                                                ((app()->getLocale() === 'en') ? $perpetrator->name_en : '')) }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">
                                        The field is required.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-floating">
                                    <label class="label">{{__('complaint') }}</label>
                                    <select class="form-select sl2" style="width: 100%" name="complaint_id[]" id="edit-complaintId" multiple="multiple" required>
                                    {{--    <option selected disabled value="">...</option>--}}
                                        @foreach($complaints as $complaint)
                                            <option value="{{ $complaint->id }}">{{ $complaint->code }} - {{ (app()->getLocale() === 'dr') ? $complaint->name_dr :
                                                                ((app()->getLocale() === 'ps') ? $complaint->name_ps :
                                                                ((app()->getLocale() === 'en') ? $complaint->name_en : '')) }}
                                            </option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">
                                        The field is required.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-floating">
                                    <label class="label">{{__('violences') }}</label>
                                    <select class="form-select sl2" style="width: 100%" name="violence_id[]" id="edit-violenceId" multiple="multiple" required>
                                        {{--<option selected disabled value="">...</option>--}}
                                        @foreach($violences as $violence)
                                            <option value="{{ $violence->id }}">{{ $violence->code }} - {{ (app()->getLocale() === 'dr') ? $violence->name_dr :
                                                                ((app()->getLocale() === 'ps') ? $violence->name_ps :
                                                                ((app()->getLocale() === 'en') ? $violence->name_en : '')) }}
                                            </option>

                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">
                                        The field is required.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-floating">
                                    <label class="label">{{__('name_dr') }}</label>
                                    <input type="text" class="form-control" name="name_dr" id="edit-name_dr" required>
                                    <div class="invalid-feedback">
                                        The field is required.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-floating">
                                    <label class="label">{{__('name_ps') }}</label>
                                    <input type="text" class="form-control" name="name_ps" id="edit-name_ps" required>
                                    <div class="invalid-feedback">
                                        The field is required.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-floating">
                                    <label class="label">{{__('name_ps') }}</label>
                                    <input type="text" class="form-control" name="name_en" id="edit-name_en" required>
                                    <div class="invalid-feedback">
                                        The field is required.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-floating">
                                    <label class="label">{{__('phone') }}</label>
                                    <input type="text" class="form-control" name="phone" id="edit-phone" required>
                                    <div class="invalid-feedback">
                                        The field is required.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-floating">
                                    <label class="label">{{__('email') }}</label>
                                    <input type="text" class="form-control" name="email" id="edit-email" required>
                                    <div class="invalid-feedback">
                                        The field is required.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-floating">
                                    <label class="label">{{__('date') }}</label>
                                    <input type="date" class="form-control" name="date" id="edit-date" required>
                                    <div class="invalid-feedback">
                                        The field is required.
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-floating">
                                    <label class="label">{{__('file') }}</label>
                                    <input type="hidden" class="form-control" name="oldcase_file" id="edit-oldcase_file">
                                    <input type="file" class="form-control" name="case_file">
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-floating">
                                    <label class="label">{{__('description') }}</label>
                                    <textarea class="form-control" name="description" id="edit-description" required></textarea>
                                    <div class="invalid-feedback">
                                        The field is required.
                                    </div>
                                </div>
                            </div>
                        </div>
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
    </div>
@endsection
@section('footer')

    <script>

        trigger = true;
        $(document).ready(function() {
            $('.js-example-basic-single').select2();
            $('.js-example-basic-multiple').select2();
            $(".sl1").select2({
                dropdownParent: $("#body-train")
            });
            $(".sl2").select2({
                dropdownParent: $("#body-edit")
            });
            $(".sl3").select2({
                dropdownParent: $("#body-search")
            });
        });

        $(document).ready(function() {
            $('.js-example-basic-single').select2();
        });

        function bringRelatedProvinces() {
            var zoneId = $('#zoneId').val();
            console.log(zoneId)
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ route('RelatedProvinces') }}",
                type: "post",
                data: '&zoneid=' + zoneId,
                success: function(r) {
                    console.log(r)
                    $('#provinceId').html(r);
                }
            });
        }
        function bringRelatedDistrict() {
            var provinceId = $('#provinceId').val();
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{ route('RelatedDistrict') }}",
                type: "post",
                data: '&proid=' + provinceId,
                success: function(r) {
                    console.log(r)
                    $('#districtId').html(r);
                }
            });
        }

        function editModal(item) {
            // console.log(item)
            $('#edit-name_dr').val(item.name_dr);
            $('#edit-name_ps').val(item.name_ps);
            $('#edit-name_en').val(item.name_en);
            $('#edit-phone').val(item.phone);
            $('#edit-email').val(item.email);
            $('#edit-date').val(item.date);
            $('#edit-description').val(item.description);
            $('#edit-oldcase_file').val(item.case_file);
            $('#edit-case-form').attr('action', '{{ route("updateAjscCase",'') }}'+"/"+item.id)
            $('.edit-zoneid').val(item.zone_id).trigger('change');
            $('.edit-provinceid').val(item.province_id).trigger('change');
            $('.edit-districtid').val(item.district_id).trigger('change');

            $('#edit-mediaId').val(item.medias.map(media => media.id)).trigger('change');
            $('#edit-occupationId').val(item.occupations.map(valu => valu.id)).trigger('change');
            $('#edit-perpetratorId').val(item.perpetrators.map(valu => valu.id)).trigger('change');
            $('#edit-complaintId').val(item.complaints.map(valu => valu.id)).trigger('change');
            $('#edit-violenceId').val(item.violences.map(valu => valu.id)).trigger('change');
        }
    </script>
@endsection

