<?= view('components/head'); ?>
<header class="top-0 z-50 sticky flex justify-end items-center bg-[var(--primary)] px-10 py-6">

    <div class="flex items-center gap-8">
        <nav class="flex gap-8 text-[var(--neutral)] text-sm md:text-base font-bubbly">
            <a href="/" class="hover:text-[var(--background)] transition">Home</a>
            <a href="#" class="hover:text-[var(--background)] transition">About</a>
            <a href="#" class="hover:text-[var(--background)] transition">Blog</a>
            <a href="#" class="hover:text-[var(--background)] transition">Team</a>
        </nav>

        <?= view('components/buttons/button_primary', ['label' => 'Play']); ?>
    </div>

</header>