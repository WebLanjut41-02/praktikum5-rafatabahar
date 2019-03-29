<form action="<?= base_url('Home/postEdit') ?>" method="post">
  NIM : <input type="text" name="nim" value="<?= $mahasiswa->nim ?>"><br>
  Nama : <input type="text" name="nama" value="<?= $mahasiswa->nama ?>"><br>
  Tanggal Lahir : <input type="text" name="tanggal_lahir" value="<?= $mahasiswa->tanggal_lahir ?>"><br>
  IPK : <input type="text" name="ipk" value="<?= $mahasiswa->ipk ?>"><br>
  Kelas :
  <select class="" name="kelas">
    <option value="D3SI-41-01" <?= ($mahasiswa->kelas == 'D3SI-41-01') ? 'selected' : '' ; ?>>D3SI-41-01</option>
    <option value="D3SI-41-02" <?= ($mahasiswa->kelas == 'D3SI-41-02') ? 'selected' : '' ; ?>>D3SI-41-02</option>
  </select>
  <br>
  <input type="hidden" name="id" value="<?= $mahasiswa->id ?>">
  <input type="submit" name="submit" value="submit">
</form>
