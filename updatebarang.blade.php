@foreach ($data as $p)

<form method="post" action="update">
    {{ csrf_field() }}
    <input type="text" name="xbarang" size="48" value="{{ $p->barang }}" placeholder="Input Nama Barang" /><br />
    <input type="text" name="xharga" size="48" value="{{ $p->harga }}" placeholder="Input Harga Barang" /><br />
    <textarea name="xspesifikasi" cols="50" rows="10">{{ $p->spesifikasi }}</textarea><br />
    <input type="submit" name="asal" value="Update" />
</form>

@endforeach