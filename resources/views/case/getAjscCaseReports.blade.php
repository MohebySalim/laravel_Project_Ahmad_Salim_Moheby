@extends('layouts.master')
{{--@section('head')--}}
{{--    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />--}}
{{--@endsection--}}
@section('content')
    <div class="page-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3"><a href="{{ route('home') }}">{{__('home') }}</a></div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><a href="{{ route('home') }}"><i class="bx bx-home-alt"></i></a></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{__('caseReports') }}</li>
                    </ol>
                </nav>
            </div>
        </div>
        @include('includes.message')
        <!-- Details -->
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">{{__('caseReports') }}</h6>
                <hr>

                <div class="float-end">
                    <a href="{{ route('getCaseList') }}" class="btn btn-primary" >{{__('reset') }}</a>
                    <a href="{{ route('meidaExport') }}" class="btn btn-primary" >{{__('export') }}</a>
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

{{--                                            <a class="ms-1 reset-pass" data-bs-toggle="modal" data-bs-target="#editModal" onclick="editModal({{ $item }})">--}}
{{--                                                <i class="fadeIn animated bx bx-edit"></i>--}}
{{--                                            </a>--}}

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
                    {{ $results->withQueryString()->links("pagination::bootstrap-4")}}
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModal" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="editModal">{{__('editCases') }}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="edit-case-form" method="post" enctype="multipart/form-data" autocomplete="off">
                        @csrf
                        @method('PUT')
                        <div class="form-group p-4 row">
                            <div class="col-md-4">
                                <lable>{{__('zones') }}</lable>
                                <select class="form-select edit-zoneid" name="zone_id" id="zoneId" onchange="bringRelatedProvinces()" required>
                                    <option selected disabled value="">...</option>
                                    @foreach($zones as $zone)
                                        <option value="{{ $zone->id }}">{{ $zone->code }} - {{ (app()->getLocale() === 'dr') ? $zone->zone_dr :
                                                            ((app()->getLocale() === 'ps') ? $zone->zone_ps :
                                                            ((app()->getLocale() === 'en') ? $zone->zone_en : '')) }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <lable>{{__('provinces') }}</lable>
                                <select class="form-select edit-provinceid" name="province_id" id="provinceId" onchange="bringRelatedDistrict()" required>
                                    <option selected disabled value="">...</option>
                                    @foreach($provinces as $province)
                                        <option value="{{ $province->id }}">{{ $province->code }} - {{ (app()->getLocale() === 'dr') ? $province->name_dr :
                                                            ((app()->getLocale() === 'ps') ? $province->name_ps :
                                                            ((app()->getLocale() === 'en') ? $province->name_en : '')) }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <lable>{{__('districts') }}</lable>
                                <select class="form-select edit-districtid" name="district_id" id="districtId" required>
                                    <option selected disabled value="">...</option>
                                    @foreach($districts as $district)
                                        <option value="{{ $district->id }}">{{ $district->code }} - {{ (app()->getLocale() === 'dr') ? $district->name_dr :
                                                            ((app()->getLocale() === 'ps') ? $district->name_ps :
                                                            ((app()->getLocale() === 'en') ? $district->name_en : '')) }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <lable>{{__('medias') }}</lable>
                                <select class="form-select" name="media_id[]" id="edit-mediaId" multiple="multiple" required>
                                    <option selected disabled value="">...</option>
                                    @foreach($medias as $media)
                                        {{--                                                        <option value="{{ $media->id }}">{{ $media->code }} - {{ $media->zone_dr }}</option>--}}
                                        <option value="{{ $media->id }}">{{ $media->code }} - {{ (app()->getLocale() === 'dr') ? $media->name_dr :
                                                            ((app()->getLocale() === 'ps') ? $media->name_ps :
                                                            ((app()->getLocale() === 'en') ? $media->name_en : '')) }}
                                        </option>

                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <lable>{{__('occupations') }}</lable>
                                <select class="form-select" name="occupation_id[]" id="edit-occupationId" multiple="multiple" required>
                                    <option selected disabled value="">...</option>
                                    @foreach($occupations as $occupation)
                                        <option value="{{ $occupation->id }}">{{ $occupation->code }} - {{ (app()->getLocale() === 'dr') ? $occupation->name_dr :
                                                            ((app()->getLocale() === 'ps') ? $occupation->name_ps :
                                                            ((app()->getLocale() === 'en') ? $occupation->name_en : '')) }}
                                        </option>

                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <lable>{{__('perpetrators') }}</lable>
                                <select class="form-select" name="perpetrator_id[]" id="edit-perpetratorId" multiple="multiple" required>
                                    <option selected disabled value="">...</option>
                                    @foreach($perpetrators as $perpetrator)
                                        <option value="{{ $perpetrator->id }}">{{ $perpetrator->code }} - {{ (app()->getLocale() === 'dr') ? $perpetrator->name_dr :
                                                            ((app()->getLocale() === 'ps') ? $perpetrator->name_ps :
                                                            ((app()->getLocale() === 'en') ? $perpetrator->name_en : '')) }}
                                        </option>

                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <lable>{{__('complaint') }}</lable>
                                <select class="form-select" name="complaint_id[]" id="edit-complaintId" multiple="multiple" required>
                                    <option selected disabled value="">...</option>
                                    @foreach($complaints as $complaint)
                                        <option value="{{ $complaint->id }}">{{ $complaint->code }} - {{ (app()->getLocale() === 'dr') ? $complaint->name_dr :
                                                            ((app()->getLocale() === 'ps') ? $complaint->name_ps :
                                                            ((app()->getLocale() === 'en') ? $complaint->name_en : '')) }}
                                        </option>

                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-8">
                                <lable>{{__('violences') }}</lable>
                                <select class="form-select" name="violence_id[]" id="edit-violenceId" multiple="multiple" required>
                                    <option selected disabled value="">...</option>
                                    @foreach($violences as $violence)
                                        <option value="{{ $violence->id }}">{{ $violence->code }} - {{ (app()->getLocale() === 'dr') ? $violence->name_dr :
                                                            ((app()->getLocale() === 'ps') ? $violence->name_ps :
                                                            ((app()->getLocale() === 'en') ? $violence->name_en : '')) }}
                                        </option>

                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <lable>{{__('name_dr') }}</lable>
                                <input type="text" class="form-control" name="name_dr" id="edit-name_dr" required>
                            </div>
                            <div class="col-md-4">
                                <lable>{{__('name_ps') }}</lable>
                                <input type="text" class="form-control" name="name_ps" id="edit-name_ps" required>
                            </div>
                            <div class="col-md-4">
                                <lable>{{__('name_ps') }}</lable>
                                <input type="text" class="form-control" name="name_en" id="edit-name_en" required>
                            </div>
                            <div class="col-md-4">
                                <lable>{{__('phone') }}</lable>
                                <input type="text" class="form-control" name="phone" id="edit-phone" required>
                            </div>
                            <div class="col-md-4">
                                <lable>{{__('email') }}</lable>
                                <input type="text" class="form-control" name="email" id="edit-email" required>
                            </div>
                            <div class="col-md-4">
                                <lable>{{__('date') }}</lable>
                                <input type="date" class="form-control" name="date" id="edit-date" required>
                            </div>
                            <div class="col-md-8">
                                <lable>{{__('description') }}</lable>
                                <textarea class="form-control" name="description" id="edit-description" required></textarea>
                            </div>
                            <div class="col-md-4">
                                <lable>{{__('file') }}</lable>
                                <input type="hidden" class="form-control" name="oldcase_file" id="edit-oldcase_file" required>
                                <input type="file" class="form-control" name="case_file">
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
    </div>
@endsection
@section('footer')
{{--    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>--}}
    <script>

        // $(document).ready(function() {
        //     // $('.js-example-basic-single').select2();
        //     $(".js-example-basic-multiple").select2();
        // });
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

            console.log(item)
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
@show

