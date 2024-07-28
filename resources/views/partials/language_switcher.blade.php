<!-- <div>
    @foreach($available_locales as $locale_name => $available_locale)
        @if($available_locale === $current_locale)
            <span>{{$locale_name}}</span>
        @else
            <a href="{{route('localization', $available_locale)}}">
                <span>{{$locale_name}}</span>
            </a>
        @endif
    @endforeach
</div> -->

 <div class="btn-group" role="group">
    <button type="" class="btn btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="box-shadow: none !important;">Languages</button>
    <ul class="dropdown-menu" style="">
        @foreach($available_locales as $locale_name => $available_locale)
        @if($available_locale === $current_locale)
        <li><a class="dropdown-item" href="{{route('localization', $available_locale)}}">{{$locale_name}}</a>
        </li>
        @else
                <li><a class="dropdown-item" href="{{route('localization', $available_locale)}}">{{$locale_name}}</a>
                </li>
        @endif
        @endforeach
    </ul>
</div>
