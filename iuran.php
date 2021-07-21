<div class="container pt-5">

    <div class="card">
        <div class="card-header bg-info text-black">
            <h4 class="card-title">Data Iuran Warga</h4>
            <a href="<?= base_url('iuran/tambah'); ?>" class="btn btn-success mb-2">Tambah Data Iuran</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Warga</th>
                            <th>Keterangan</th>
                            <th>Tanggal</th>
                            <th>Bulan</th>
                            <th>Tahun</th>
                            <th>Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($getIuran as $isi) { ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $isi['nama']; ?></td>
                                <td><?= $isi['keterangan']; ?></td>
                                <td><?= $isi['tanggal']; ?></td>
                                <td><?php
                                    $monthNum  = $isi['bulan'];
                                    $monthName = date('F', mktime(0, 0, 0, $monthNum, 10));
                                    echo $monthName;
                                    ?></td>
                                <td><?= $isi['tahun']; ?></td>
                                <td><?php echo "Rp " . number_format($isi['jumlah'], 0, ",", "."); ?></td>

                            </tr>

                        <?php $no++;
                        } ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>