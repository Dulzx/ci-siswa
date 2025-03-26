<h2>Tambah Siswa</h2>
<form method="post" action="<?= site_url('siswa/simpan'); ?>">
    Nama: <input type="text" name="nama" required>
    Alamat: <textarea name="alamat" required></textarea>
    No HP: <input type="text" name="no_hp" required>
    <button type="submit">Simpan</button>
</form>
