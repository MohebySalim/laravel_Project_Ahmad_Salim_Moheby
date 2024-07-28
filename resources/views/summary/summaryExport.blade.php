
<table id="datatablesSimple" class="table align-middle mb-0 text-center">
    <thead class="table-light">
    <tr>
        <th>#</th>
        <th>{{__('cases') }}</th>
        <th>{{__('pursuit') }}</th>
        <th>{{__('summery') }}</th>
    </tr>
    </thead>
    <tbody>
    @foreach($results as $item)
        <tr>
            <td>{{ $loop->index +1}}</td>
            <td>{{ $item->ajscCase->name_dr }}</td>
            <td>{{ $item->pursuit }}</td>
            <td>{{ $item->summery }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
