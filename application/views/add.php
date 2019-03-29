<form action="<?= base_url('Home/postTambah') ?>" method="post">
  NIM : <input type="text" name="nim" value=""><br>
  Nama : <input type="text" name="nama" value=""><br>
  Tanggal Lahir : <input type="date" name="tanggal_lahir" value=""><br>
  IPK : <input type="text" name="ipk" value=""><br>
  Kelas : <select class="" name="kelas">
    <option value="D3SI-41-01">D3SI-41-01</option>
    <option value="D3SI-41-02">D3SI-41-02</option>
  </select>
  <br>
  <input type="submit" name="submit" value="submit">
</form>
