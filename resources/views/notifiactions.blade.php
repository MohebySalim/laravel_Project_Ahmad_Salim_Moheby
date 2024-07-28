{{--@extends('layouts.app')--}}
@extends('layouts.master')

@section('content')
    <div class="page-content">
        <div class="card radius-10">
            <div class="card-body">
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Unreaded notifications</button>
                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Old notifications</button>                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                        <div class="table-responsive">
                            <table class="table align-middle mb-0 text-center">
                                <thead class="table-light">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Ajsc Form</th>
                                    <th>Read it</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data as $item)
                                    <tr>
                                        <td>{{ $loop->index +1 }}</td>
                                        <td>{{ $item->data['name'] }}</td>
                                        <td><a href="{{ route('GetAjscShow', $item->data['ajscform_id']) }}">Show</a></td>
                                        <td><a href="{{ route('markAsRead', $item->id) }}">Click as read</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="row justify-content-center align-items-center pt-2">
                                {{ $data->links("pagination::bootstrap-4")}}
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                        <div class="table-responsive">
                            <table class="table align-middle mb-0 text-center">
                                <thead class="table-light">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Ajsc Form</th>
                                    <th>Read it</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($datas as $item)
                                    <tr>
                                        <td>{{ $loop->index +1 }}</td>
                                        <td>{{ $item->data['name'] }}</td>
                                        <td><a href="{{ route('GetAjscShow', $item->data['ajscform_id']) }}">Show</a></td>
                                        <td>{{ $item->read_at }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="row justify-content-center align-items-center pt-2">
                                {{ $datas->links("pagination::bootstrap-4")}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
