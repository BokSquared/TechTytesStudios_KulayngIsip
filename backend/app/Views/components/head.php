<?php
// Component: components/head.php
// Data contract:
// $title: string
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= esc(isset($title) ? $title . " " : " ") ?></title>

    <!-- Google Fonts: Fredoka One + Baloo 2 -->
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Baloo+2:wght@400;600&display=swap" rel="stylesheet">

    <!-- Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        :root {
            --primary: #090e1e;
            --secondary: #ffdb83;
            --background: #e6e75f;
            --accent: #121312;
            --neutral: #fff2d0;
        }

        .font-bubbly {
            font-family: 'Fredoka One', 'Baloo 2', cursive;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            @apply font-bubbly;
            background-color: var(--accent);
            color: var(--neutral);
        }

        h1,
        h2,
        h3,
        h4,
        h5 {
            @apply font-bubbly;
            color: var(--neutral);
        }

        .btn-primary {
            background: var(--primary);
            color: white;
            transition: all 0.3s;
        }

        .btn-primary:hover {
            background: var(--secondary);
        }

        .btn-border {
            border: 2px solid var(--secondary);
            color: var(--secondary);
            transition: all 0.3s;
            font-weight: 600;
        }

        .btn-border:hover {
            background: var(--secondary);
            color: var(--accent);
        }

        ::-webkit-scrollbar {
            width: 12px;
            height: 12px;
        }

        ::-webkit-scrollbar-track {
            background: var(--neutral);
            border-radius: 8px;
        }

        ::-webkit-scrollbar-thumb {
            background: linear-gradient(180deg, var(--primary) 0%, var(--secondary) 100%);
            border-radius: 8px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: linear-gradient(180deg, var(--secondary) 0%, var(--primary) 100%);
        }

        * {
            scrollbar-width: thin;
            scrollbar-color: var(--primary) var(--neutral);
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fadeInUp {
            animation: fadeInUp 0.8s ease-out forwards;
        }

        .reveal-on-scroll {
            opacity: 0;
            transform: translateY(40px);
            transition: opacity 1s ease, transform 1s ease;
        }

        .reveal-on-scroll.appear {
            opacity: 1;
            transform: translateY(0);
        }

        .parallax {
            background-attachment: fixed;
            background-size: cover;
            background-position: center;
        }
    </style>
</head>