<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Synergie UP | Communication & Événementiel - Lubumbashi</title>
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;700;800;900&display=swap" rel="stylesheet">
    <style>
        :root {
            --couleur1: #004A63;
            --couleur2: #004A63;
            --couleur3: #F1BC54;
            --couleur4: #FFE6EA;
        }

        * {
            font-family: 'Poppins', sans-serif;
        }

        html {
            scroll-behavior: smooth;
        }

        @font-face {
            font-family: 'Broaek';
            src: url('/fonts/Broaek-Regular.ttf') format('truetype');
            font-weight: normal;
            font-style: normal;
        }

        .font-title {
            font-family: 'Broaek', sans-serif;
        }

        /* Custom animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .animate-fadeInUp {
            animation: fadeInUp 0.6s ease-out;
        }

        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 10px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: var(--couleur1);
            border-radius: 5px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: var(--couleur2);
        }

        .navbar-base {
            background: transparent;
            box-shadow: none;
            backdrop-filter: blur(0);
            -webkit-backdrop-filter: blur(0);
            border-bottom: 1px solid transparent;
        }

        .navbar-scrolled {
            background: rgba(255, 255, 255, 0.14);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.18);
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.28);
            border-bottom-left-radius: 1.1rem;
            border-bottom-right-radius: 1.1rem;
        }

        .nav-link {
            position: relative;
            padding-bottom: 0.2rem;
            text-shadow: 0 1px 2px rgba(0, 0, 0, 0.22);
        }

        .nav-link::after {
            content: "";
            position: absolute;
            left: 0;
            bottom: -2px;
            width: 100%;
            height: 2px;
            border-radius: 999px;
            background: var(--couleur3);
            transform: scaleX(0);
            transform-origin: left;
            transition: transform 0.25s ease;
        }

        .nav-link:hover::after,
        .nav-link.is-active::after {
            transform: scaleX(1);
        }

        .nav-link.is-active {
            color: var(--couleur3) !important;
        }

        .section-indicator {
            width: 84px;
            height: 6px;
            border-radius: 999px;
            background: linear-gradient(90deg, var(--couleur1), var(--couleur3));
            box-shadow: 0 6px 14px rgba(0, 74, 99, 0.22);
        }

        .neo-card-light {
            position: relative;
            border-radius: 1.1rem;
            padding-top: 1.1rem;
            border: 1px solid #dde4ea;
            background: #f2f4f7;
            box-shadow: 0 6px 14px rgba(0, 0, 0, 0.08);
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .neo-card-light:hover {
            transform: translateY(-6px);
            box-shadow: 0 12px 22px rgba(0, 0, 0, 0.12);
        }

        .neo-card-light::before {
            content: "";
            position: absolute;
            left: 0;
            top: 1.1rem;
            width: 5px;
            height: 62px;
            border-radius: 999px;
            background: var(--couleur3);
            box-shadow: 0 0 10px rgba(241, 188, 84, 0.35);
        }

        .neo-icon-light {
            width: 3.4rem;
            height: 3.4rem;
            border-radius: 999px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #ffffff;
            border: 1px solid #dbe3e8;
            margin-bottom: 1rem;
        }

        .partners-marquee {
            overflow: hidden;
            position: relative;
        }

        .partners-track {
            display: flex;
            gap: 1rem;
            width: max-content;
            animation: partners-scroll 24s linear infinite;
        }

        .partners-marquee:hover .partners-track {
            animation-play-state: paused;
        }

        .partner-pill {
            min-width: 300px;
            min-height: 120px;
        }

        @keyframes partners-scroll {
            from {
                transform: translateX(0);
            }
            to {
                transform: translateX(calc(-50% - 0.5rem));
            }
        }

        /* Services section - dark mode using brand blue */
        #services {
            background: linear-gradient(160deg, #022c3b 0%, #004a63 45%, #012736 100%);
            position: relative;
        }

        #mainFooter {
            background: linear-gradient(160deg, #022c3b 0%, #004a63 45%, #012736 100%);
            position: relative;
        }

        #services::before {
            content: "";
            position: absolute;
            inset: 0;
            background: radial-gradient(circle at 20% 15%, rgba(241, 188, 84, 0.1), transparent 32%);
            pointer-events: none;
        }

        #services .container {
            position: relative;
            z-index: 1;
        }

        #services h2,
        #services .text-synergie-secondary {
            color: #f8fbfd !important;
        }

        #services .text-gray-600 {
            color: #ffffff !important;
        }

        #services .w-20.h-1 {
            background-color: var(--couleur3) !important;
        }

        #services .inline-flex.rounded-full {
            background: rgba(255, 255, 255, 0.09) !important;
            border: 1px solid rgba(255, 255, 255, 0.18);
            backdrop-filter: blur(6px);
            -webkit-backdrop-filter: blur(6px);
        }

        #services .tab-button {
            color: #d6e4ea !important;
        }

        #services #tabCommunication.bg-synergie-primary,
        #services #tabEvenementiel.bg-synergie-primary {
            background-color: var(--couleur3) !important;
            color: #062b38 !important;
        }

        #services .tab-button:hover {
            color: #ffffff !important;
        }

        #services .bg-white {
            background: rgba(7, 38, 53, 0.85) !important;
            border: 1px solid rgba(255, 255, 255, 0.12);
            box-shadow: 0 14px 30px rgba(0, 0, 0, 0.26);
        }

        #services .border-l-4 {
            border-left-width: 0 !important;
        }

        #services .bg-synergie-light {
            background-color: rgba(255, 255, 255, 0.12) !important;
        }

        #services .text-synergie-primary,
        #services .fa-check {
            color: var(--couleur3) !important;
        }

        #services .service-neo-card span {
            color: #f7fbff;
        }

        #services .bg-gray-50 {
            background: rgba(255, 255, 255, 0.1) !important;
            color: #eef6fa;
        }

        #services .service-neo-card {
            position: relative;
            border-radius: 1.1rem;
            overflow: hidden;
            padding-top: 1.2rem;
        }

        #services .service-neo-card::before {
            content: "";
            position: absolute;
            left: 0;
            top: 1.1rem;
            width: 5px;
            height: 64px;
            border-radius: 999px;
            background: var(--couleur3);
            box-shadow: 0 0 12px rgba(241, 188, 84, 0.45);
        }

        #services .service-neo-card .service-icon {
            width: 3.4rem;
            height: 3.4rem;
            border-radius: 999px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.18);
            margin-bottom: 1rem;
        }

        #services .service-neo-card h3 {
            color: #ffffff !important;
        }

        #services .service-neo-card p,
        #services .service-neo-card .text-gray-600 {
            color: #d0e0e8 !important;
        }

    </style>
    <!-- Tailwind Configuration -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'synergie-primary': '#F1BC54',
                        'synergie-secondary': '#004A63',
                        'synergie-accent': '#F1BC54',
                        'synergie-light': '#004A63',
                    },
                    fontFamily: {
                        'poppins': ['Poppins', 'sans-serif'],
                    },
                    animation: {
                        'float': 'float 3s ease-in-out infinite',
                    },
                    keyframes: {
                        float: {
                            '0%, 100%': { transform: 'translateY(0)' },
                            '50%': { transform: 'translateY(-10px)' },
                        }
                    }
                }
            }
        }
    </script>
</head>
<body class="font-poppins">
    <!-- Navigation -->
    <nav id="navbar" class="fixed w-full z-50 transition-all duration-300 navbar-base">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-4">
                <!-- Logo -->
                <a href="#accueil" class="flex items-center space-x-2">
                    <div class="w-10 h-10  overflow-hidden flex items-center justify-center">
                        <img src="{{ asset('assets/imgs/synergie-up-logo.png') }}" alt="Logo Synergie UP" class="w-full h-full object-cover">
                    </div>
                   <div>
                        <span class="text-2xl font-black text-synergie-secondary font-title">Synergie</span>
                        <span class="text-2xl font-black text-synergie-primary font-title">up</span>
                    </div>
                </a>

                <!-- Desktop Menu -->
                <div class="hidden md:flex space-x-8">
                    <a href="#accueil" class="nav-link font-semibold text-white hover:text-synergie-primary transition-colors duration-300">
                        Accueil
                    </a>
                    <a href="#apropos" class="nav-link font-semibold text-white hover:text-synergie-primary transition-colors duration-300">
                        À Propos
                    </a>
                    <a href="#services" class="nav-link font-semibold text-white hover:text-synergie-primary transition-colors duration-300">
                        Services
                    </a>
                    <a href="#realisations" class="nav-link font-semibold text-white hover:text-synergie-primary transition-colors duration-300">
                        Réalisations
                    </a>
                    <a href="#partenaires" class="nav-link font-semibold text-white hover:text-synergie-primary transition-colors duration-300">
                        Partenaires
                    </a>
                    <a href="#contact" class="nav-link font-semibold text-white hover:text-synergie-primary transition-colors duration-300">
                        Contact
                    </a>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobileMenuButton" class="md:hidden text-synergie-secondary text-2xl">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobileMenu" class="md:hidden absolute top-full left-0 w-full bg-white shadow-lg hidden">
            <div class="flex flex-col space-y-4 p-6">
                <a href="#accueil" class="font-semibold text-synergie-secondary hover:text-synergie-primary transition-colors duration-300 py-2">
                    Accueil
                </a>
                <a href="#apropos" class="font-semibold text-synergie-secondary hover:text-synergie-primary transition-colors duration-300 py-2">
                    À Propos
                </a>
                <a href="#services" class="font-semibold text-synergie-secondary hover:text-synergie-primary transition-colors duration-300 py-2">
                    Services
                </a>
                <a href="#realisations" class="font-semibold text-synergie-secondary hover:text-synergie-primary transition-colors duration-300 py-2">
                    Réalisations
                </a>
                <a href="#partenaires" class="font-semibold text-synergie-secondary hover:text-synergie-primary transition-colors duration-300 py-2">
                    Partenaires
                </a>
                <a href="#contact" class="font-semibold text-synergie-secondary hover:text-synergie-primary transition-colors duration-300 py-2">
                    Contact
                </a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="accueil" class="min-h-screen relative flex items-center justify-center pt-16">
        <!-- Background Video/Image -->
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-black/70 z-10"></div>
            <img src="https://images.unsplash.com/photo-1497366754035-f200968a6e72?ixlib=rb-4.0.3&auto=format&fit=crop&w=1600&q=80"
                 alt="Hero Background"
                 class="w-full h-full object-cover">
                </div>

        <div class="container mx-auto px-4 z-20 text-center">
            <div class="animate-fadeInUp">
                <h1 class="text-4xl md:text-6xl lg:text-7xl font-title text-white mb-6">
                    Synergie <span class="text-synergie-accent font-title">up</span>
                </h1>
                <h2 class="text-2xl md:text-3xl font-bold text-white mb-8">
                    Communication & Événementiel
                </h2>
                <p class="text-xl text-gray-200 mb-10 max-w-2xl mx-auto">
                    Nous aidons les marques et entreprises de Lubumbashi à gagner en visibilité
                    et en impact avec des solutions créatives et événementielles sur mesure.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#services"
                       class="bg-synergie-secondary hover:bg-transparent hover:border-white border-2 border-synergie-secondary text-white  px-8 py-3 rounded-full font-semibold transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg">
                        Demander un devis
                    </a>
                    <a href="#contact"
                       class="bg-transparent hover:bg-synergie-accent border-2 border-synergie-accent text-synergie-accent hover:text-white px-8 py-3 rounded-full font-semibold transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg">
                        Planifier un échange
                    </a>
                </div>
            </div>
        </div>

        <!-- Scroll Indicator -->
        <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
            <a href="#apropos" class="text-white text-2xl">
                <i class="fas fa-chevron-down"></i>
            </a>
        </div>
    </section>

    <!-- Preuves -->
    <section id="preuves" class="py-12 bg-white">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-6 mb-10">
                <div class="bg-gray-50 border border-gray-100 rounded-2xl p-6 text-center">
                    <p class="text-3xl font-black text-synergie-secondary">50+</p>
                    <p class="text-gray-600 mt-2">projets livrés</p>
                </div>
                <div class="bg-gray-50 border border-gray-100 rounded-2xl p-6 text-center">
                    <p class="text-3xl font-black text-synergie-secondary">30+</p>
                    <p class="text-gray-600 mt-2">clients accompagnés</p>
                </div>
                <div class="bg-gray-50 border border-gray-100 rounded-2xl p-6 text-center">
                    <p class="text-3xl font-black text-synergie-secondary">98%</p>
                    <p class="text-gray-600 mt-2">clients satisfaits</p>
                </div>
                <div class="bg-gray-50 border border-gray-100 rounded-2xl p-6 text-center">
                    <p class="text-3xl font-black text-synergie-secondary">2 ans +</p>
                    <p class="text-gray-600 mt-2">d'expérience terrain</p>
                </div>
            </div>

            
        </div>
    </section>

    <!-- Processus -->
    <section id="processus" class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-black text-synergie-secondary mb-4">
                    Notre <span class="text-synergie-primary">Processus</span>
                </h2>
                <div class="section-indicator mx-auto mb-6"></div>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Une méthode claire en 4 étapes pour transformer vos idées en résultats concrets.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm hover:shadow-md transition-all duration-300">
                    <div class="w-12 h-12 rounded-full bg-synergie-light/10 flex items-center justify-center mb-4">
                        <i class="fas fa-comments text-synergie-primary"></i>
                    </div>
                    <p class="text-sm font-semibold text-synergie-primary mb-1">01</p>
                    <h3 class="text-lg font-bold text-synergie-secondary mb-2">Brief & Diagnostic</h3>
                    <p class="text-gray-600 text-sm">Nous analysons vos objectifs, votre audience et vos contraintes.</p>
                </div>

                <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm hover:shadow-md transition-all duration-300">
                    <div class="w-12 h-12 rounded-full bg-synergie-light/10 flex items-center justify-center mb-4">
                        <i class="fas fa-pen-ruler text-synergie-primary"></i>
                    </div>
                    <p class="text-sm font-semibold text-synergie-primary mb-1">02</p>
                    <h3 class="text-lg font-bold text-synergie-secondary mb-2">Concept créatif</h3>
                    <p class="text-gray-600 text-sm">Nous construisons une direction visuelle et un plan d'action précis.</p>
                </div>

                <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm hover:shadow-md transition-all duration-300">
                    <div class="w-12 h-12 rounded-full bg-synergie-light/10 flex items-center justify-center mb-4">
                        <i class="fas fa-gears text-synergie-primary"></i>
                    </div>
                    <p class="text-sm font-semibold text-synergie-primary mb-1">03</p>
                    <h3 class="text-lg font-bold text-synergie-secondary mb-2">Production</h3>
                    <p class="text-gray-600 text-sm">Nous exécutons avec rigueur : design, contenu et logistique.</p>
                </div>

                <div class="bg-white rounded-2xl p-6 border border-gray-100 shadow-sm hover:shadow-md transition-all duration-300">
                    <div class="w-12 h-12 rounded-full bg-synergie-light/10 flex items-center justify-center mb-4">
                        <i class="fas fa-chart-simple text-synergie-primary"></i>
                    </div>
                    <p class="text-sm font-semibold text-synergie-primary mb-1">04</p>
                    <h3 class="text-lg font-bold text-synergie-secondary mb-2">Livraison & Suivi</h3>
                    <p class="text-gray-600 text-sm">Nous livrons, mesurons l'impact et optimisons les prochaines actions.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- À Propos -->
    <section id="apropos" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-black text-synergie-secondary mb-4">
                    À <span class="text-synergie-primary ">Propos</span>
                </h2>
                <div class="section-indicator mx-auto mb-8"></div>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Synergie UP est une agence de communication et d'événementiel basée à Lubumbashi,
                    alliant créativité, professionnalisme et innovation pour créer un impact maximal.
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-8 items-center mb-12">
                <div class="bg-white rounded-2xl p-8 shadow-lg border border-gray-100">
                    <p class="text-synergie-primary font-semibold mb-3">Notre approche</p>
                    <h3 class="text-2xl md:text-3xl font-black text-synergie-secondary mb-4">
                        Une équipe créative orientée résultats
                    </h3>
                    <p class="text-gray-600 leading-relaxed">
                        Nous combinons stratégie, design et exécution terrain pour créer des campagnes
                        et événements qui marquent durablement votre audience.
                    </p>
                </div>
                <div class="relative">
                    <img
                        src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?auto=format&fit=crop&w=1200&q=80"
                        alt="Illustration de l'équipe Synergie UP"
                        class="w-full h-[320px] object-cover rounded-2xl shadow-xl"
                    >
                    <div class="absolute -bottom-4 -left-4 bg-white rounded-xl shadow-md px-4 py-3 border border-gray-100">
                        <p class="text-sm font-semibold text-synergie-secondary">Communication visuelle</p>
                        <p class="text-xs text-gray-500">Branding • Production • Événementiel</p>
                    </div>
                </div>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Valeur 1 -->
                <div class="neo-card-light p-8">
                    <div class="neo-icon-light">
                        <i class="fas fa-lightbulb text-3xl text-synergie-primary"></i>
                    </div>
                    <h3 class="text-xl font-bold text-synergie-secondary mb-4">Créativité</h3>
                    <p class="text-gray-600">
                        Des solutions innovantes et uniques qui marquent les esprits et différencient votre marque.
                    </p>
                </div>

                <!-- Valeur 2 -->
                <div class="neo-card-light p-8">
                    <div class="neo-icon-light">
                        <i class="fas fa-tasks text-3xl text-synergie-primary"></i>
                    </div>
                    <h3 class="text-xl font-bold text-synergie-secondary mb-4">Rigueur</h3>
                    <p class="text-gray-600">
                        Un professionnalisme exemplaire à chaque étape, de la conception à la réalisation.
                    </p>
                </div>

                <!-- Valeur 3 -->
                <div class="neo-card-light p-8">
                    <div class="neo-icon-light">
                        <i class="fas fa-bullseye text-3xl text-synergie-primary"></i>
                    </div>
                    <h3 class="text-xl font-bold text-synergie-secondary mb-4">Impact</h3>
                    <p class="text-gray-600">
                        Des résultats mesurables et durables qui dépassent vos objectifs.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services -->
    <section id="services" class="py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-black text-synergie-secondary mb-4">
                    Nos <span class="text-synergie-primary">Services</span>
                </h2>
                <div class="section-indicator mx-auto mb-8"></div>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Découvrez notre gamme complète de services adaptés à vos besoins en communication et événementiel.
                </p>
            </div>

            <!-- Tabs -->
            <div class="flex justify-center mb-12">
                <div class="inline-flex rounded-full p-1 bg-gray-100">
                    <button id="tabCommunication"
                            class="tab-button px-6 py-3 rounded-full font-semibold transition-all duration-300 bg-synergie-primary text-white">
                        Communication
                    </button>
                    <button id="tabEvenementiel"
                            class="tab-button px-6 py-3 rounded-full font-semibold transition-all duration-300 text-gray-600 hover:text-synergie-primary">
                        Événementiel
                    </button>
                </div>
            </div>

            <!-- Communication Content -->
            <div id="contentCommunication" class="tab-content">
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    <!-- Service 1 -->
                    <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 border-l-4 border-synergie-primary service-neo-card">
                        <div class="service-icon">
                            <i class="fas fa-palette text-xl text-synergie-primary"></i>
                        </div>
                        <h3 class="text-lg font-bold text-synergie-secondary mb-3">Brand Design</h3>
                        <p class="text-gray-600">
                            Logos, affiches et identité visuelle complète qui reflètent votre marque.
                        </p>
                    </div>

                    <!-- Service 2 -->
                    <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 border-l-4 border-synergie-primary service-neo-card">
                        <div class="service-icon">
                            <i class="fas fa-video text-xl text-synergie-primary"></i>
                        </div>
                        <h3 class="text-lg font-bold text-synergie-secondary mb-3">Motion Design</h3>
                        <p class="text-gray-600">
                            Animations et vidéos promotionnelles qui captivent votre audience.
                        </p>
                    </div>

                    <!-- Service 3 -->
                    <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 border-l-4 border-synergie-primary service-neo-card">
                        <div class="service-icon">
                            <i class="fas fa-hashtag text-xl text-synergie-primary"></i>
                        </div>
                        <h3 class="text-lg font-bold text-synergie-secondary mb-3">Social Media</h3>
                        <p class="text-gray-600">
                            Gestion complète des réseaux sociaux et stratégie digitale.
                        </p>
                    </div>

                    <!-- Service 4 -->
                    <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 border-l-4 border-synergie-primary service-neo-card">
                        <div class="service-icon">
                            <i class="fas fa-code text-xl text-synergie-primary"></i>
                        </div>
                        <h3 class="text-lg font-bold text-synergie-secondary mb-3">Développement Web</h3>
                        <p class="text-gray-600">
                            Sites web et applications digitales performantes et modernes.
                        </p>
                    </div>

                    <!-- Service 5 -->
                    <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 border-l-4 border-synergie-primary service-neo-card">
                        <div class="service-icon">
                            <i class="fas fa-chart-line text-xl text-synergie-primary"></i>
                        </div>
                        <h3 class="text-lg font-bold text-synergie-secondary mb-3">Design Consulting</h3>
                        <p class="text-gray-600">
                            Conseil en image et accompagnement stratégique de marque.
                        </p>
                    </div>

                    <!-- Service 6 -->
                    <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 border-l-4 border-synergie-primary service-neo-card">
                        <div class="service-icon">
                            <i class="fas fa-bullhorn text-xl text-synergie-primary"></i>
                        </div>
                        <h3 class="text-lg font-bold text-synergie-secondary mb-3">Stratégie Marketing</h3>
                        <p class="text-gray-600">
                            Plans marketing personnalisés pour maximiser votre visibilité.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Événementiel Content -->
            <div id="contentEvenementiel" class="tab-content hidden">
                <div class="grid md:grid-cols-3 gap-8">
                    <!-- Planning -->
                    <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 service-neo-card">
                        <div class="service-icon">
                            <i class="fas fa-calendar-alt text-2xl text-synergie-primary"></i>
                        </div>
                        <h3 class="text-xl font-bold text-synergie-secondary mb-4">Planning & Organisation</h3>
                        <p class="text-gray-600 mb-6">Conception et coordination complète d'événements.</p>
                        <div class="space-y-2">
                            <div class="flex items-center">
                                <i class="fas fa-check text-synergie-primary mr-2"></i>
                                <span>Conception événementielle</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-check text-synergie-primary mr-2"></i>
                                <span>Coordination générale</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-check text-synergie-primary mr-2"></i>
                                <span>Gestion opérationnelle</span>
                            </div>
                        </div>
                    </div>

                    <!-- Logistique -->
                    <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 service-neo-card">
                        <div class="service-icon">
                            <i class="fas fa-truck text-2xl text-synergie-primary"></i>
                        </div>
                        <h3 class="text-xl font-bold text-synergie-secondary mb-4">Logistique</h3>
                        <p class="text-gray-600 mb-6">Matériel professionnel pour vos événements.</p>
                        <div class="grid grid-cols-2 gap-2">
                            <div class="bg-gray-50 p-2 rounded text-center">Écrans LED</div>
                            <div class="bg-gray-50 p-2 rounded text-center">Lumières Pro</div>
                            <div class="bg-gray-50 p-2 rounded text-center">Podium & Scène</div>
                            <div class="bg-gray-50 p-2 rounded text-center">Sonorisation</div>
                            <div class="bg-gray-50 p-2 rounded text-center">Tentes</div>
                        </div>
                    </div>

                    <!-- Couverture Média -->
                    <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 service-neo-card">
                        <div class="service-icon">
                            <i class="fas fa-camera text-2xl text-synergie-primary"></i>
                        </div>
                        <h3 class="text-xl font-bold text-synergie-secondary mb-4">Couverture Média</h3>
                        <p class="text-gray-600 mb-6">Captation professionnelle de vos événements.</p>
                        <div class="space-y-2">
                            <div class="flex items-center">
                                <i class="fas fa-check text-synergie-primary mr-2"></i>
                                <span>Photographie professionnelle</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-check text-synergie-primary mr-2"></i>
                                <span>Live Streaming</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-check text-synergie-primary mr-2"></i>
                                <span>Cadrage vidéo</span>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-check text-synergie-primary mr-2"></i>
                                <span>Aftermovie</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Réalisations -->
    <section id="realisations" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-black text-synergie-secondary mb-4">
                    Nos <span class="text-synergie-primary">Réalisations</span>
                </h2>
                <div class="section-indicator mx-auto mb-8"></div>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Découvrez quelques-uns de nos projets réalisés avec passion et professionnalisme.
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Projet 1 -->
                <div class="group relative overflow-hidden rounded-xl shadow-lg">
                    <img src="https://images.unsplash.com/photo-1492684223066-dd23140edf6d?ixlib=rb-4.0.3&auto=format&fit=crop&w=700&q=80"
                         alt="Événement Corporate"
                         class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                        <div>
                            <h3 class="text-white text-xl font-bold">Événement Corporate</h3>
                            <p class="text-gray-200">Lancement de produit</p>
                        </div>
                    </div>
                </div>

                <!-- Projet 2 -->
                <div class="group relative overflow-hidden rounded-xl shadow-lg">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=700&q=80"
                         alt="Identité Visuelle"
                         class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                        <div>
                            <h3 class="text-white text-xl font-bold">Identité Visuelle</h3>
                            <p class="text-gray-200">Rebranding complet</p>
                        </div>
                    </div>
                </div>

                <!-- Projet 3 -->
                <div class="group relative overflow-hidden rounded-xl shadow-lg">
                    <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?ixlib=rb-4.0.3&auto=format&fit=crop&w=700&q=80"
                         alt="Conférence"
                         class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                        <div>
                            <h3 class="text-white text-xl font-bold">Conférence Annuelle</h3>
                            <p class="text-gray-200">Gestion complète</p>
                        </div>
                    </div>
                </div>

                <!-- Projet 4 -->
                <div class="group relative overflow-hidden rounded-xl shadow-lg">
                    <img src="https://images.unsplash.com/photo-1561070791-2526d30994b5?ixlib=rb-4.0.3&auto=format&fit=crop&w=700&q=80"
                         alt="Campagne Digital"
                         class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                        <div>
                            <h3 class="text-white text-xl font-bold">Campagne Digital</h3>
                            <p class="text-gray-200">Stratégie réseaux sociaux</p>
                        </div>
                    </div>
                </div>

                <!-- Projet 5 -->
                <div class="group relative overflow-hidden rounded-xl shadow-lg">
                    <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?ixlib=rb-4.0.3&auto=format&fit=crop&w=700&q=80"
                         alt="Mariage"
                         class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                        <div>
                            <h3 class="text-white text-xl font-bold">Événement Privé</h3>
                            <p class="text-gray-200">Organisation de mariage</p>
                        </div>
                    </div>
                </div>

                <!-- Projet 6 -->
                <div class="group relative overflow-hidden rounded-xl shadow-lg">
                    <img src="https://images.unsplash.com/photo-1511578314322-379afb476865?ixlib=rb-4.0.3&auto=format&fit=crop&w=700&q=80"
                         alt="Festival"
                         class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-6">
                        <div>
                            <h3 class="text-white text-xl font-bold">Festival Culturel</h3>
                            <p class="text-gray-200">Logistique et production</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="preuves" class="py-12 bg-white">
    <div class="container mx-auto px-4">
        <!-- Partenaires -->
        <div class="text-center mb-14">
                <h2 class="text-3xl md:text-4xl font-black text-synergie-secondary mb-4">
                    Nos <span class="text-synergie-primary">partenaires</span>
                </h2>
                <div class="section-indicator mx-auto mb-8"></div>
                
            </div>
                <div class="partners-marquee">
                    <div class="partners-track">
                        <div class="partner-pill bg-white border border-gray-100 rounded-xl p-6 flex items-center justify-center">
                            <img src="{{ asset('assets/imgs/logo-hewa-bora.jpg') }}" alt="Logo Hewa Bora" class="h-28 w-auto object-contain">
                        </div>
                        <div class="partner-pill bg-white border border-gray-100 rounded-xl p-6 flex items-center justify-center">
                            <img src="{{ asset('assets/imgs/logo-nj-event.jpg') }}" alt="Logo NJ Event" class="h-28 w-auto object-contain">
                        </div>
                        
                        <div class="partner-pill bg-white border border-gray-100 rounded-xl p-6 flex items-center justify-center">
                            <img src="{{ asset('assets/imgs/logo-katanga-award.jpg') }}" alt="Logo Katanga Award" class="h-28 w-auto object-contain">
                        </div>
                        <div class="partner-pill bg-white border border-gray-100 rounded-xl p-6 flex items-center justify-center">
                            <img src="{{ asset('assets/imgs/logo-congo-virtuose.jpg') }}" alt="Logo Congo Virtuose" class="h-28 w-auto object-contain">
                        </div>
                        <div class="partner-pill bg-white border border-gray-100 rounded-xl p-6 flex items-center justify-center">
                            <img src="{{ asset('assets/imgs/logo-hewa-bora.jpg') }}" alt="Logo Hewa Bora" class="h-28 w-auto object-contain">
                        </div>
                        <div class="partner-pill bg-white border border-gray-100 rounded-xl p-6 flex items-center justify-center">
                            <img src="{{ asset('assets/imgs/logo-nj-event.jpg') }}" alt="Logo NJ Event" class="h-28 w-auto object-contain">
                        </div>
                        
                        <div class="partner-pill bg-white border border-gray-100 rounded-xl p-6 flex items-center justify-center">
                            <img src="{{ asset('assets/imgs/logo-katanga-award.jpg') }}" alt="Logo Katanga Award" class="h-28 w-auto object-contain">
                        </div>
                        <div class="partner-pill bg-white border border-gray-100 rounded-xl p-6 flex items-center justify-center">
                            <img src="{{ asset('assets/imgs/logo-congo-virtuose.jpg') }}" alt="Logo Congo Virtuose" class="h-28 w-auto object-contain">
                        </div>
                    </div>
                </div>

       
   </div>
            </section>
    <!-- Contact -->
    <section id="contact" class="py-20 bg-gradient-to-br from-synergie-light/10 via-white to-synergie-light/20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-14">
                <h2 class="text-3xl md:text-4xl font-black text-synergie-secondary mb-4">
                    Contactez-<span class="text-synergie-primary">nous</span>
                </h2>
                <div class="section-indicator mx-auto mb-8"></div>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Parlez-nous de votre projet, nous revenons vers vous rapidement avec une proposition claire.
                </p>
            </div>

            <div class="grid lg:grid-cols-5 gap-8">
                <div class="lg:col-span-2 bg-synergie-secondary text-white rounded-3xl p-8 shadow-2xl">
                    <p class="text-synergie-primary font-semibold mb-2">Discutons de votre besoin</p>
                    <h3 class="text-2xl font-extrabold mb-4">Une équipe disponible pour vous accompagner</h3>
                    <p class="text-white/80 mb-8">Communication visuelle, digital et événementiel : nous vous aidons à passer de l'idée à l'impact.</p>

                    <div class="space-y-5">
                        <div class="flex items-start gap-4">
                            <div class="w-11 h-11 rounded-xl bg-white/10 flex items-center justify-center"><i class="fas fa-map-marker-alt text-synergie-primary"></i></div>
                            <div><p class="font-semibold">Adresse</p><p class="text-white/80 text-sm">Lubumbashi, République Démocratique du Congo</p></div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-11 h-11 rounded-xl bg-white/10 flex items-center justify-center"><i class="fas fa-phone text-synergie-primary"></i></div>
                            <div><p class="font-semibold">Téléphone</p><p class="text-white/80 text-sm">+243 83 424 90 25</p></div>
                        </div>
                        <div class="flex items-start gap-4">
                            <div class="w-11 h-11 rounded-xl bg-white/10 flex items-center justify-center"><i class="fas fa-envelope text-synergie-primary"></i></div>
                            <div><p class="font-semibold">Email</p><p class="text-white/80 text-sm">synergieup@gmail.com</p></div>
                        </div>
                    </div>

                    <a href="https://wa.me/243834249025" target="_blank" rel="noopener noreferrer" class="mt-8 inline-flex items-center gap-2 bg-synergie-primary text-synergie-secondary font-bold px-5 py-3 rounded-full hover:opacity-90 transition-opacity">
                        <i class="fab fa-whatsapp"></i> WhatsApp direct
                    </a>
                </div>

                <div class="lg:col-span-3 bg-white rounded-3xl p-8 md:p-10 shadow-xl border border-gray-100">
                    <h3 class="text-2xl font-bold text-synergie-secondary mb-6">Envoyez-nous un message</h3>
                    <form id="contactForm" class="space-y-5">
                        <div class="grid md:grid-cols-2 gap-4">
                            <input type="text" placeholder="Votre nom complet" class="w-full px-4 py-3.5 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-synergie-primary/60 focus:border-transparent">
                            <input type="email" placeholder="Votre adresse email" class="w-full px-4 py-3.5 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-synergie-primary/60 focus:border-transparent">
                        </div>
                        <div class="grid md:grid-cols-2 gap-4">
                            <input type="tel" placeholder="Votre numéro de téléphone" class="w-full px-4 py-3.5 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-synergie-primary/60 focus:border-transparent">
                            <select class="w-full px-4 py-3.5 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-synergie-primary/60 focus:border-transparent">
                                <option value="" selected disabled>Type de service</option>
                                <option value="communication">Communication visuelle</option>
                                <option value="developpement">Développement d'applications</option>
                                <option value="evenementiel">Logistique événementielle</option>
                                <option value="photo">Photographie</option>
                                <option value="global">Pack global</option>
                            </select>
                        </div>
                        <textarea placeholder="Décrivez votre projet..." rows="6" class="w-full px-4 py-3.5 bg-gray-50 border border-gray-200 rounded-xl focus:outline-none focus:ring-2 focus:ring-synergie-primary/60 focus:border-transparent"></textarea>

                        <div class="flex flex-col sm:flex-row gap-3 sm:items-center sm:justify-between">
                            <p class="text-sm text-gray-500">Réponse moyenne sous 24 heures ouvrées.</p>
                            <button type="submit" class="bg-synergie-primary hover:bg-synergie-secondary text-white font-semibold py-3.5 px-7 rounded-xl transition-all duration-300 transform hover:-translate-y-0.5 hover:shadow-lg">
                                Envoyer le message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="mainFooter" class="text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8">
                <!-- Logo et description -->
                <div>
                    <a href="#accueil" class="flex items-center space-x-2">

                   <div>
                        <span class="text-2xl font-black text-white font-title">Synergie</span>
                        <span class="text-2xl font-black text-synergie-primary font-title">up</span>
                    </div>
                </a>
                    <p class="text-gray-300 mb-6">
                        Votre partenaire de confiance pour des solutions de communication et d'événementiel innovantes.
                    </p>
                    <div class="flex space-x-4">
                        <a href="https://web.facebook.com/Synergieupofficiel" target="_blank" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-synergie-accent transition-colors duration-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://www.instagram.com/synergie_up?fbclid=IwY2xjawQD381leHRuA2FlbQIxMABzcnRjBmFwcF9pZBAyMjIwMzkxNzg4MjAwODkyAAEeG5-eC2wcHja6rKZcY_ja295A0it0tChtj9GOURnfv4RdWdgeIhXbuDW7nBg_aem_k20NCyaLGwOIZTrGnfXCPw" target="_blank" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-synergie-accent transition-colors duration-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" target="_blank" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-synergie-accent transition-colors duration-300">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="https://www.tiktok.com/@synergie.up?is_from_webapp=1&sender_device=pc" target="_blank" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-synergie-accent transition-colors duration-300">
                            <i class="fab fa-tiktok"></i>
                        </a>
                    </div>
                </div>

                <!-- Liens rapides -->
                <div>
                    <h3 class="text-xl font-bold mb-6">Liens Rapides</h3>
                    <ul class="space-y-3">
                        <li><a href="#accueil" class="text-gray-300 hover:text-synergie-accent transition-colors duration-300">Accueil</a></li>
                        <li><a href="#apropos" class="text-gray-300 hover:text-synergie-accent transition-colors duration-300">À Propos</a></li>
                        <li><a href="#services" class="text-gray-300 hover:text-synergie-accent transition-colors duration-300">Services</a></li>
                        <li><a href="#realisations" class="text-gray-300 hover:text-synergie-accent transition-colors duration-300">Réalisations</a></li>
                        <li><a href="#contact" class="text-gray-300 hover:text-synergie-accent transition-colors duration-300">Contact</a></li>
                    </ul>
                </div>

                <!-- Services -->
                <div>
                    <h3 class="text-xl font-bold mb-6">Nos Services</h3>
                    <ul class="space-y-3">
                        <li><a href="#services" class="text-gray-300 hover:text-synergie-accent transition-colors duration-300">Brand Design</a></li>
                        <li><a href="#services" class="text-gray-300 hover:text-synergie-accent transition-colors duration-300">Motion Design</a></li>
                        <li><a href="#services" class="text-gray-300 hover:text-synergie-accent transition-colors duration-300">Social Media</a></li>
                        <li><a href="#services" class="text-gray-300 hover:text-synergie-accent transition-colors duration-300">Événementiel</a></li>
                        <li><a href="#services" class="text-gray-300 hover:text-synergie-accent transition-colors duration-300">Développement Web</a></li>
                    </ul>
                </div>

                <!-- Newsletter -->
                <div>
                    <h3 class="text-xl font-bold mb-6">Newsletter</h3>
                    <p class="text-gray-300 mb-4">Restez informé de nos actualités.</p>
                    <div class="flex">
                        <input type="email"
                               placeholder="Votre email"
                               class="flex-1 px-4 py-3 rounded-l-lg text-gray-900 focus:outline-none">
                        <button class="bg-synergie-accent hover:bg-synergie-primary px-4 py-3 rounded-r-lg transition-colors duration-300">
                            <i class="fas fa-paper-plane"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Copyright -->
            <div class="border-t border-white/10 mt-12 pt-8 text-center">
                <p>&copy; <span id="currentYear"></span> Synergie UP. Tous droits réservés. | Communication & Événementiel - Lubumbashi</p>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <button id="backToTop"
            class="fixed bottom-8 right-8 w-12 h-12 bg-synergie-primary text-white rounded-full shadow-lg hover:bg-synergie-secondary transition-all duration-300 transform translate-y-16 opacity-0">
        <i class="fas fa-chevron-up"></i>
    </button>

    <!-- JavaScript -->
    <script>
        // Menu mobile
        const mobileMenuButton = document.getElementById('mobileMenuButton');
        const mobileMenu = document.getElementById('mobileMenu');
        const navbar = document.getElementById('navbar');
        const desktopNavLinks = document.querySelectorAll('.nav-link');
        const sections = document.querySelectorAll('section[id]');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
            const icon = mobileMenuButton.querySelector('i');
            icon.classList.toggle('fa-bars');
            icon.classList.toggle('fa-times');
        });

        // Fermer le menu mobile au clic sur un lien
        document.querySelectorAll('#mobileMenu a').forEach(link => {
            link.addEventListener('click', () => {
                mobileMenu.classList.add('hidden');
                mobileMenuButton.querySelector('i').classList.remove('fa-times');
                mobileMenuButton.querySelector('i').classList.add('fa-bars');
            });
        });

        // Systeme d'onglets
        const tabCommunication = document.getElementById('tabCommunication');
        const tabEvenementiel = document.getElementById('tabEvenementiel');
        const contentCommunication = document.getElementById('contentCommunication');
        const contentEvenementiel = document.getElementById('contentEvenementiel');

        function switchTab(tab) {
            // Reset all tabs
            [tabCommunication, tabEvenementiel].forEach(t => {
                t.classList.remove('bg-synergie-primary', 'text-white');
                t.classList.add('text-gray-600', 'hover:text-synergie-primary');
            });

            // Hide all contents
            [contentCommunication, contentEvenementiel].forEach(c => {
                c.classList.add('hidden');
            });

            // Activate selected tab
            if (tab === 'communication') {
                tabCommunication.classList.add('bg-synergie-primary', 'text-white');
                tabCommunication.classList.remove('text-gray-600', 'hover:text-synergie-primary');
                contentCommunication.classList.remove('hidden');
            } else {
                tabEvenementiel.classList.add('bg-synergie-primary', 'text-white');
                tabEvenementiel.classList.remove('text-gray-600', 'hover:text-synergie-primary');
                contentEvenementiel.classList.remove('hidden');
            }
        }

        tabCommunication.addEventListener('click', () => switchTab('communication'));
        tabEvenementiel.addEventListener('click', () => switchTab('evenementiel'));

        // Formulaire de contact
        const contactForm = document.getElementById('contactForm');
        contactForm.addEventListener('submit', (e) => {
            e.preventDefault();
            alert('Merci pour votre message ! Nous vous contacterons sous peu.');
            contactForm.reset();
        });

        // Back to top button
        const backToTop = document.getElementById('backToTop');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                backToTop.classList.remove('translate-y-16', 'opacity-0');
                backToTop.classList.add('translate-y-0', 'opacity-100');
            } else {
                backToTop.classList.add('translate-y-16', 'opacity-0');
                backToTop.classList.remove('translate-y-0', 'opacity-100');
            }
        });

        backToTop.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Update current year in footer
        document.getElementById('currentYear').textContent = new Date().getFullYear();

        // Navbar glass effect + active link on scroll
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.classList.remove('navbar-base');
                navbar.classList.add('navbar-scrolled');
                desktopNavLinks.forEach(link => {
                    if (!link.classList.contains('is-active')) {
                        link.classList.remove('text-white');
                        link.classList.add('text-synergie-secondary');
                    }
                });
            } else {
                navbar.classList.remove('navbar-scrolled');
                navbar.classList.add('navbar-base');
                desktopNavLinks.forEach(link => {
                    if (!link.classList.contains('is-active')) {
                        link.classList.remove('text-synergie-secondary');
                        link.classList.add('text-white');
                    }
                });
            }

            let currentId = '';
            sections.forEach(section => {
                const sectionTop = section.offsetTop - 140;
                if (window.scrollY >= sectionTop) {
                    currentId = section.getAttribute('id');
                }
            });

            desktopNavLinks.forEach(link => {
                link.classList.remove('is-active');
                if (link.getAttribute('href') === `#${currentId}`) {
                    link.classList.add('is-active');
                }
            });
        });

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                const targetId = this.getAttribute('href');
                if (targetId === '#') return;

                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    const offsetTop = targetElement.offsetTop - 80;
                    window.scrollTo({
                        top: offsetTop,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animate-fadeInUp');
                }
            });
        }, observerOptions);

        // Observe elements for animation
        document.querySelectorAll('.service-card, .valeur-card, .portfolio-item').forEach(el => {
            observer.observe(el);
        });
    </script>
</body>
</html>
