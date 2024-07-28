
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<!--favicon-->
<link rel="icon" href="{{ asset('/assets/endashboard/assets/images/favicon-32x32.png') }}" type="image/png" />

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<!--plugins-->
<link href="{{ asset('/assets/endashboard/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
<!-- Bootstrap CSS -->
<link href="{{ asset('/assets/endashboard/assets/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('/assets/endashboard/assets/css/bootstrap-extended.css') }}" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
<link href="{{ asset('/assets/endashboard/assets/css/rtl.css') }}" rel="stylesheet">
<link href="{{ asset('/assets/endashboard/assets/css/icons.css') }}" rel="stylesheet">


<title>Case Application and Registration System (CARS)</title>
@if(session('locale') == 'en')
    en css file link
@else
    rtl css file link
@endif

@section('header')
@show
