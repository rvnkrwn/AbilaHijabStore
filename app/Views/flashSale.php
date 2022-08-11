<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

    <section id="collection" class="h-fit p-4">
        <div class="title text-center my-8">
            <h1 class="font-semibold text-xl md:text-3xl">Produk Diskon</h1>
        </div>
        <p class="text-center">14 produk</p>
        <div class="cards w-fit mx-auto grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4">
            <?php
            for ($i=0;$i<20;$i++):
                ?>
                <a href="">
                    <div class="card overflow-hidden rounded-lg m-4">
                        <img src="https://cdn.shopify.com/s/files/1/0019/7653/3091/products/WhatsAppImage2021-11-25at10.16.47_2_1800x1800.jpg?v=1637987727" alt="">
                        <div class="detail text-start p-3">
                            <p class="font-normal text-xs font-normal">Paris Jepang Lc - Seri Warna isi 10pcs</p>
                            <p class="tracking-wider font-bold mt-1 text-sm">Rp. 200.000</p>
                            <p class="tracking-wider text-xs text-white bg-green-200 w-fit px-2 py-1 text-green-600 rounded font-semibold"><i class="fal fa-truck"></i> Free Ongkir</p>
                            <p class="tracking-wider text-xs mt-1">Cilacap</p>
                            <small class="text-xs"><i class="fas fa-star text-yellow-500"></i> 4,7 | <span>Terjual 12</span></small>
                        </div>
                    </div>
                </a>
            <?php endfor; ?>
        </div>
    </section>

<?= $this->endSection(); ?>