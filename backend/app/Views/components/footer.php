<?= view('components/head'); ?>

<footer class="bg-[var(--primary)] border-t border-[var(--secondary)]/20 py-8 px-6 md:px-10">
    <div class="max-w-6xl mx-auto flex items-center justify-between flex-wrap gap-6">

        <!-- Left Side: SDG + Text -->
        <div class="flex items-center gap-4 max-w-md">
            <img
                src="https://sdgs.un.org/sites/default/files/goals/E_SDG_Icons-04.jpg"
                alt="SDG 4 Quality Education"
                class="h-16 md:h-20 object-contain">

            <div class="text-left">
                <h4 class="text-sm font-bold text-[var(--neutral)]">
                    Brought to you by "Enslaved chefs by Niko Anchorez"
                </h4>
                <p class="text-xs text-[var(--neutral)]/70 leading-relaxed">
                    Sponsored by Akechi Goro for images and text
                </p>
            </div>
        </div>

        <!-- Right Side: Two Logos -->
        <div class="flex items-center gap-6">
            <img
                src="https://static.wikia.nocookie.net/megamitensei/images/c/c7/P5R_Logo.png/revision/latest/scale-to-width-down/1000?cb=20190424133557"
                alt="FEU Logo"
                class="h-12 md:h-16 object-contain">

            <img
                src="https://static.wikia.nocookie.net/megamitensei/images/4/43/Goro-disguised.png/revision/latest?cb=20200418193429"
                alt="TechTytes Logo"
                class="h-12 md:h-16 object-contain">
        </div>

    </div>
</footer>