<!DOCTYPE html>
<html>
<head>
    <title>DataMapping</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0" />
    <!--favicon-->
    <link rel="icon" href="{{ asset('/assets/endashboard/assets/images/favicon-32x32.png') }}" type="image/png" />
    <meta name="description" content="afghan journalists safety committee | AJSC | datamapping | journalists | safety | afghan | afghan journalists | afghan safety | Zone | Capital | Center | East | Kabul | Kabul Zone | Norheast | North | North East | Northeast | Northeast | South East | Southeast | West | Administrative Employee | Agent | Analyst | Anchor | Anchor and Journalist | Announcer | Braodcast Manager | Braodcast Responsible | Broadcaster | Broadcasting  Manager | Camera Man | Camera Man Prodaction | Cleaner | Coordinator | Deputy of Prodaction | Designer | Director | Director General | Director Of Cammunication | Director of Education | Director of News | Director of Products | Director Of Radio | Driver | Dubber | Dubbing Staff | Editor | Educational | Employee | Ex Journlist | Executive Director | Expert | Film Maker | Founder | Free Journalist | Gaurds | Graphic Desiginer | Handler and reporter | Head | Head of IT | Head of Media and Communication | Head of News | Head of the Radio | IT | IT Staff | Journalist and camra man | Journalist and Photographer | Journalist/Director | Manager | Manager of News | Media Advisor | News Director | News Editor | Old Braodcast Responsible | Owner | Photo Journalist | Photographer | Political Program Operator | Presenter | Producer | Proudct Employee | Publications Manager | Radio Announcer | Radio Director | Radio Director | Regional Journalist | Religious Expert | Reporter | Reporter and Photo Journalis | Representative | Secretory of ED | Social program host | Southern Representative | Technical Director | Technical emlpoyee | Technical Person | Translator | Video Editor | Video Journalist | Women Journalist Coordinator | Writer | Killed | Injured | Threaten | Misbehavior | Beaten | Fired | Arrested | Kidnapped |Bullies| Government | Media Officials | Taliban | ISIS | Local | unkonws peapleo | protestors | natural disaster | TypeofViolence | Perpetrators | Province | Occupation | Year |" />
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css"> --}}
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&family=Roboto:wght@100&display=swap" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{ asset('datamap/w3.css') }}">
    <link rel="stylesheet" href="{{ asset('datamap/mstyle.css') }}">
    <link rel="stylesheet" href="{{ asset('datamap/table.css') }}"> --}}
    <link rel='stylesheet' href='https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.min.js"></script>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js'></script>
    <script type="text/javascript" src="{{ asset('datamap/jquery.localize.js') }}"></script>\

    <style>
        .btn-aj{
            background: #681728;
            color: white;
        }
        .report-head{
            color: #681728;
        }
        .table thead{
            background: #681728;
            color: white;
        }
    </style>
</head>
<body style="font-family: 'Rajdhani', sans-serif;">
    @php
        $lang = app()->getLocale();
    @endphp

<div class="container">
    <div class="row">
        <div class="col-3">
            <h6 class="report-head">Name</h6>
            <span>
                {{ $data['name_'.$lang] }}
            </span>
        </div>
        <div class="col-3">
            <h6 class="report-head">Phone</h6>
            <span>
                {{ $data->phone }}
            </span>
        </div>
        <div class="col-3">
            <h6 class="report-head">Email</h6>
            <span>
                {{ $data->email }}
            </span>
        </div>
        <div class="col-3">
            <h6 class="report-head">Date</h6>
            <span>
                {{ $data->date }}
            </span>
        </div>
        <div class="col-3">
            <h6 class="report-head">Zone</h6>
            <span>
                {{ $data->zone['zone_'.$lang] }}
            </span>
        </div>
        <div class="col-3">
            <h6 class="report-head">Provincec</h6>
            <span>
                {{ $data->province['name_'.$lang] }}
            </span>
        </div>
        <div class="col-3">
            <h6 class="report-head">District</h6>
            <span>
                {{ $data->district['name_'.$lang] }}
            </span>
        </div>
        <div class="col-3">
            <h6 class="report-head">Description</h6>
            <span>
                {{ $data->description }}
            </span>
        </div>
    </div>
</div>

<div class="container mt-5">
    <h4>{{ __('violences') }}</h4>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <th>#</th>
                <th>{{ __('name') }}</th>
            </thead>
            <tbody>
                @foreach ($data->violenceCase as $el)
                    <tr>
                        <td>{{ $el->violence['code'] }}</td>
                        <td>{{ $el->violence['name_'.$lang] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="container mt-5">
    <h4>{{ __('perpetrators') }}</h4>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>{{ __('name') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data->perpetratorCase as $el)
                    <tr>
                        <td>{{ $el->perpetrator['code'] }}</td>
                        <td>{{ $el->perpetrator['name_'.$lang] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<div class="container mt-5">
    <h4>{{ __('occupations') }}</h4>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>{{ __('name') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data->occupations as $el)
                    <tr>
                        <td>{{ $el->code }}</td>
                        <td>{{ $el['name_'.$lang] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script  src="{{ asset('datamap/js/script3.js') }}"></script>
<script src="{{ asset('datamap/js/tablepaginition.js') }}"></script>
<script src="{{ asset('datamap/js/tablepaginition2english.js') }}"></script>

</body>
</html>
