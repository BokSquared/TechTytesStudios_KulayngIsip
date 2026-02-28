<!DOCTYPE html>
<html lang="en">
<?= view('components/head', ['title' => 'Kulay ng Isip']) ?>

<body class="text-white font-sans bg-cover bg-center"
    style="background-image: url('https://i.pinimg.com/736x/bc/d9/c4/bcd9c48f8baa8755f593b048dc8eb47d.jpg');">
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

            <h3 class="text-3xl font-bold text-[var(--accent)] mb-6">
                Bring color back. Play, learn, and create!
            </h3>

            <p class="text-black leading-relaxed mb-6">
                Kulay ng Isip is a fun PC game where you go on an adventure inside a<br>
                magical world that has lost its colors. You will solve puzzles, mix colors,<br>
                and help bring happiness and creativity back to the land.
            </p>
            <br>
            <br>
        </div>
    </section>

    <!-- COLORS -->
    <section class="relative -mt-24 px-6 md:px-10">
        <div class="max-w-6xl mx-auto grid sm:grid-cols-1 md:grid-cols-3 gap-6">

            <div class="relative overflow-hidden rounded-xl shadow-lg">
                <img src="https://i.pinimg.com/1200x/11/7a/e2/117ae2efcbacce6aff0fcf32c6a589ee.jpg"
                    alt="Primary Colors"
                    class="w-full h-full object-cover">
                <h4 class="absolute bottom-0 left-1/2 -translate-x-1/2 w-full text-center text-white font-bold text-xl py-2">
                    Primary<br>Colors
                </h4>
            </div>

            <div class="relative overflow-hidden rounded-xl shadow-lg">
                <img src="https://i.pinimg.com/736x/f6/9f/b9/f69fb955aebe93c0bb4c606be8d02b8a.jpg"
                    alt="Secondary Colors"
                    class="w-full h-full object-cover">
                <h4 class="absolute bottom-0 left-1/2 -translate-x-1/2 w-full text-center text-white font-bold text-xl py-2">
                    Secondary<br>Colors
                </h4>
            </div>

            <div class="relative overflow-hidden rounded-xl shadow-lg">
                <img src="https://i.pinimg.com/1200x/be/ab/83/beab835cb836a4fd83dc91f9476ed6d3.jpg"
                    alt="Tertiary Colors"
                    class="w-full h-full object-cover">
                <h4 class="absolute bottom-0 left-1/2 -translate-x-1/2 w-full text-center text-white font-bold text-xl py-2">
                    Tertiary<br>Colors
                </h4>
            </div>

        </div>
    </section>

    <!-- OVERVIEW -->
    <section class="relative px-6 md:px-10 mt-12">
        <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-8 items-center">

            <div class="relative overflow-hidden rounded-xl shadow-lg">
                <img src="https://static.wikia.nocookie.net/megamitensei/images/8/81/P5T_Goro_Akechi.png/revision/latest?cb=20230807102252"
                    alt="Main Character"
                    class="w-full h-full object-cover">
            </div>

            <div class="text-white text-center md:text-left">
                <h2 class="text-3xl font-bold mb-4">
                    Learn While You Play
                </h2>
                <p class="leading-relaxed">
                    Learning doesn't have to feel like a homework.<br>
                    Here, learning feels like a game. <br>
                    As you play, you will understand colors, shapes, and <br>
                    ideas in a fun and exciting way.
                </p>
            </div>
        </div>
    </section>

    <!-- MEDIA -->
    <section class="relative px-6 md:px-10 mt-20">
        <div class="max-w-6xl mx-auto">

            <div class="w-full aspect-video overflow-hidden rounded-xl shadow-lg mb-10">
                <iframe
                    class="w-full h-full"
                    src="https://www.youtube.com/embed/dQw4w9WgXcQ"
                    title="Kulay ng Isip Trailer"
                    frameborder="0"
                    allowfullscreen>
                </iframe>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 mb-12">
                <img src="https://static.wikia.nocookie.net/megamitensei/images/2/25/P5_portrait_of_Goro.png/revision/latest?cb=20200701144949"
                    class="rounded-xl shadow-lg object-cover w-full h-56">

                <img src="https://static.wikia.nocookie.net/megamitensei/images/0/04/P5_portrait_of_Goro_smiling.png/revision/latest?cb=20200701144951"
                    class="rounded-xl shadow-lg object-cover w-full h-56">

                <img src="https://static.wikia.nocookie.net/megamitensei/images/6/61/P5R_Portrait_Akechi_Casual.png/revision/latest?cb=20200418194021"
                    class="rounded-xl shadow-lg object-cover w-full h-56">

                <img src="https://static.wikia.nocookie.net/megamitensei/images/8/8e/P5R_Portrait_Akechi_Winter_Coat_2.png/revision/latest?cb=20200418194153"
                    class="rounded-xl shadow-lg object-cover w-full h-56">

                <img src="https://static.wikia.nocookie.net/megamitensei/images/b/b6/P5R_Portrait_Akechi_Winter_Coat_1.png/revision/latest?cb=20200418194113"
                    class="rounded-xl shadow-lg object-cover w-full h-56">

                <img src="https://static.wikia.nocookie.net/megamitensei/images/1/1e/P5R_Portrait_Black_Mask_Smiling.png/revision/latest?cb=20200418195057"
                    class="rounded-xl shadow-lg object-cover w-full h-56">
            </div>

            <div class="text-center text-white">
                <h1 class="text-3xl font-bold mb-4">
                    Gamifyinng a Learning Approach
                </h1>
                <p class="max-w-3xl mx-auto leading-relaxed">
                    I thought Persona 5, you can smash Akechi...<br>
                    Why can't I smash Akechi? <br>
                    I really want to smash Akechi <br>
                </p>
            </div>
            <br><br>
        </div>
    </section>

    <?= view('components/cta'); ?>

    <button id="scrollTopBtn" class="hidden fixed bottom-8 right-8 bg-[var(--background)] text-[var(--accent)] px-4 py-2 rounded-full shadow-md">
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