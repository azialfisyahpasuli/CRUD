<form method="post" action="savecreate">
    {{ csrf_field() }}
    <input type="text" name="xbarang" size="48" placeholder="Input Nama Barang" /><br />
    <input type="text" name="xharga" size="48" placeholder="Input Harga Barang" /><br />
    <textarea name="xspesifikasi" cols="50" rows="10"></textarea><br />
    <input type="submit" name="asal" value="Save" />
</form>