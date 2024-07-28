
<table id="datatablesSimple" class="table align-middle mb-0 text-center">
    <thead class="table-light">
    <tr>
        <th>{{__('code') }}</th>
        <th>{{__('provinces') }}</th>
        <th>{{__('name_dr') }}</th>
        <th>{{__('name_ps') }}</th>
        <th>{{__('name_en') }}</th>
    </tr>
    </thead>
    <tbody>
    @foreach($results as $item)
        <tr>
            <td>{{ $item->code }}</td>
            <td>{{ $item->province->name_dr }}</td>
            <td>{{ $item->name_dr }}</td>
            <td>{{ $item->name_ps }}</td>
            <td>{{ $item->name_en }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
