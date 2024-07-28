
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
    </tr>
    </thead>
    <tbody>
    @foreach($results as $item)
        <tr>
            <td>{{ $loop->index +1 }}</td>
            <td>{{ $item->name_dr }}</td>
            <td>{{ $item->name_ps }}</td>
            <td>{{ $item->name_en }}</td>
            <td>{{ $item->phone }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->zone->code }} - {{ $item->zone->zone_dr }}</td>
            <td>{{ $item->province->code }} - {{ $item->province->name_dr }}</td>
            <td>{{ $item->district->code }} - {{ $item->district->name_dr }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
