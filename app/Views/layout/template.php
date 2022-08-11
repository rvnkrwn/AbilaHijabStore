<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keyword" content="">
    <meta name="description" content="">
    <meta name="author" content="abilahijab">
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="<?= base_url() ?>/css/styles.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Flamenco&display=swap" rel="stylesheet">
    <title><?= $name ?></title>
    <style>
        @keyframes nav {
            0% {
                transform: translateY(-100%);
            }
        }
        input[name=slide-btn]
        {
            display: none;
        }
        .first {
            transition: 1s;
        }
        #radio1:checked ~ .first
        {
            margin-left: -25%;
        }
        .card {
            max-width: 200px;
            min-width: 150px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.18);
        }
        form.auth {
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.76);
            min-height: fit-content;
            min-width: 180px;
            padding: 5em 3em;
        }
    </style>
</head>
<body>
<div id="head" class="w-full bg-white/80 sm:flex sm:justify-between sm:shadow sm:shadow-black/30 sm:py-1 sm:px-0 md:px-8 lg:px-14">
    <header class="flex px-4 py-3 justify-between shadow shadow-black/30 sm:shadow-none">
        <a href="/" class="text-xl self-center uppercase md:text-2xl md:font-semibold"><?= $name ?><small class="text-sm">store</small></a>
        <i class="fas fa-bars self-center border p-2 cursor-pointer sm:hidden"
           onclick="document.querySelector('nav').classList.toggle('hidden')"
        ></i>
    </header>
    <nav class="fixed hidden px-4 py-1.5 w-4/5 h-screen bg-gray-500 text-gray-300 z-50 top-0 left-0 sm:block sm:relative sm:h-fit sm:bg-transparent sm:w-auto sm:self-center sm:text-slate-700">
        <p class="text-center p-2 text-xl text-gray-300 uppercase sm:hidden"><a href=""><?= $name ?></a></p>
        <hr class="border-0 border-t-2 border-gray-300 sm:hidden">
        <ul class="text-sm sm:flex sm:relative">
            <?php foreach($menus as $menu): ?>
                <li class="my-2 sm:my-0 sm:mx-2"><a href="<?= $menu['link'] ?>"><p class="p-2"><?= $menu['value'] ?></p></a></li>
            <?php endforeach; ?>
            <?php
                if (session()->get('userid')):
            ?>
            <li class="my-2 sm:my-0 sm:ml-2 sm:self-center">
                <div class="cursor-pointer hidden sm:flex" onclick="document.querySelector('.cardProfile').classList.toggle('sm:hidden')" aria-readonly="true">
                    <img src="https://toppng.com/uploads/preview/instagram-default-profile-picture-11562973083brycehrmyv.png" alt="" class="w-6 h-6 self-center rounded-full">
                    <p class="self-center text-xs p-1"><?= $user['name']; ?></p>
                </div>
                <div class="cardProfile sm:absolute sm:bg-white shadow p-4 sm:hidden">
                    <div class="flex">
                        <img src="https://toppng.com/uploads/preview/instagram-default-profile-picture-11562973083brycehrmyv.png" alt="" class="w-8 h-8 self-center rounded-full">
                        <p class="self-center text-xs p-1"><?= $user['name']; ?></p>
                    </div>
                    <div class="mt-2">
                        <a href=""><p class="text-center bg-green-600 text-white my-1 p-1">Pengaturan</p></a>
                        <a class="cursor-pointer" onclick="if(confirm('Anda ingin keluar?')){ window.location='/logout'; }"><p class="text-center bg-red-600 text-white my-1 p-1">Keluar</p></a>
                    </div>
                </div>
            </li>
            <?php
                else:
            ?>
                    <li class="my-2 sm:my-0 sm:mx-2"><a href="/login"><p class="p-2"><i class='fas fa-sign-in sm:hidden'></i>&nbsp;Masuk</p></a></li>
                    <li class="my-2 sm:my-0 sm:mx-2"><a href="/register"><p class="p-2"><i class='fas fa-user-plus sm:hidden'></i>&nbsp;Mendaftar</p></a></li>
            <?php
                endif;
            ?>
        </ul>
    </nav>
</div>
<section id="ongkir" class="bg-black p-2 text-sm text-white flex justify-center">
    <p>Gratis Ongkir untuk Seluruh pulau jawa</p><i class="fal fa-times self-center ml-8 hover:text-red-500" onclick="document.querySelector('#ongkir').classList.add('hidden')"></i>
</section>
<div class="content">
    <main class="block" onclick="document.querySelector('nav').classList.add('hidden')">
        <?= $this->renderSection('content'); ?>
    </main>
    <hr>
    <footer class=" bottom-0" style="font-family: 'Flamenco', cursive;">
        <ul class="p-6 md:grid md:grid-cols-3">
            <li class="my-4">
                <h2 class="my-2">TENTANG KAMI</h2>
                <div class="">
                    <p><?= $name ?> merupakan sebuah merk hijab terkemuka yang hadir sejak tahun 2022. Berkomitmen untuk menjadi sahabat muslimah Indonesia, <?= $name ?> hadir sebagai brand fashion muslim yang menghadirkan produk-produk dengan desain menarik, bahan yang berkualitas dengan harga terjangkau.</p>
                </div>
            </li>
            <li class="my-6 md:mx-auto">
                <h2 class="my-2">INFORMASI</h2>
                <div class="">
                    <ul>
                        <li><a href="">Tentang Kami</a></li>
                        <li><a href="">FAQS</a></li>
                        <li><a href="">Hubungi Kami</a></li>
                        <li><a href="">Lokasi Toko</a></li>
                        <li><a href="">Kebijakan Pengembalian</a></li>
                    </ul>
                </div>
            </li>
            <li class="my-6">
                <h2 class="my-2">NEWSLETTER</h2>
                <div class="">
                    <p>Jadilah yang pertama mendapatkan informasi tentang penawaran dan diskon terbaru dari kami.</p>
                    <form action="" method="post" class="w-fit flex border-b-2 border-black">
                        <input type="email" name="subscription" id="subscription" placeholder="subscriber@email.com" class="outline-none self-center p-2" required>
                        <button type="submit"><i class="fal fa-envelope self-center p-2"></i></button>
                    </form>
                </div>
            </li>
        </ul>
        <div class="foot text-center px-2 pt-4 pb-6 bg-gray-800 text-white">
            <div class="cc p-2 my-2">
                <ul class="flex justify-center">
                    <li class="mx-1"><svg class="icon icon--full-color" xmlns="http://www.w3.org/2000/svg" role="img" viewBox="0 0 38 24" width="38" height="24" aria-labelledby="pi-american_express"><title id="pi-american_express">American Express</title><g fill="none"><path fill="#000" d="M35,0 L3,0 C1.3,0 0,1.3 0,3 L0,21 C0,22.7 1.4,24 3,24 L35,24 C36.7,24 38,22.7 38,21 L38,3 C38,1.3 36.6,0 35,0 Z" opacity=".07"></path><path fill="#006FCF" d="M35,1 C36.1,1 37,1.9 37,3 L37,21 C37,22.1 36.1,23 35,23 L3,23 C1.9,23 1,22.1 1,21 L1,3 C1,1.9 1.9,1 3,1 L35,1"></path><path fill="#FFF" d="M8.971,10.268 L9.745,12.144 L8.203,12.144 L8.971,10.268 Z M25.046,10.346 L22.069,10.346 L22.069,11.173 L24.998,11.173 L24.998,12.412 L22.075,12.412 L22.075,13.334 L25.052,13.334 L25.052,14.073 L27.129,11.828 L25.052,9.488 L25.046,10.346 L25.046,10.346 Z M10.983,8.006 L14.978,8.006 L15.865,9.941 L16.687,8 L27.057,8 L28.135,9.19 L29.25,8 L34.013,8 L30.494,11.852 L33.977,15.68 L29.143,15.68 L28.065,14.49 L26.94,15.68 L10.03,15.68 L9.536,14.49 L8.406,14.49 L7.911,15.68 L4,15.68 L7.286,8 L10.716,8 L10.983,8.006 Z M19.646,9.084 L17.407,9.084 L15.907,12.62 L14.282,9.084 L12.06,9.084 L12.06,13.894 L10,9.084 L8.007,9.084 L5.625,14.596 L7.18,14.596 L7.674,13.406 L10.27,13.406 L10.764,14.596 L13.484,14.596 L13.484,10.661 L15.235,14.602 L16.425,14.602 L18.165,10.673 L18.165,14.603 L19.623,14.603 L19.647,9.083 L19.646,9.084 Z M28.986,11.852 L31.517,9.084 L29.695,9.084 L28.094,10.81 L26.546,9.084 L20.652,9.084 L20.652,14.602 L26.462,14.602 L28.076,12.864 L29.624,14.602 L31.499,14.602 L28.987,11.852 L28.986,11.852 Z"></path></g></svg></li>
                    <li class="mx-1"><svg class="icon icon--full-color" width="38" height="24" role="img" aria-labelledby="pi-jcb" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg"><title id="pi-jcb">JCB</title><g fill="none" fill-rule="evenodd"><g fill-rule="nonzero"><path d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z" fill="#000" opacity=".07"></path><path d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32" fill="#FFF"></path></g><path d="M11.5 5H15v11.5a2.5 2.5 0 0 1-2.5 2.5H9V7.5A2.5 2.5 0 0 1 11.5 5z" fill="#006EBC"></path><path d="M18.5 5H22v11.5a2.5 2.5 0 0 1-2.5 2.5H16V7.5A2.5 2.5 0 0 1 18.5 5z" fill="#F00036"></path><path d="M25.5 5H29v11.5a2.5 2.5 0 0 1-2.5 2.5H23V7.5A2.5 2.5 0 0 1 25.5 5z" fill="#2AB419"></path><path d="M10.755 14.5c-1.06 0-2.122-.304-2.656-.987l.78-.676c.068 1.133 3.545 1.24 3.545-.19V9.5h1.802v3.147c0 .728-.574 1.322-1.573 1.632-.466.144-1.365.221-1.898.221zm8.116 0c-.674 0-1.388-.107-1.965-.366-.948-.425-1.312-1.206-1.3-2.199.012-1.014.436-1.782 1.468-2.165 1.319-.49 3.343-.261 3.926.27v.972c-.572-.521-1.958-.898-2.919-.46-.494.226-.737.917-.744 1.448-.006.56.245 1.252.744 1.497.953.467 2.39.04 2.919-.441v1.01c-.358.255-1.253.434-2.129.434zm8.679-2.587c.37-.235.582-.567.582-1.005 0-.438-.116-.687-.348-.939-.206-.207-.58-.469-1.238-.469H23v5h3.546c.696 0 1.097-.23 1.315-.415.283-.25.426-.53.426-.96 0-.431-.155-.908-.737-1.212zm-1.906-.281h-1.428v-1.444h1.495c.956 0 .944 1.444-.067 1.444zm.288 2.157h-1.716v-1.513h1.716c.986 0 1.083 1.513 0 1.513z" fill="#FFF" fill-rule="nonzero"></path></g></svg></li>
                    <li class="mx-1"><svg class="icon icon--full-color" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img" width="38" height="24" aria-labelledby="pi-master"><title id="pi-master">Mastercard</title><path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"></path><path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"></path><circle fill="#EB001B" cx="15" cy="12" r="7"></circle><circle fill="#F79E1B" cx="23" cy="12" r="7"></circle><path fill="#FF5F00" d="M22 12c0-2.4-1.2-4.5-3-5.7-1.8 1.3-3 3.4-3 5.7s1.2 4.5 3 5.7c1.8-1.2 3-3.3 3-5.7z"></path></svg></li>
                    <li class="mx-1"><svg class="icon icon--full-color" viewBox="0 0 38 24" xmlns="http://www.w3.org/2000/svg" role="img" width="38" height="24" aria-labelledby="pi-visa"><title id="pi-visa">Visa</title><path opacity=".07" d="M35 0H3C1.3 0 0 1.3 0 3v18c0 1.7 1.4 3 3 3h32c1.7 0 3-1.3 3-3V3c0-1.7-1.4-3-3-3z"></path><path fill="#fff" d="M35 1c1.1 0 2 .9 2 2v18c0 1.1-.9 2-2 2H3c-1.1 0-2-.9-2-2V3c0-1.1.9-2 2-2h32"></path><path d="M28.3 10.1H28c-.4 1-.7 1.5-1 3h1.9c-.3-1.5-.3-2.2-.6-3zm2.9 5.9h-1.7c-.1 0-.1 0-.2-.1l-.2-.9-.1-.2h-2.4c-.1 0-.2 0-.2.2l-.3.9c0 .1-.1.1-.1.1h-2.1l.2-.5L27 8.7c0-.5.3-.7.8-.7h1.5c.1 0 .2 0 .2.2l1.4 6.5c.1.4.2.7.2 1.1.1.1.1.1.1.2zm-13.4-.3l.4-1.8c.1 0 .2.1.2.1.7.3 1.4.5 2.1.4.2 0 .5-.1.7-.2.5-.2.5-.7.1-1.1-.2-.2-.5-.3-.8-.5-.4-.2-.8-.4-1.1-.7-1.2-1-.8-2.4-.1-3.1.6-.4.9-.8 1.7-.8 1.2 0 2.5 0 3.1.2h.1c-.1.6-.2 1.1-.4 1.7-.5-.2-1-.4-1.5-.4-.3 0-.6 0-.9.1-.2 0-.3.1-.4.2-.2.2-.2.5 0 .7l.5.4c.4.2.8.4 1.1.6.5.3 1 .8 1.1 1.4.2.9-.1 1.7-.9 2.3-.5.4-.7.6-1.4.6-1.4 0-2.5.1-3.4-.2-.1.2-.1.2-.2.1zm-3.5.3c.1-.7.1-.7.2-1 .5-2.2 1-4.5 1.4-6.7.1-.2.1-.3.3-.3H18c-.2 1.2-.4 2.1-.7 3.2-.3 1.5-.6 3-1 4.5 0 .2-.1.2-.3.2M5 8.2c0-.1.2-.2.3-.2h3.4c.5 0 .9.3 1 .8l.9 4.4c0 .1 0 .1.1.2 0-.1.1-.1.1-.1l2.1-5.1c-.1-.1 0-.2.1-.2h2.1c0 .1 0 .1-.1.2l-3.1 7.3c-.1.2-.1.3-.2.4-.1.1-.3 0-.5 0H9.7c-.1 0-.2 0-.2-.2L7.9 9.5c-.2-.2-.5-.5-.9-.6-.6-.3-1.7-.5-1.9-.5L5 8.2z" fill="#142688"></path></svg></li>
                </ul>
            </div>
            <div class="copy">
                <p>&copy; 2022 <?= $name ?> | All Reserved.</p>
                <p class="text-sm">Power by <a href="https://revank.me" class="text-pink-600">Revan</a></p>
            </div>
        </div>
    </footer>
</div>

<script>
    window.addEventListener('scroll', function ()
    {
        let head = document.querySelector('#head');
        if (scrollY > 50) {
            head.classList.add('fixed');
            head.style.animation = 'nav 0.3s';
        }
        else {
            head.classList.remove('fixed');
            head.style.animation = 'none';
        }
    });
</script>
</body>
</html>