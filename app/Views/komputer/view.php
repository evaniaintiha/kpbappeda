<?= $this->extend('sidebar')?>
<?= $this->section('content')?>
    <h1>Detail Perawatan</h1>
    <button onclick="window.print()" class="btn btn-outline-secondary shadow float-right">Print PDF<i class="fa fa-print"></i> </button>
    <div class = "container">
        <div class = "row">
            <div class = "col-6">
                <div class = "card">
                    <div class = "card-body">
                        <iframe src="<?= base_url('uploads/'.$komputer->gambar2) ?>" width="200" height="250"></iframe>
                        <iframe src="<?= base_url('uploads/'.$komputer->gambar) ?>" width="200" height="250"></iframe> 
                    </div>
                </div>
            </div>
            <div class = "col-6">
                <h1 class = "text-success"><?= $komputer->merk ?></h1>
                <h4>Kode Barang  : <?= $komputer->kode ?></h4>
                <h4>Tahun Pembelian  : <?= $komputer->tahun ?></h4>
                <h4>Ruang  : <?= $komputer->ruang ?></h4>
                <h4>Tanggal Perawatan  : <?= $komputer->perawatan ?></h4>
                <h4>Anggaran Terpakai  : Rp. <?= number_format($komputer->anggaran, 2, ',', '.'); ?></h4>
                <h4>Kendala  : <?= $komputer->status ?></h4>
                <h4>Keterangan  : <?= $komputer->catatan ?></h4>

            </div> 
        </div>
    </div> 
<?= $this->endSection() ?>