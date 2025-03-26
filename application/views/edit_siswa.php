<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <h2>Edit Siswa</h2>
    <form action="<?= site_url('siswa/edit/'.$siswa['id']); ?>" method="post">
        <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" value="<?= htmlspecialchars($siswa['nama']); ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Alamat</label>
            <input type="text" name="alamat" class="form-control" value="<?= htmlspecialchars($siswa['alamat']); ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">No HP</label>
            <input type="text" name="no_hp" class="form-control" value="<?= htmlspecialchars($siswa['no_hp']); ?>" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="<?= site_url('siswa'); ?>" class="btn btn-secondary">Batal</a>
    </form>
</div>

</body>
</html>
