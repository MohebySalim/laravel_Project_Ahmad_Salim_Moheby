
<table id="datatablesSimple" class="table align-middle mb-0 text-center">
    <thead class="table-light">
    <tr>
        <th>{{__('code') }}</th>
        <th>{{__('ZoneDr') }}</th>
        <th>{{__('zoneps') }}</th>
        <th>{{__('zone_en') }}</th>
{{--        <th>{{__('uactions') }}</th>--}}
    </tr>
    </thead>
    <tbody>
    @foreach($zones as $item)
        <tr>
            <td>{{ $item->code }}</td>
            <td>{{ $item->zone_dr }}</td>
            <td>{{ $item->zone_ps }}</td>
            <td>{{ $item->zone_en }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
