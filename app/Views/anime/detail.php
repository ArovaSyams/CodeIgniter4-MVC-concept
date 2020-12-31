<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Detail Komik</h2>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="../img/<?= $anime['key_visual']; ?>" alt="..." class="card-img">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $anime['judul']; ?></h5>
                            <p class="card-text"><b>Studio : </b><?= $anime['studio']; ?></p>
                            <p class="card-text"><small class="text-muted">Pengarang : <?= $anime['pengarang']; ?></small></p>

                            <a href="" class="btn btn-success">Edit</a>
                            <a href="" class="btn btn-warning">Delete</a>
                            <br><br>
                            <a href="/anime">Kembali ke daftar komik</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?= $this->endSection(); ?>