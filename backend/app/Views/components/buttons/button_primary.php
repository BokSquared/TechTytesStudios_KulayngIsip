<?php if ($disable ?? false) : ?>
    <a href="<?= esc($href ?? '#') ?>"
        class="inline-block opacity-50 px-6 py-2 rounded-lg font-bubbly font-semibold
               text-[var(--neutral)] bg-[var(--background)] shadow-inner"
        style="-webkit-text-stroke: 0.5px var(--accent);">
        <?= esc($label ?? 'Primary') ?>
    </a>

<?php elseif ($dark ?? false) : ?>
    <a href="<?= esc($href ?? '#') ?>"
        class="inline-block px-6 py-2 rounded-lg font-bubbly font-semibold
               text-[var(--neutral)] bg-[var(--background)]"
        style="-webkit-text-stroke: 1px var(--primary);">
        <?= esc($label ?? 'Primary') ?>
    </a>

<?php else : ?>
    <a href="<?= esc($href ?? '#') ?>"
        class="inline-block px-6 py-2 rounded-lg font-bubbly font-semibold
               text-[var(--neutral)] bg-[var(--background)]"
        style="-webkit-text-stroke: 1px var(--accent);">
        <?= esc($label ?? 'Primary') ?>
    </a>
<?php endif; ?>