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
                    <x-Url :href="route($param.'.edit',[$param=>$row])" class="btn btn-info" NameClass="fa fa-pencil" name="UPDATE"/>
                    <x-Url :href="route($param.'.delete',[$param=>$row])" class="btn btn-danger" NameClass="fa fa-trash-o" name="DELETE"/>
                    <x-Url :href="route($modal.'.index',[$param=>$row])" class="btn btn-success" onclick="openModel(this);return false" NameClass="fa fa-plus" name="ADDRESS"/>
                </td>
        </tr>
    @endforeach
    </tbody>
</table>
