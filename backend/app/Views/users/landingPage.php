<!DOCTYPE html>
<html lang="en">
<?= view('components/head', ['title' => 'Kulay ng Isip']) ?>

<body class="bg-[var(--accent)] text-white font-sans">
    <?= view('components/header'); ?>

    <!-- TITLE -->
    <section class="relative w-full h-[80vh] bg-cover bg-center bg-no-repeat animate-fadeInUp"
        style="background-image: url('https://i.pinimg.com/1200x/73/c9/4c/73c94c0671a95647d7ecf726a0ac6ad9.jpg');">
        <div class="relative z-10 flex flex-col items-center justify-end h-full pb-8 text-center text-white">
            <div class="flex flex-col items-center gap-4">
                <?= view('components/buttons/button_secondary', ['label' => 'Play Game', 'href' => '#']); ?>
            </div>
        </div>
    </section>

    <!-- ABOUT -->
    <section id="about" class="reveal-on-scroll bg-white pt-16 pb-12 px-6 md:px-10">
        <div class="max-w-4xl mx-auto text-center">
            <!-- Title -->
            <h3 class="text-3xl font-bold text-[var(--accent)] mb-6">
                Bring color back. Play, learn, and create!
            </h3>

            <!-- Description -->
            <p class="text-black leading-relaxed mb-6">
                Kulay ng Isip is a fun PC game where you go on an adventure inside a
                magical world that has lost its colors. You will solve puzzles, mix colors,
                and help bring happiness and creativity back to the land.
            </p>
        </div>
    </section>


    <!-- DI KO SURE -->
    <section class="bg-[var(--accent)] py-24 px-6 md:px-10 animate-fadeInUp">
        <h3 class="text-3xl font-bold text-center text-[var(--neutral)] mb-14">
            Featured <span class="text-[var(--secondary)]">Artworks</span>
        </h3>
        <div class="grid sm:grid-cols-2 md:grid-cols-3 gap-12 max-w-6xl mx-auto">
            <?php
            $artworks = [
                ["img" => "https://i.pinimg.com/736x/ac/8c/79/ac8c790b5b99c2d8ae52bd4f87f4062e.jpg", "title" => "727", "artist" => "Takashi Murakami"],
                ["img" => "https://i.pinimg.com/736x/0b/f7/31/0bf73170624ab7a124adef98ebf4461d.jpg", "title" => "Lady Murasaki Writing at Her Desk", "artist" => "Tosa Mitsuoki"],
                ["img" => "https://i.pinimg.com/1200x/dd/36/39/dd3639c5b1a79caf949a5b641705a8f2.jpg", "title" => "Dots Obsession", "artist" => "Yayoi Kusama"]
            ];
            foreach ($artworks as $art) : ?>
                <div class="bg-[#1b1b1b] rounded-xl overflow-hidden shadow-lg transform hover:scale-[1.03] transition duration-300">
                    <div class="aspect-[4/5] overflow-hidden">
                        <img src="<?= $art['img'] ?>" alt="<?= $art['title'] ?>"
                            class="w-full h-full object-cover hover:opacity-90 transition">
                    </div>
                    <div class="p-6 text-center">
                        <h4 class="text-[var(--neutral)] text-xl font-semibold mb-1">“<?= $art['title'] ?>”</h4>
                        <p class="text-[var(--neutral)]/70 text-sm italic"><?= $art['artist'] ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <?= view('components/cta'); ?>

    <button id="scrollTopBtn" class="hidden fixed bottom-8 right-8 bg-[var(--secondary)] text-[var(--accent)] px-4 py-2 rounded-full shadow-md hover:bg-[var(--primary)] transition">
        ↑ Top
    </button>

    <?= view('components/footer'); ?>

    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const observers = document.querySelectorAll(".reveal-on-scroll");
            const options = {
                threshold: 0.1,
                rootMargin: "0px 0px -100px 0px"
            };
            const observer = new IntersectionObserver((entries, obs) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("appear");
                        obs.unobserve(entry.target);
                    }
                });
            }, options);
            observers.forEach(el => observer.observe(el));
        });

        window.addEventListener("scroll", () => {
            const hero = document.querySelector("section[style*='background-image']");
            let offset = window.pageYOffset;
            hero.style.backgroundPositionY = offset * 0.4 + "px";
        });

        const scrollBtn = document.getElementById("scrollTopBtn");
        window.addEventListener("scroll", () => {
            scrollBtn.classList.toggle("hidden", window.scrollY <= 400);
        });
        scrollBtn.addEventListener("click", () => {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        });
    </script>
</body>

</html>