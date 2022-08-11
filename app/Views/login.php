<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>
<?php
    if (isset($_SESSION['login']))
    {
        if ($_SESSION['login'] === true){
            header('Location: /');
        }
    }
?>
    <section class="p-2">
        <form action="/check" method="post" class="auth w-fit bg-gray-500 mx-auto text-white text-sm">
            <div class="text-center text-xl font-semibold tracking-wider p-2">
                <h1 class="mb-2">Form Login</h1>
                <i class="far fa-user border rounded-full p-2"></i>
            </div>
            <p class="bg-white"><?= session()->getFlashdata('status'); ?></p>
            <?= csrf_field(); ?>
            <div class="bg-gray-700 w-fit p-2 mx-auto my-1">
                <input type="email" name="email" id="email" value="<?= session()->getFlashdata('email'); ?>" placeholder="customer@email.com" class="outline-none bg-transparent w-52 placeholder:text-sm">
                <i class="far fa-at"></i>
            </div>
            <div class="bg-gray-700 w-fit p-2 mx-auto my-1">
                <input type="password" name="password" id="password" placeholder="Password" class="outline-none bg-transparent w-52 placeholder:text-sm">
                <i class="far fa-lock"></i>
            </div>
            <div class="flex justify-between">
                <button type="submit" class="px-4 py-2 text-sm bg-gray-700 my-2 self-center">Login</button>
                <a href="" class="self-center underline text-sm">Forget password</a>
            </div>
            <p class="text-sm">Dont have an account? <a href="/register" class="underline">here</a></p>
        </form>
    </section>

<?= $this->endSection(); ?>