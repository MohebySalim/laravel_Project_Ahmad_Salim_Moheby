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
                        <li class="breadcrumb-item active" aria-current="page">{{__('showCases') }}</li>
                    </ol>
                </nav>
            </div>
        </div>
        @include('includes.message')
        <!-- Details -->
        <div class="card">
            <div class="card-body">
                <h6 class="card-title">{{__('showCases') }}</h6>
                <hr>
                <div class="accordion accordion-flush" id="accordionFlushExample">

                </div>
                <table id="datatablesSimple" class="table align-middle mb-0 text-center">
                    <thead class="table-light">
                    <tr>
                        <th>{{__('name_dr') }}</th>
                        <th>{{__('name_ps') }}</th>
                        <th>{{__('name_en') }}</th>
                    </tr>
                    <tr>
                        <td>{{ $data->name_dr }}</td>
                        <td>{{ $data->name_ps }}</td>
                        <td>{{ $data->name_en }}</td>
                    </tr>
                    <tr>
                        <th>{{__('phone') }}</th>
                        <th>{{__('email') }}</th>
                        <th>{{__('date') }}</th>
                    </tr>
                    <tr>
                        <td>{{ $data->phone }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->date }}</td>
                    </tr>
                    </thead>
                </table>
            </div>
            <hr>
            <div class="card-body">
                <h6 class="card-title">{{__('address') }}</h6>
                <hr>
                <div class="accordion accordion-flush" id="accordionFlushExample">

                </div>
                <table id="datatablesSimple" class="table align-middle mb-0 text-center">
                    <thead class="table-light">
                    <tr>
                        <th>{{__('zones') }}</th>
                        <th>{{__('provinces') }}</th>
                        <th>{{__('districts') }}</th>
                    </tr>
                    <tr>
                        <td>{{ (app()->getLocale() === 'dr') ? $data->zone->zone_dr :
                                                        ((app()->getLocale() === 'ps') ? $data->zone->zone_ps :
                                                        ((app()->getLocale() === 'en') ? $data->zone->zone_en : '')) }}</td>
                        <td>{{ (app()->getLocale() === 'dr') ? $data->province->name_dr :
                                                        ((app()->getLocale() === 'ps') ? $data->province->name_ps :
                                                        ((app()->getLocale() === 'en') ? $data->province->name_en : '')) }}</td>
                        <td>{{ (app()->getLocale() === 'dr') ? $data->district->name_dr :
                                                        ((app()->getLocale() === 'ps') ? $data->district->name_ps :
                                                        ((app()->getLocale() === 'en') ? $data->district->name_en : '')) }}</td>
                    </tr>
                    </thead>
                </table>
            </div>
            <hr>
            <div class="card-body">
                <h6 class="card-title">{{__('caseTypes') }}</h6>
                <hr>
                <div class="accordion accordion-flush" id="accordionFlushExample">

                </div>
                <table id="datatablesSimple" class="table align-middle mb-0 text-center">
                    <thead class="table-light">
                    <tr>
                        <th>{{__('complaints') }}</th>
                        <th>{{__('medias') }}</th>
                        <th>{{__('occupations') }}</th>
                    </tr>
                    <tr>
                        <td>@foreach($data->complaints as $index => $complaint)
                                {{ (app()->getLocale() === 'dr') ? $complaint->name_dr :
                                    ((app()->getLocale() === 'ps') ? $complaint->name_ps :
                                    ((app()->getLocale() === 'en') ? $complaint->name_en : '')) }}
                                @if (!$loop->last)
                                    -
                                @endif
                            @endforeach</td>
                        <td>@foreach($data->medias as $index => $media)
                                {{ (app()->getLocale() === 'dr') ? $media->name_dr :
                                    ((app()->getLocale() === 'ps') ? $media->name_ps :
                                    ((app()->getLocale() === 'en') ? $media->name_en : '')) }}
                                @if (!$loop->last)
                                    -
                                @endif
                            @endforeach</td>
                        <td>@foreach($data->occupations as $index => $occupation)
                                {{ (app()->getLocale() === 'dr') ? $occupation->name_dr :
                                    ((app()->getLocale() === 'ps') ? $occupation->name_ps :
                                    ((app()->getLocale() === 'en') ? $occupation->name_en : '')) }}
                                @if (!$loop->last)
                                    -
                                @endif
                            @endforeach</td>
                    </tr>
                    <tr>
                        <th>{{__('perpetrators') }}</th>
                        <th>{{__('violences') }}</th>
                    </tr>
                    <tr>
                        <td>@foreach($data->perpetrators as $index => $perpetrator)
                                {{ (app()->getLocale() === 'dr') ? $perpetrator->name_dr :
                                    ((app()->getLocale() === 'ps') ? $perpetrator->name_ps :
                                    ((app()->getLocale() === 'en') ? $perpetrator->name_en : '')) }}
                                @if (!$loop->last)
                                    -
                                @endif
                            @endforeach</td>
                        <td>@foreach($data->violences as $index => $violence)
                                {{ (app()->getLocale() === 'dr') ? $violence->name_dr :
                                    ((app()->getLocale() === 'ps') ? $violence->name_ps :
                                    ((app()->getLocale() === 'en') ? $violence->name_en : '')) }}
                                @if (!$loop->last)
                                    -
                                @endif
                            @endforeach</td>
                    </tr>
                    </thead>
                </table>
            </div>
            <hr>
            <div class="card-body">
                <h6 class="card-title">{{__('description') }}</h6>
                <hr>
                <div class="accordion accordion-flush" id="accordionFlushExample">

                </div>
                <table id="datatablesSimple" class="table align-middle mb-0 text-center">
                    <thead class="table-light">
                    <tr>
                        <th>{{__('description') }}</th>
                    </tr>
                    <tr>
                        <td>{{ $data->description }}</td>
                    </tr>
                    <tr>
                        <th>{{__('file') }}</th>
                    </tr>
                    <tr>
                        <td><a href="{{ asset('public/images/files/case_file') }}/{{ $data->case_file }}" target="_blank"><i class="fadeIn animated bx bx-file"></i></a></td>
                    </tr>
                    </thead>
                </table>
            </div>
            <hr>
            <div class="card-body">
                <h6 class="card-title">{{__('shortSummary') }}</h6>
                <hr>
                <div class="accordion accordion-flush" id="accordionFlushExample">

                </div>
                <table id="datatablesSimple" class="table align-middle mb-0 text-center">
                    <thead class="table-light">
                    <tr>
                        <th>#</th>
                        <th>{{__('pursuit') }}</th>
                        <th>{{__('shortSummary') }}</th>
                        <th>{{__('file') }}</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data->casesummary as $summary)
                        <tr>
                            <td>{{ $loop->index +1 }}</td>
                            <td>{{ $summary->pursuit }}</td>
                            <td>{{ $summary->summery }}</td>

                            <td>
                                @if($summary->summary_file)
                                    <a href="{{ asset('public/images/files/summary_file') }}/{{ $summary->summary_file }}" target="_blank"><i class="fadeIn animated bx bx-file"></i></a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            @if($data->relatedCase)
                <hr>
                <div class="card-body">
                    <h6 class="card-title">{{__('oldCase') }}</h6>
                    <hr>
                    <div class="accordion accordion-flush" id="accordionFlushExample">

                    </div>
                    <table id="datatablesSimple" class="table align-middle mb-0 text-center">
                        <thead class="table-light">
                        <tr>
                            <th>{{__('uname') }}</th>
                            <th>{{__('effectedDate') }}</th>
                            <th>{{__('uaction') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                {{ (app()->getLocale() === 'dr') ? $data->relatedCase->name_dr :
                                    ((app()->getLocale() === 'ps') ? $data->relatedCase->name_ps :
                                    ((app()->getLocale() === 'en') ? $data->relatedCase->name_en : '')) }}</td>
                            <td>{{ $data->relatedCase->date }}</td>
                            <td><a href="{{ route('getCaseDetails', $data->relatedCase->id) }}" class="ms-1 btn-edit"><i class="fadeIn animated bx bx-show"></i></a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>

@endsection

