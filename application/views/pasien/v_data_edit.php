<section class="kontent m-4">
    <div class="container-fluid">
        <div class="card border-primary">
            <div class="card-header bg-primary text-white">
                <?= $title; ?>
                <a href="<?= base_url('pasien'); ?>" class="btn btn-warning btn-sm float-right">Kembali</a>
            </div>
            <div class="card-body">
                <form action="<?= base_url('pasien/update'); ?>" method="post">
                    <input type="hidden" name="id" value="<?= $r['id_pasien']; ?>">
                    <div class="form-group">
                        <label for="">Nama Pasien</label>
                        <input type="text" name="nama_pasien" value="<?= $r['nama_pasien']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="" class="form-control" required>
                            <option value="<?= $r['jenis_kelamin']; ?>"><?= $r['jenis_kelamin']; ?></option>
                            <option value="L">Laki-Laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Umur</label>
                        <input type="number" name="umur" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm">Update Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>