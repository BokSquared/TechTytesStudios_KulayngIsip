<?php if ($disable ?? false) : ?>
    <a href="<?= esc($href ?? '#') ?>"
        class="inline-block opacity-50 px-6 py-2 rounded-lg font-bubbly
               text-[var(--accent)] bg-[var(--background)] shadow-inner">
        <?= esc($label ?? 'Primary') ?>
    </a>

<?php elseif ($dark ?? false) : ?>
    <a href="<?= esc($href ?? '#') ?>"
        class="inline-block px-6 py-2 rounded-lg font-bubbly
               text-[var(--accent)] bg-[var(--background)]">
        <?= esc($label ?? 'Primary') ?>
    </a>

<?php else : ?>
    <a href="<?= esc($href ?? '#') ?>"
        class="inline-block px-6 py-2 rounded-lg font-bubbly
               text-[var(--accent)] bg-[var(--background)]">
        <?= esc($label ?? 'Primary') ?>
    </a>
<?php endif; ?>