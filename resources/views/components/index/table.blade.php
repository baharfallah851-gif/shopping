<table class="table table-bordered">
    <thead>
    <tr>
        @foreach($headers as $header)
            <th class="text-center">{{$header}}</th>
        @endforeach
        <th class="text-center">option</th>
    </tr>
    </thead>
    @csrf
    <tbody>
    @foreach($rows as $row)
        <tr>
            @foreach($fields as $field)
                <td class="text-center">
                    {{ data_get($row, $field) }}
                </td>
            @endforeach
                <td>
                    <x-index.a-customer :customer="$row" />
                </td>
        </tr>
    @endforeach
    </tbody>
</table>
