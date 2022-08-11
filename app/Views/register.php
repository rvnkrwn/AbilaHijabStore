<?= $this->extend('layout/template') ?>
<?= $this->section('content') ?>

    <section class="p-2">
        <form action="/save" method="post" class="auth w-fit bg-gray-500 mx-auto text-white text-sm">
            <div class="text-center text-xl font-semibold tracking-wider p-2">
                <h1 class="mb-2">Form Register</h1>
                <i class="far fa-user border rounded-full p-2"></i>
            </div>
            <p class="bg-white"><?= session()->getFlashdata('status'); ?></p>
            <?= csrf_field(); ?>
            <div class="bg-gray-700 w-fit p-2 mx-auto my-1">
                <input type="text" name="name" id="name" placeholder="Full Name" value="<?= session()->getFlashdata('name'); ?>" class="outline-none w-52 bg-transparent placeholder:text-sm">
                <i class="far fa-user"></i>
            </div>
            <div class="bg-gray-700 w-fit p-2 mx-auto my-1">
                <input type="email" name="email" id="email" placeholder="customer@email.com" class="outline-none w-52 bg-transparent placeholder:text-sm">
                <i class="far fa-at"></i>
            </div>
            <div class="bg-gray-700 w-fit p-2 mx-auto my-1">
                <input type="password" name="password" id="password" placeholder="Password" class="outline-none w-52 bg-transparent placeholder:text-sm">
                <i class="far fa-lock"></i>
            </div>
            <div class="text-xs my-1">
                <label for="terms"><input type="checkbox" name="terms" id="terms" required> i agree terms and conditions</label>
            </div>
            <div class="flex justify-between">
                <button type="submit" class="px-4 py-2 text-sm bg-gray-700 my-2 self-center">Login</button>
                <p class="text-sm self-center">have an account? <a href="/login" class="underline">here</a></p>
            </div>
        </form>
    </section>

<?= $this->endSection(); ?>