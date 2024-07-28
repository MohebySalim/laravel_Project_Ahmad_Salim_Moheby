@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'AJCS')
    <h3>AJSC</h3>
{{--<img src="https://laravel.com/img/notification-logo.png" class="logo" alt="Laravel Logo">--}}
@else
{{--{{ $slot }}--}}
        <h3>AJSC</h3>
    @endif
</a>
</td>
</tr>
