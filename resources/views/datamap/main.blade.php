<!DOCTYPE html>
<html>
<head>
    <title>DataMapping</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width; initial-scale=1.0" />
    <!--favicon-->
    <link rel="icon" href="{{ asset('/assets/endashboard/assets/images/favicon-32x32.png') }}" type="image/png" />
    <meta name="description" content="afghan journalists safety committee | AJSC | datamapping | journalists | safety | afghan | afghan journalists | afghan safety | Zone | Capital | Center | East | Kabul | Kabul Zone | Norheast | North | North East | Northeast | Northeast | South East | Southeast | West | Administrative Employee | Agent | Analyst | Anchor | Anchor and Journalist | Announcer | Braodcast Manager | Braodcast Responsible | Broadcaster | Broadcasting  Manager | Camera Man | Camera Man Prodaction | Cleaner | Coordinator | Deputy of Prodaction | Designer | Director | Director General | Director Of Cammunication | Director of Education | Director of News | Director of Products | Director Of Radio | Driver | Dubber | Dubbing Staff | Editor | Educational | Employee | Ex Journlist | Executive Director | Expert | Film Maker | Founder | Free Journalist | Gaurds | Graphic Desiginer | Handler and reporter | Head | Head of IT | Head of Media and Communication | Head of News | Head of the Radio | IT | IT Staff | Journalist and camra man | Journalist and Photographer | Journalist/Director | Manager | Manager of News | Media Advisor | News Director | News Editor | Old Braodcast Responsible | Owner | Photo Journalist | Photographer | Political Program Operator | Presenter | Producer | Proudct Employee | Publications Manager | Radio Announcer | Radio Director | Radio Director | Regional Journalist | Religious Expert | Reporter | Reporter and Photo Journalis | Representative | Secretory of ED | Social program host | Southern Representative | Technical Director | Technical emlpoyee | Technical Person | Translator | Video Editor | Video Journalist | Women Journalist Coordinator | Writer | Killed | Injured | Threaten | Misbehavior | Beaten | Fired | Arrested | Kidnapped |Bullies| Government | Media Officials | Taliban | ISIS | Local | unkonws peapleo | protestors | natural disaster | TypeofViolence | Perpetrators | Province | Occupation | Year |" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('datamap/w3.css') }}">
    <link rel="stylesheet" href="{{ asset('datamap/mstyle.css') }}">
    <link rel="stylesheet" href="{{ asset('datamap/table.css') }}">
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
    </style>
</head>
<body style="font-family: 'Rajdhani', sans-serif;">
    @php
        $lang = app()->getLocale();
    @endphp
<div class="top-banner">
    <ul class="navigation">
{{--        <li class="nvg flg"><a href="index_d.php"><img src="{{ asset('datamap/images/dari.png') }}" width="24px" height="16px"><br><span data-localize="menu.dari">Dari</span></a></li>--}}
{{--        <li class="nvg flg"><a href="index_p.php"><img src="{{ asset('datamap/images/dari.png') }}" width="24px" height="16px"><br><span data-localize="menu.pashto">Pashto</span></a></li>--}}
{{--        <li class="nvg flg"><a href="index.php" data-locale="en"><img src="{{ asset('datamap/images/english.png') }}" width="24px" height="16px"><br><span data-localize="menu.eng">English</span></a></li>--}}
        <li class="nvg flg"><a href="{{ route('change.locale', ['locale' => 'dr']) }}"><img src="{{ asset('datamap/images/dari.png') }}" width="24px" height="16px"><br><span data-localize="menu.dari">Dari</span></a></li>
        <li class="nvg flg"><a href="{{ route('change.locale', ['locale' => 'ps']) }}"><img src="{{ asset('datamap/images/dari.png') }}" width="24px" height="16px"><br><span data-localize="menu.pashto">Pashto</span></a></li>
        <li class="nvg flg"><a href="{{ route('change.locale', ['locale' => 'en']) }}"><img src="{{ asset('datamap/images/english.png') }}" width="24px" height="16px"><br><span data-localize="menu.eng">English</span></a></li>

        <li class="nvg"><a href="{{ route('getMethology') }}"><i class="icon-edit"></i> <span data-localize="menu.methodology"> METHODOLOGY</span></a></li>
        <!---->
        <li class="nvg"><a href="{{ route('ajsc') }}"><i class="icon-home"></i> <span data-localize="menu.home">HOME</span></a></li>

        <li class="nvg lft"><a href="http://ajsc.af/"><img src="{{ asset('datamap/images/logo2.jpg') }}" width="120;"></a></li>
    </ul>
</div>


<form id="mapForm" action="{{ route('ajsc') }}" method="get">
    <input type="hidden" name="province" id="nameInput">
    <div class="map" id="mapId">
        <svg version="1.1" id="svg-map" x="0px" y="0px" width="700px" height="660px">
            <g>
                <a class="pak" onclick="submitForm(this)" name="paktya" code="17">
                    <path class="pt" stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M456.99,266.63L439.77,266.33L413.9,291.86L402.4,291.87L402.22,304.65L411.23,304.41L413.61,318.55L423.52,311.51L432.91,313.29L441.76,295.26L461.79,284.34L454.25,272.67L457.37,267.17L456.99,266.63z"></path>
                    <text transform="matrix(1 0 0 1 410.0137 300.3208)" fill="#FFFFFF" data-localize="paktya">{{__('paktya')}}</text>
                </a>
                <a class="war" onclick="submitForm(this)" name="wardak" code="29">
                    <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M406.78,232.71L383.11,232.34L378.63,222.2L363.67,234.26L330.91,231.96L328.58,243.98L342.99,252.99L337.33,261.14L367.55,257.61L371.96,271.82L387.09,287.11L399.46,281.54L411.94,248.79L406.78,232.71z"></path>
                    <text transform="matrix(1 0 0 1 354.7324 250.1221)" fill="#FFFFFF" data-localize="wardak">{{__('wardak')}}</text>
                </a>
                <a class="sam"  onclick="submitForm(this)" name="samangan" code="28">
                    <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M374.09,115.07L335.12,116.17L332.65,138.08L319.67,146.95L322.22,154.77L311.78,167.66L317.01,176.95L308.37,188.11L369.21,182.99L390.7,141.62L374.97,122.83L376.54,116.4L374.09,115.07z"></path>
                    <text transform="matrix(1 0 0 1 332.9121 150.6689)" fill="#FFFFFF" data-localize="samangan">{{__('samangan')}}</text>
                </a>
                <a class="par" onclick="submitForm(this)" name="parwan" code="26">
                    <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M426.23,187.09L392.85,206.6L373.85,209.82L378.63,222.2L383.11,232.34L406.78,232.71L412.61,216.58L427.96,220.31L435.19,234.54L442.76,231.12L440.9,215.7L427.88,209.57L427.19,200.8L426.23,187.09z"></path>
                    <text transform="matrix(1 0 0 1 380.3984 216.8003)" fill="#FFFFFF" data-localize="parwan">{{__('parwan')}}</text>
                </a>
                <a class="log"  onclick="submitForm(this)"name="logar" code="27">
                    <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M437.02,259.95L427.1,247.91L411.94,248.79L399.46,281.54L402.4,291.87L413.9,291.86L439.77,266.33L456.99,266.63L449.11,254.6L437.02,259.95z"></path>
                    <text transform="matrix(1 0 0 1 405.7891 273.895)" fill="#FFFFFF" data-localize="logar">{{__('logar')}}</text>
                </a>
                <a class="lagh" onclick="submitForm(this)" name="laghman" code="24">
                    <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M489.83,210.74L475.11,214.17L460.61,196.4L452.1,205.6L456.97,219.05L452.84,245.15L479.11,240.69L491.83,222.21L489.83,210.74z"></path>
                    <text transform="matrix(1 0 0 1 457.525 225.9009)" fill="#FFFFFF" data-localize="laghman">{{__('laghman')}}</text>
                </a>
                <a class="pan" onclick="submitForm(this)" name="panjsher" code="22">
                    <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M475.23,159.76L460.07,162.18L449.78,178.23L426.23,187.09L427.19,200.8L452.1,205.6L460.61,196.4L458.16,189.26L473.18,170.52L475.23,159.76z"></path>
                    <text transform="matrix(1 0 0 1 427.8379 194.0347)" fill="#FFFFFF" data-localize="panjsher">{{__('panjsher')}}</text>
                </a>
                <a class="kap" onclick="submitForm(this)" name="kapisa" code="22">
                    <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M452.1,205.6L427.19,200.8L427.88,209.57L440.9,215.7L442.76,231.12L456.97,219.05L452.1,205.6z"></path>
                    <text transform="matrix(1 0 0 1 433.127 213.1045)" fill="#FFFFFF" data-localize="kapisa">{{__('kapisa')}}</text>
                </a>
                <a class="kab" onclick="submitForm(this)" name="kabul" code="22">
                    <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M442.76,231.12L435.19,234.54L427.96,220.31L412.61,216.58L406.78,232.71L411.94,248.79L427.1,247.91L437.02,259.95L452.84,245.15L456.97,219.05L442.76,231.12z"></path>
                    <text transform="matrix(1 0 0 1 420.2754 243.7036)" fill="#FFFFFF" data-localize="kabul">{{__('kabul')}}</text>
                </a>
                <a class="bagh" onclick="submitForm(this)" name="baghlan" code="16">
                    <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M424.15,132.94L399.99,118.63L376.54,116.4L374.97,122.83L390.7,141.62L369.21,182.99L365.67,206.57L373.85,209.82L392.85,206.6L426.23,187.09L449.78,178.23L460.07,162.18L446.49,129.74L430.16,136.99L424.15,132.94z"></path>
                    <text transform="matrix(1 0 0 1 395.9023 162.6099)" fill="#FFFFFF" data-localize="baghlan">{{__('baghlan')}}</text>
                </a>
                <a class="takh" onclick="submitForm(this)" name="takhar" code="15">
                    <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M462.16,56.8L438.12,55.11L428.41,83.32L420.58,121.47L424.15,132.94L430.16,136.99L446.49,129.74L460.07,162.18L475.23,159.76L484.37,152.55L484.89,133.75L463.83,122.99L462.28,95.14L467.98,87.84L462.16,56.8z"></path>
                    <text transform="matrix(1 0 0 1 427.7725 112.5137)" fill="#FFFFFF" data-localize="takhar">{{__('takhar')}}</text>
                </a>
                <a class="nang" onclick="submitForm(this)" name="nangarhar" code="14">
                    <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M509.68,236.66L497.96,238.09L491.83,222.21L479.11,240.69L452.84,245.15L437.02,259.95L449.11,254.6L456.99,266.63L457.37,267.17L487.29,272.85L512.75,266.81L516.62,249.78L509.68,236.66z"></path>
                    <text transform="matrix(1 0 0 1 457.2939 260.3862)" fill="#FFFFFF" data-localize="nangarhar">{{__('nangarhar')}}</text>
                </a>
                <a class="kun" onclick="submitForm(this)" name="kunduz" code="13">
                    <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M428.41,83.32L408,69.83L366.12,94.95L374.09,115.07L376.54,116.4L399.99,118.63L424.15,132.94L420.58,121.47L428.41,83.32z"></path>
                    <text transform="matrix(1 0 0 1 380.1406 105.0591)" fill="#FFFFFF" data-localize="kunduz">{{__('kunduz')}}</text>
                </a>
                <a class="kunar" onclick="submitForm(this)" name="kunar" code="12">
                    <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M509.68,236.66L541.02,200.3L539.28,182.81L520.6,192.59L515.88,204.26L493.6,202.59L489.83,210.74L491.83,222.21L497.96,238.09L509.68,236.66z"></path>
                    <text transform="matrix(1 0 0 1 492.7017 220.9355)" fill="#FFFFFF" data-localize="kunar">{{__('kunar')}}</text>
                </a>
                <a class="nur"  onclick="submitForm(this)" name="nuristan" code="11">
                    <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M539.28,182.81L531.4,160.15L518.73,148.94L503.91,181.62L495.31,178.47L488.33,183.88L485.23,170.72L473.18,170.52L458.16,189.26L460.61,196.4L475.11,214.17L489.83,210.74L493.6,202.59L515.88,204.26L520.6,192.59L539.28,182.81z"></path>
                    <text transform="matrix(1 0 0 1 470.1299 195.3193)" fill="#FFFFFF" data-localize="nuristan">{{__('nuristan')}}</text>
                </a>
                <a class="bad" onclick="submitForm(this)" name="badakhshan" code="51">
                    <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M509.22,0L494.22,4.23L470.31,32.58L475.31,49.2L462.16,56.8L467.98,87.84L462.28,95.14L463.83,122.99L484.89,133.75L484.37,152.55L475.23,159.76L473.18,170.52L485.23,170.72L488.33,183.88L495.31,178.47L503.91,181.62L518.73,148.94L540.1,123.24L548.46,126.94L569.37,107.01L616.83,97.89L657.76,101.61L682.12,92.72L673.81,81.44L679.69,76.68L699.34,76.36L688.09,66.42L671.36,64.41L641.94,77.22L636.51,74.49L644.09,64.32L621.9,62.09L597.37,77.02L590.92,88.67L542.17,109.4L531.4,86.35L539.49,35.52L523.01,33.79L527.86,13.76L509.22,0z"></path>
                    <text transform="matrix(1 0 0 1 473.0244 100.4175)" fill="#FFFFFF" data-localize="badakhshan">{{__('badakhshan')}}</text>
                </a>
                <a class="paktika" onclick="submitForm(this)" name="paktika" code="50">
                    <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M432.91,313.29L423.52,311.51L413.61,318.55L411.23,304.41L402.22,304.65L376.24,340.6L367.09,343.61L360.46,338.03L356.13,344.38L367.69,356.13L367.41,379.35L369.69,398.75L372.64,394.94L389.08,400.68L385.24,397.39L390.51,395.11L403.92,407.68L416.92,402.25L428.23,388.02L424.74,358.45L434.11,347.37L436.64,326.8L430.19,324.95L432.91,313.29z"></path>
                    <text transform="matrix(1 0 0 1 378.2939 360.7236)" fill="#FFFFFF" data-localize="paktika">{{__('paktika')}}</text>
                </a>
                <a class="kh" onclick="submitForm(this)" name="khost" code="52">
                    <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M436.64,326.8L462.29,319.82L476.25,308.97L467.69,285.83L461.79,284.34L441.76,295.26L432.91,313.29L430.19,324.95L436.64,326.8z"></path>
                    <text transform="matrix(1 0 0 1 436.9111 314.2139)" fill="#FFFFFF" data-localize="khost">{{__('khost')}}</text>
                </a>
                <a class="ghaz" onclick="submitForm(this)" name="ghazni" code="41">
                    <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M399.46,281.54L387.09,287.11L371.96,271.82L367.55,257.61L337.33,261.14L333.23,267.12L334.8,277.45L308.85,293.77L308.11,311.17L316.16,313.63L311.83,325.6L316.95,331.67L321.03,323.78L330.67,330.51L337.03,326.93L336.12,339.08L354.28,363.28L347.09,370.54L367.41,379.35L367.69,356.13L356.13,344.38L360.46,338.03L367.09,343.61L376.24,340.6L402.22,304.65L402.4,291.87L399.46,281.54z"></path>
                    <text transform="matrix(1 0 0 1 335.4453 310.1045)" fill="#FFFFFF" data-localize="ghazni">{{__('ghazni')}}</text>
                </a>
                <a class="zab" onclick="submitForm(this)" name="zabul" code="42">
                    <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M367.41,379.35L347.09,370.54L354.28,363.28L336.12,339.08L337.03,326.93L330.67,330.51L321.03,323.78L316.95,331.67L299.56,346.08L297.23,341.1L288.16,346.29L283.72,356.78L294.06,355.88L283.67,373.28L283.87,388.98L276.71,394.41L283,402.42L301.49,392.02L314.18,400.35L325.55,398.65L336.61,410.88L352.7,410.99L369.69,398.75L367.41,379.35z"></path>
                    <text transform="matrix(1 0 0 1 305.9111 374.7646)" fill="#FFFFFF" data-localize="zabul">{{__('zabul')}}</text>
                </a>
                <a class="kan" onclick="submitForm(this)" name="kandahar" code="43">
                    <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M283.72,356.78L254.13,359.76L254.05,352.37L248.35,352L240.56,369.12L230.77,366.42L224.68,381.5L216.74,382.45L210.24,394.2L195.07,522.24L221.12,523.91L277.37,507.43L284.4,500.64L278.52,494.97L286.09,445.48L311.83,424.57L333.2,430.12L353.5,422.95L343.38,412.82L352.7,410.99L336.61,410.88L325.55,398.65L314.18,400.35L301.49,392.02L283,402.42L276.71,394.41L283.87,388.98L283.67,373.28L294.06,355.88L283.72,356.78z"></path>
                    <text transform="matrix(1 0 0 1 221.0313 434.4658)" fill="#FFFFFF" data-localize="kandahar">{{__('kandahar')}}</text>
                </a>
                <a class="day" onclick="submitForm(this)" name="daykundi" code="35">
                    <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M291.51,246.43L244.67,249.03L244.61,270.83L238.73,277.09L247.35,292.34L229.98,306.41L236.25,322.1L270.29,323.89L283.16,309.71L308.11,311.17L308.85,293.77L334.8,277.45L333.23,267.12L299.15,270.76L292.91,265.69L291.51,246.43z"></path>
                    <text transform="matrix(1 0 0 1 253.6816 290.3193)" fill="#FFFFFF" data-localize="daykundi">{{__('daykundi')}}</text>
                </a>
                <a class="urz" onclick="submitForm(this)" name="uruzgan" code="31">
                    <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M308.11,311.17L283.16,309.71L270.29,323.89L236.25,322.1L228.3,333.46L230.77,366.42L240.56,369.12L248.35,352L254.05,352.37L254.13,359.76L283.72,356.78L288.16,346.29L297.23,341.1L299.56,346.08L316.95,331.67L311.83,325.6L316.16,313.63L308.11,311.17z"></path>
                    <text transform="matrix(1 0 0 1 248.4063 342.4561)" fill="#FFFFFF" data-localize="uruzgan">{{__('uruzgan')}}</text>
                </a>
                <a class="nim" onclick="submitForm(this)" name="nimroz" code="33">
                    <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M148.03,373.52L129.95,370.52L123.94,383.95L109.86,388.99L99.96,380.88L72.78,383.78L54.68,419.84L61.62,424.75L64.19,450.55L17.72,506.15L103.03,530.72L111.03,486.74L126.79,469.07L129.25,445.5L138.95,434.8L148.03,373.52z"></path>
                    <text transform="matrix(1 0 0 1 75.4648 454.6807)" fill="#FFFFFF" data-localize="nimroz">{{__('nimroz')}}</text>
                </a>
                <a class="hil" onclick="submitForm(this)" name="hilmand" code="32">
                    <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M175.01,532.47L195.07,522.24L210.24,394.2L216.74,382.45L224.68,381.5L230.77,366.42L228.3,333.46L236.25,322.1L229.98,306.41L206.02,314.26L184.64,349.31L171.52,352.18L171.53,359.47L148.03,373.52L138.95,434.8L129.25,445.5L126.79,469.07L111.03,486.74L103.03,530.72L149.9,526.29L175.01,532.47z"></path>
                    <text transform="matrix(1 0 0 1 147.3047 440.4971)" fill="#FFFFFF" data-localize="helmand">{{__('helmand')}}</text>
                </a>
                <a class="far" onclick="submitForm(this)" name="farah" code="53">
                    <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M206.02,314.26L197.57,308.73L190.21,319.3L181.96,318.25L168.83,297.47L149.05,307.51L129.12,308.94L123.02,318.54L98.47,324.11L90.72,336.55L75.98,339.98L73.57,333.38L66.79,338.04L57.6,332.51L66.19,318.43L61.9,311.71L66.38,299.81L21.38,297.71L3.99,319.5L17.03,370.73L16.62,413.82L54.68,419.84L72.78,383.78L99.96,380.88L109.86,388.99L123.94,383.95L129.95,370.52L148.03,373.52L171.53,359.47L171.52,352.18L184.64,349.31L206.02,314.26z"></path>
                    <text transform="matrix(1 0 0 1 72.4141 364.2139)" fill="#FFFFFF" data-localize="farah">{{__('farah')}}</text>
                </a>
                <a class="sar" onclick="submitForm(this)" name="sar-e-pul" code="25">
                    <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M311.78,167.66L292.28,170.18L298.43,158.24L297.1,140.97L290.26,137.32L300.88,118.16L293.46,115.41L244.14,130.87L244.93,152.11L252.6,150.76L258.98,160.58L242.65,171.97L241.26,195.32L250.52,194.39L269.66,206.67L272.97,223.14L285.52,215.47L285.23,200.22L300.34,198.36L308.37,188.11L317.01,176.95L311.78,167.66z"></path>
                    <text transform="matrix(1 0 0 1 255.2129 185.9893)" fill="#FFFFFF" data-localize="sarepul">{{__('sarepul')}}</text>
                </a>
                <a class="ghor" onclick="submitForm(this)" name="ghor" code="25">
                    <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M285.52,215.47L272.97,223.14L269.66,206.67L250.52,194.39L241.26,195.32L206.26,197.75L219.32,208.86L220.53,221.53L193.94,229.81L194.2,240.36L180.43,241.69L176.56,256.05L146.24,253.53L141.13,264.93L150.6,280.79L145.47,289.14L125.93,296.53L129.12,308.94L149.05,307.51L168.83,297.47L181.96,318.25L190.21,319.3L197.57,308.73L206.02,314.26L229.98,306.41L247.35,292.34L238.73,277.09L244.61,270.83L244.67,249.03L291.51,246.43L303.58,240.66L305.38,232.32L285.52,215.47z"></path>
                    <text transform="matrix(1 0 0 1 190.2129 268.9893)" fill="#FFFFFF" data-localize="ghor">{{__('ghor')}}</text>
                </a>
                <a class="jaw" onclick="submitForm(this)" name="jawzjan" code="25">
                    <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M280.05,68.52L256.3,55.15L243.03,75.7L235.44,93.41L242.88,127.6L231.26,129.99L224.32,152.32L239.5,156.21L252.6,150.76L244.93,152.11L244.14,130.87L293.46,115.41L288.13,106.24L295.42,103.22L292.31,83.59L280.05,68.52z"></path>
                    <text transform="matrix(1 0 0 1 242.2129 95.9893)" fill="#FFFFFF" data-localize="jawzjan">{{__('jawzjan')}}</text>
                </a>
                <a class="far" onclick="submitForm(this)" name="faryab" code="25">
                    <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M252.6,150.76L239.5,156.21L224.32,152.32L231.26,129.99L242.88,127.6L235.44,93.41L243.03,75.7L208.62,83.25L195,133.27L173.61,144.47L173.02,150.86L166.29,148.88L170.96,180.58L191.01,185.58L191.04,196.34L206.26,197.75L241.26,195.32L242.65,171.97L258.98,160.58L252.6,150.76z"></path>
                    <text transform="matrix(1 0 0 1 188.2129 158.9893)" fill="#FFFFFF" data-localize="faryab">{{__('faryab')}}</text>
                </a>
                <a class="bal" onclick="submitForm(this)" name="balkh" code="25">
                    <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M366.12,94.95L352.62,76.46L340.81,73.26L328.97,79.16L316.68,67.01L280.05,68.52L292.31,83.59L295.42,103.22L288.13,106.24L293.46,115.41L300.88,118.16L290.26,137.32L297.1,140.97L298.43,158.24L292.28,170.18L311.78,167.66L322.22,154.77L319.67,146.95L332.65,138.08L335.12,116.17L374.09,115.07L366.12,94.95z"></path>
                    <text transform="matrix(1 0 0 1 310.2129 100.9893)" fill="#FFFFFF" data-localize="balkh">{{__('balkh')}}</text>
                </a>
                <a class="bam" onclick="submitForm(this)" name="bamyan" code="25">
                    <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M369.21,182.99L308.37,188.11L300.34,198.36L285.23,200.22L285.52,215.47L305.38,232.32L303.58,240.66L291.51,246.43L292.91,265.69L299.15,270.76L333.23,267.12L337.33,261.14L342.99,252.99L328.58,243.98L330.91,231.96L363.67,234.26L378.63,222.2L373.85,209.82L365.67,206.57L369.21,182.99z"></path>
                    <text transform="matrix(1 0 0 1 305.2129 225.9893)" fill="#FFFFFF" data-localize="bamyan">{{__('bamyan')}}</text>
                </a>
                <a class="her" onclick="submitForm(this)" name="herat" code="25">
                    <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M113.73,190.95L103.12,197.37L94.74,193.74L87.68,202.05L74.15,184.32L54.61,184.81L38.35,173.61L28.44,221.35L10.7,238.95L19.95,250.56L7.98,251.29L0.66,261.12L1.58,290.38L21.38,297.71L66.38,299.81L61.9,311.71L66.19,318.43L57.6,332.51L66.79,338.04L73.57,333.38L75.98,339.98L90.72,336.55L98.47,324.11L123.02,318.54L129.12,308.94L125.93,296.53L145.47,289.14L150.6,280.79L141.13,264.93L146.24,253.53L176.56,256.05L180.43,241.69L194.2,240.36L193.94,229.81L160.42,239.36L123.97,231.34L105.57,217.97L113.73,190.95z"></path>
                    <text transform="matrix(1 0 0 1 65.2129 268.9893)" fill="#FFFFFF" data-localize="herat">{{__('herat')}}</text>
                </a>
                <a class="badghis" onclick="submitForm(this)" name="badghis" code="25">
                    <path stroke="#FFFFFF" stroke-width="1.0404" stroke-linecap="round" stroke-linejoin="round" d="M206.26,197.75L191.04,196.34L191.01,185.58L170.96,180.58L166.29,148.88L127.36,159.39L132.71,168.79L126.03,173.24L126.2,184.43L113.73,190.95L105.57,217.97L123.97,231.34L160.42,239.36L193.94,229.81L220.53,221.53L219.32,208.86L206.26,197.75z"></path>
                    <text transform="matrix(1 0 0 1 135.2129 200.9893)" fill="#FFFFFF" data-localize="badghis">{{__('badghis')}}</text>
                </a>
            </g>
        </svg>
        @if (request('province'))
            <img src="{{ asset('datamap/images') }}/{{ request('province') }}.png" width="400px" height="400px">
        @endif
    </div>
</form>

<script>
    function submitForm(clickedElement) {
        // Get the value of the name attribute from the clicked anchor tag
        var nameValue = clickedElement.getAttribute('name');

        // Set the value of the hidden input field
        document.getElementById('nameInput').value = nameValue;

        // Submit the form
        document.getElementById('mapForm').submit();
    }
</script>

{{--<form id="mapForm" action="{{ route('getProvince') }}" method="get">--}}
{{--    @csrf--}}
{{--    <!-- Your form fields go here -->--}}
{{--    <input type="hidden" name="year" value="{{request('year')}}">--}}

{{--    <input type="hidden" name="type" value="4">--}}
{{--    <input type="hidden" name="search" id="dataField" >--}}
{{--    <button type="submit">Submit</button>--}}
{{--</form>--}}

<section class="centered-container toggle eng">
    <a class="link link--arrowed" href="#">
        <span id="targetit">Select Year</span>
        <svg class="arrow-icon" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32">
            <g fill="none" stroke="#681728" stroke-width="1.5" stroke-linejoin="round" stroke-miterlimit="10">
                <circle class="arrow-icon--circle" cx="16" cy="16" r="15.12"></circle>
                <path class="arrow-icon--arrow" d="M16.14 9.93L22.21 16l-6.07 6.07M8.23 16h13.98"></path>
            </g>
        </svg>
    </a>
</section>


<label for="year" id="target">
    <form role="form">
        <select name="year" id="dropdownList" class="form-control">
            <option value="" data-localize="selectyear" id="opt" style="font-size: 10px;">Year</option>
            <option value="" data-localize="all">All</option>
            @for($i = date('Y'); $i >= 2013; $i--)
                <option value="{{ $i }}">{{ $i }}</option>
            @endfor
        </select>

        <button type="submit" id="sub-opt">Confirm</button>

    </form>


</label>
<script type="text/javascript">
    $('.toggle').click(function() {
        $('#target').toggle('slow');
        $('#targetit').toggle('slow');
    });
</script>

<div class="cont">
    <h1 data-localize="violence"><span>{{__('typeOfViolence')}}</span></h1>

    <div class="sel tp"></div>

    @php
        $total_violence = 0;
        foreach ($violences as $violence) {
            $total_violence += $violence->caseCount;
        }
    @endphp
    <ul class="graphs stats-container centered biggie">
        @foreach($violences as $violence)
            <li class="animated" data-provide="circular" data-fill-color="#7C0D0D" data-percent="true" 
                data-initial-value="{{ $total_violence ? ($violence->caseCount*100)/$total_violence : 0 }}" data-max-value="100"  
                data-label="{{ $violence['name_'.$lang] }}" 
                data-title="{{__('total_case')}}: {{ $violence->caseCount }}"
                data-dates="@if( request('year') ){{ $year }}@else{{ __('allYear') }}@endif" 
                style="position: relative; width: 150px; height: 100%;">
            </li>
        @endforeach

    </ul>
    <script  src="{{ asset('datamap/js/typeofviolence.js') }}"></script>

    <main class="perpetrators-sec">

        <!--<h1 data-localize="Perpetrators">Perpetrators</h1>

            <h1 data-localize="perp">Perpetrators</h1>-->
        <h1 data-localize="perp">{{__('typeOfPerpetrators')}}</h1>
    </main>


    <div class='app-layout'>
        @foreach($perpetrators as $perpetrator)
        <div class='box gov'>
            <span data-localize="gov">
                {{ $perpetrator['name_'.$lang] }}
            </span>

            <div class="dwn">
                <img src="{{ asset('datamap/images/arr.png') }}" style="width: 20px;height: 30px;">
                <p>
                    {{ __('allYear') }}
                    <br/>
                    {{-- count: {{ $perpetrator->caseCount }} dont clear it. --}}
                    <br/>
                    @php
                        $list = [];
                        $perp_data = [];
                        $total_case = 0;
                        $cases = $perpetrator->case;
                        if($year !== "" || $province !== ""){
                            $case_ids = case_id_filter_by_year($year,$province);
                            $cases = $perpetrator->case()->whereIn('case_id',$case_ids)->get();
                        }
                    @endphp
                    @foreach($cases as $ajscCase)
                        @foreach ($ajscCase->case->violenceCase as $element)
                            @php
                                if(!in_array($element->violence_id,$list)){
                                    array_push($list,$element->violence_id);
                                    $perp_data[$element->violence['name_'.$lang]] = 1;
                                    $total_case++;
                                }else{
                                    $total_case++;
                                    $perp_data[$element->violence['name_'.$lang]] += 1;
                                }
                            @endphp
                        @endforeach
                    @endforeach
                    
                    @foreach ($perp_data as $key => $val)
                        {{ $key }} : {{ $val }} <br>
                    @endforeach
                </p>
                <hr/>
                <div class="gov">
                    Total Case : {{ $total_case }}
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>

<div class="tablepart">
    <h1 data-localize="result" >{{__('recordTable')}}</h1>


    <input class="form-control" id="myInput" type="text" placeholder="Search . . ." style="position: relative;float: right;text-align: left;">
    <script>
        $(document).ready(function(){
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
    <br>

    <!--HTML TABLE HEADERS-->
    <table class="w3-table-all" id="myTable">
        <thead>
            <tr>
                <th><strong>Year</strong></th>
                <th><strong>Perpetrators</strong></th>
                <th><strong>Type of Violence</strong></th>
                <th><strong>Occupation</strong></th>
                <th><strong>Province</strong></th>
                <th><strong>Zone</strong></th>
                <th><strong>Phone</strong></th>
                <th><strong>Email</strong></th>
                <th><strong>Description</strong></th>
                <th><strong>Action</strong></th>
            </tr>
        </thead>
        <tbody>
            @foreach($results as $result)
                <tr>
                    <td>{{ $result->date ? \Carbon\Carbon::parse($result->date)->format('Y') : '' }}</td>
                    <td>
                        @foreach($result->perpetrators as $perpetrator)
                            {{ $perpetrator['name_'.$lang] }}
                            @if (!$loop->last)
                                ,
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach($result->violences as $violence)
                            {{ $violence['name_'.$lang] }}
                            @if (!$loop->last)
                                ,
                            @endif
                        @endforeach
                    </td>
                    <td>
                        @foreach($result->occupations as $occupation)
                            {{ $occupation['name_'.$lang] }}
                            @if (!$loop->last)
                                ,
                            @endif
                        @endforeach
                    </td>
                    <td>{{ $result->province['name_'.$lang] }}</td>
                    <td>{{ $result->zone['zone_'.$lang] }}</td>
                    <td>{{ $result->phone }}</td>
                    <td>{{ $result->email }}</td>
                    <td>{{ $result->description }}</td>
                    <td>
                        <a href="{{ route('case_report_page',$result->id) }}" class="btn btn-aj">{{ __('view') }}</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#myTable').DataTable( {
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
        } );
    } );
</script>

<div class="ftr">
    <h2>
        <ul class="ftr-nav">
            <li class="ftr-social"><a href="#"><i class="icon-facebook"></i></a></li>
            <li class="ftr-social"><a href="#"><i class="icon-twitter"></i></a></li>
            <li class="ftr-social"><a href="#"><i class="icon-youtube"></i></a></li>
        </ul>
        <ul class="ftr-logo">
            <li><img src="{{ asset('datamap/images/logo2.jpg') }}" width="120"></li>
        </ul>
        <p> Copyright &copy; 2020 AJSC. All Rights Reserved</p>
    </h2>
</div>
<script  src="{{ asset('datamap/js/script3.js') }}"></script>

<!--<script type="text/javascript">

      $('[data-localize]').localize("mylanguage", {language: "fr"});

</script>-->

<script src="{{ asset('datamap/js/tablepaginition.js') }}"></script>
<script src="{{ asset('datamap/js/tablepaginition2english.js') }}"></script>

</body>
</html>
