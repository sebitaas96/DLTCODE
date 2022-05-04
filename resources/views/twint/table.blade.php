<table class="" style="border-radius: 50px 0 50px 0 / 100px 0 100px 0">
    <thead>
        <tr class="" style="background-color:#2c7b88">
            <th scope="col">Hash</th>
            <th scope="col">Fecha</th>
            <th scope="col">&nbsp;</th>
        </tr>
    </thead>

    <tbody>
        @foreach($datas as $data)
        <tr>
            <td>{{$data[0][0]}} </td>
            <td>{{ $data[0][1]}}</td>
            <td><a href="{{route('twint.data.show', $data[1])}}">View</a></td>
        </tr>
        @endforeach
    </tbody>
</table>