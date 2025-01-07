<?= $this->extend('layout'); ?>

<?= $this->section('main') ?>
<div class="container">
    <div class="row bg-primary-subtle">
        <div class="col-6 p-5">
            <h1> Selamat Datang Di Toko Skincare Online </h1>
            <p>Kami menyediakan berbagai jenis Skincare dari brand Skintific.</p>
            <button class="btn btn-warning">Lihat Produk</button>
        </div>
        <div class="col-6 p-5">
            <h1>Temukan Skincare Favorit Anda</h1>
            <form action="<?= base_url('search') ?>" method="GET">
                <div class="mb-3">
                    <input type="text" name="Skincare" id="Skincare" class="form-control" placeholder="Pilih Skincare">
                </div>
                <div class="mb-3">
                    <select name="kategori" id="kategori" class="form-control">
                        <option value="">-- Pilih kategori --</option>
                    </select>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary">Cari</button>
                </div>
        </div>
        </form>
    </div>
</div>

<div class="row mt-5">
    <div class="col-12">
        <h2 class="mb-3">Skincare Best Seller</h2>
        <div class="row">
            <div class="col-4">
                <div class="card">
                    <img src="<?= base_url() ?>/images/1.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Niacinamide Clay Stick</h5>
                        <p class="card-text">Rp. 85.000</p>
                        <a href="#" class="btn btn-primary">Add to chart</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="<?= base_url() ?>/images/2.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Soothing Toner</h5>
                        <p class="card-text">Rp. 90.000</p>
                        <a href="#" class="btn btn-primary">Add to chart</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="<?= base_url() ?>/images/3.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Brightening Moisturizer</h5>
                        <p class="card-text">Rp. 80.000</p>
                        <a href="#" class="btn btn-primary">Add to chart</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="<?= base_url() ?>/images/4.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Barier Repair Moisturizer</h5>
                        <p class="card-text">Rp. 86.000</p>
                        <a href="#" class="btn btn-primary">Add to chart</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="<?= base_url() ?>/images/5.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Renewal Serum</h5>
                        <p class="card-text">Rp. 78.000</p>
                        <a href="#" class="btn btn-primary">Add to chart</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img src="<?= base_url() ?>/images/6.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Serum Sunscreen</h5>
                        <p class="card-text">Rp. 99.000</p>
                        <a href="#" class="btn btn-primary">Add to chart</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<?= $this->endSection(); ?>