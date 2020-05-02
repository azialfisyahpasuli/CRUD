<table border="1px" width="100%">
    <tr>
        <th>No</th>
        <th>Nama Barang</th>
        <th>Harga</th>
        <th>Spesifikasi</th>
        <th>opsi</th>

    </tr>
    <tr>
        @foreach ($data as $p)
        <td>{{ $p->barang }}</td>
        <td>{{ $p->harga }}</td>
        <td>{{ $p->Spesifikasi }}</td>
        <td><= href="editbarang/{{ $p->id }}">Edit</a></td>
            <a href-"editbarang/{{ $p->id }}">Edit</a></td>
            <a href-"hapus/{{ $p->id }}">delete</a></td>

        @endforeach
    </tr>
</table>

