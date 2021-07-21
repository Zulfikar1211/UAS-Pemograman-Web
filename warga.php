<div class="container pt-5">

    <div class="card">
        <div class="card-header bg-info text-black">
            <h5 class="card-title">Data Warga</h5>
            <a href="<?= base_url('warga/tambah'); ?>" class="btn btn-sm btn-success">Tambah Data</a></right>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>No Rumah</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($getWarga as $isi) { ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $isi['nik']; ?></td>
                                <td><?= $isi['nama']; ?></td>
                                <td>
                                    <?php
                                    $jk = $isi['kelamin'];
                                    if ($jk == 'L') {
                                        echo "Laki-laki";
                                    } else {
                                        echo "Perempuan";
                                    }
                                    ?>
                                </td>
                                <td><?= $isi['alamat']; ?></td>
                                <td><?= $isi['no_rumah']; ?></td>
                                <td>
                                    <?php
                                    $st = $isi['status'];
                                    if ($st == '1') {
                                        echo "Aktif";
                                    } else {
                                        echo "Non-aktif";
                                    }
                                    ?>
                                </td>
                                <td>
                                    <a href="<?= base_url('warga/edit/' . $isi['id']); ?>" class="btn btn-sm btn-success">
                                        Edit</a>
                                    <a href="<?= base_url('warga/hapus/' . $isi['id']); ?>" onclick="javascript:return confirm('Apakah ingin menghapus data ini ?')" class="btn btn-sm btn-danger">
                                        Hapus</a>

                                </td>
                            </tr>
                        <?php $no++;
                        } ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>