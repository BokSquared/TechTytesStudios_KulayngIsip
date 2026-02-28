<!DOCTYPE html>
<html lang="en">
<?= view('components/head', ['title' => 'About the Game']) ?>

<body class="text-white font-sans bg-cover bg-center"
    style="background-image: url('https://i.pinimg.com/736x/bc/d9/c4/bcd9c48f8baa8755f593b048dc8eb47d.jpg');">
    <?= view('components/header'); ?>

    <!-- TITLE -->
    <section 
    class="relative w-full h-[30vh] bg-cover bg-center bg-no-repeat animate-fadeInUp"
    style="background-image: url('https://i.pinimg.com/1200x/73/c9/4c/73c94c0671a95647d7ecf726a0ac6ad9.jpg');">
    <div class="absolute inset-0 bg-black/50"></div>

    <div class="relative z-10 flex flex-col items-center justify-center h-full text-center px-6">
        <h1 class="text-4xl md:text-6xl font-bold font-bubbly">
            About the Game
        </h1>
    </div>

    <!-- Overview -->
    <section id="overview" class="reveal-on-scroll bg-white pt-16 pb-12 px-6 md:px-10">

    <div class="max-w-5xl mx-auto flex flex-col md:flex-row items-center gap-8 mb-12">
    <div class="md:w-[70%] text-left">
        <h2 class="text-4xl font-bold mb-4 text-[var(--accent)]">
            Kulay ng Isip is a game about<br>colors, creativity, and imagination
        </h2>
        <p class="text-[var(--accent)] leading-relaxed">
            Learn about colors by playing and trying things out.<br>
            You can mix colors, discover new ones, and see<br>
            what happens when you experiment.<br><br>
            Your choices and ideas make each experience different.<br>
        </p>
    </div>
    <div class="md:w-[30%] flex justify-center -translate-x-20">
        <div class="overflow-hidden rounded-l shadow-lg w-full">
            <img src="https://static.wikia.nocookie.net/megamitensei/images/7/71/PQ2_Goro_Akechi.png/revision/latest?cb=20180901212516"
                 alt="Main Character" class="w-full h-full object-cover">
            </div>
        </div>
    </div>

    <div class="max-w-5xl mx-auto flex flex-col md:flex-row items-center gap-8 mb-12 px-6 md:px-0">
        <div class="md:w-[30%] flex justify-center items-center">
            <div class="overflow-hidden rounded-xl shadow-lg w-full">
                <img src="https://static.wikia.nocookie.net/megamitensei/images/a/af/PQ2_Goro_Akechi_%28Crow%29.png/revision/latest?cb=20180901212616" 
                     alt="canvas npc" 
                     class="w-full h-full object-cover">
            </div>
        </div>
        <div class="md:w-[70%] text-left">
            <h2 class="text-4xl font-bold mb-4 text-[var(--accent)]">How Do You Play?</h2>
            <p class="text-[var(--accent)] leading-relaxed">
                You play differently by exploring the world of colors. <br>
                You try different combinations and solve fun challenges in your<br>own way.<br>
                <br>- Mix colors
                <br>- Test ideas
                <br>- Discover something new
                <br><br>The game lets you learn by doing and gaming at the same time.
            </p>
        </div>
    </div>

    <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 mb-12">
        <img src="https://static.wikia.nocookie.net/megamitensei/images/c/c0/P5_portrait_of_Goro%27s_traitor_outfit.png/revision/latest?cb=20200701151207" alt="" class="w-full h-full object-cover rounded-lg shadow-lg">
        <img src="https://static.wikia.nocookie.net/megamitensei/images/d/d7/Goro-evil-traitor.png/revision/latest?cb=20200701151213" alt="" class="w-full h-full object-cover rounded-lg shadow-lg">
        <img src="https://static.wikia.nocookie.net/megamitensei/images/2/22/Goro-angry-traitor.png/revision/latest?cb=20200701151223" alt="" class="w-full h-full object-cover rounded-lg shadow-lg">
        <img src="https://static.wikia.nocookie.net/megamitensei/images/f/f5/Goro-upset-traitor.png/revision/latest?cb=20200701151231" alt="" class="w-full h-full object-cover rounded-lg shadow-lg">
    </div>

    <div class="max-w-6xl mx-auto text-center grid grid-cols-1 md:grid-cols-5 gap-4 mb-12">
        <div class="md:col-span-5">
            <h2 class="text-3xl font-bold mb-4 text-[var(--accent)]">Mix colors to solve and fight</h2>
            <p class="text-[var(--accent)] leading-relaxed">
                Learning doesn't have to feel like homework. Here, learning feels like a game<br>
                As you play, you will understand colors, shapes, and ideas in a fun and exciting way.
            </p>
        </div>
    </div>

    <div class="max-w-6xl mx-auto flex flex-col gap-6">
        <div class="relative rounded-lg shadow-lg overflow-hidden h-64 md:h-80">
            <img src="https://static.wikia.nocookie.net/megamitensei/images/3/32/Akechi_FinishingTouch.png/revision/latest/scale-to-width-down/1000?cb=20200508081906" alt="Kapatagang Guhit" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-red-500/30"></div>
            <div class="absolute bottom-0 left-0 p-4 text-white font-bold rounded-tr-lg text-2xl">
            Stage 1 Enviornment    
        </div>
        </div>

        <div class="relative rounded-lg shadow-lg overflow-hidden h-64 md:h-80">
            <img src="https://static.wikia.nocookie.net/megamitensei/images/a/af/P5_Goro_cut-in.png/revision/latest/scale-to-width-down/1000?cb=20200415173446" alt="Luntian Grove" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-green-500/30"></div>
            <div class="absolute bottom-0 left-0 p-4 text-white font-bold rounded-tr-lg text-2xl">
            Stage 2 Enviornment    
        </div>
        </div>

        <div class="relative rounded-lg shadow-lg overflow-hidden h-64 md:h-80">
            <img src="https://static.wikia.nocookie.net/megamitensei/images/d/dc/Akechi_Black_Mask_All_Out_Attack.png/revision/latest/scale-to-width-down/1000?cb=20200508081338" alt="Lake Pintados" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-blue-500/30"></div>
            <div class="absolute bottom-0 left-0 p-4 text-white font-bold rounded-tr-lg text-2xl">
            Stage 3 Enviornment    
        </div>
        </div>
    </div>
    </section>

    <section class="py-16 px-6 md:px-10 bg-transparent">
    <div class="max-w-4xl mx-auto text-center">
        <h2 class="text-4xl font-bold text-white mb-8">
            Frequently Asked Questions
        </h2>
        <div class="overflow-x-auto">
            <table class="w-full border-2 border-white text-left">
                <tr class="border-2 border-white">
                    <td class="px-4 py-3 font-bold border-b border-white">
                        What is this game about?
                    </td>
                </tr>
                <tr class="border-2 border-white">
                    <td class="px-4 py-3 font-bold border-b border-white">
                        Who can play this game?
                    </td>
                </tr>
                <tr class="border-2 border-white">
                    <td class="px-4 py-3 font-bold border-b border-white">
                        What will I learn from the game?
                    </td>
                </tr>
                <tr class="border-2 border-white">
                    <td class="px-4 py-3 font-bold border-b border-white">
                        Do I need to know about colors before playing?
                    </td>
                </tr>
            </table>
        </div>
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