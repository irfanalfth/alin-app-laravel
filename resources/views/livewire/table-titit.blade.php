<table class="table table-bordered" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $item)
        <tr>
            <td>{{ $item['no'] }}</td>
            <td>{{ $item['nama'] }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
