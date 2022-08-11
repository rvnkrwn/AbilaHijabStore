<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

<section>
    <div class="slider overflow-x-hidden">
        <div class="slides flex w-max">
                <input type="radio" name="slide-btn" id="radio1">
                <input type="radio" name="slide-btn" id="radio2">
            <div class="face w-screen first">
                <img src="https://cdn.shopify.com/s/files/1/0019/7653/3091/files/slide_3_1944x.jpg?v=1610947719" alt="" class="w-full">
            </div>
            <div class="face w-screen first">
                <img src="https://cdn.shopify.com/s/files/1/0019/7653/3091/files/slide_2_1944x.jpg?v=1610947718" alt="" class="w-full">
            </div>
        </div>
    </div>
</section>
<section id="collection" class="h-fit p-4 py-14">
    <div class="title text-center my-8">
        <h1 class="font-semibold tracking-wider md:text-2xl">REKOMENDASI</h1>
    </div>
    <div class="cards w-fit mx-auto grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4">
        <?php
            for ($i=0;$i<8;$i++):
        ?>
        <a href="">
            <div class="card overflow-hidden rounded-lg m-4">
                <img src="https://cdn.shopify.com/s/files/1/0019/7653/3091/products/WhatsAppImage2021-11-25at10.16.47_2_1800x1800.jpg?v=1637987727" alt="">
                <div class="detail text-start p-3">
                    <p class="font-normal text-sm">Paris Jepang Lc - Seri Warna isi 10pcs</p>
                    <p class="tracking-wider font-semibold mt-1">Rp. 200.000</p>
                    <p class="tracking-wider text-xs text-white bg-green-200 w-fit px-2 py-1 text-green-600 rounded font-semibold"><i class="fal fa-truck"></i> Free Ongkir</p>
                    <p class="tracking-wider text-xs mt-1"><i class="fal fa-globe-asia"></i> Cilacap</p>
                    <small class="text-xs"><i class="fas fa-star text-yellow-500"></i> 4,7 | <span>Terjual 12</span></small>
                </div>
            </div>
        </a>
        <?php endfor; ?>
    </div>
    <div class="text-center mx-auto py-2 px-4 bg-black text-white w-fit h-fit font-semibold tracking-wide">
        <a href="/products"><p>SELENGKAPNYA</p></a>
    </div>
</section>



<script>
    let counter = 1;
    setInterval(function () {
        document.getElementById("radio" + counter).checked = true;
        counter++;
        if (counter > 2) {
            counter = 1;
        }
    }, 3000);
</script>
<?= $this->endSection(); ?>