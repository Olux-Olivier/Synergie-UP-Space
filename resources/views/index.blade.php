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
    <nav id="navbar" class="fixed w-full z-50 transition-all duration-300 bg-white/95 backdrop-blur-md shadow-lg">
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
                    <a href="#accueil" class="font-semibold text-synergie-secondary hover:text-synergie-primary transition-colors duration-300 relative group">
                        Accueil
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-synergie-primary group-hover:w-full transition-all duration-300"></span>
                    </a>
                    <a href="#apropos" class="font-semibold text-synergie-secondary hover:text-synergie-primary transition-colors duration-300 relative group">
                        À Propos
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-synergie-primary group-hover:w-full transition-all duration-300"></span>
                    </a>
                    <a href="#services" class="font-semibold text-synergie-secondary hover:text-synergie-primary transition-colors duration-300 relative group">
                        Services
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-synergie-primary group-hover:w-full transition-all duration-300"></span>
                    </a>
                    <a href="#realisations" class="font-semibold text-synergie-secondary hover:text-synergie-primary transition-colors duration-300 relative group">
                        Réalisations
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-synergie-primary group-hover:w-full transition-all duration-300"></span>
                    </a>
                    <a href="#partenaires" class="font-semibold text-synergie-secondary hover:text-synergie-primary transition-colors duration-300 relative group">
                        Partenaires
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-synergie-primary group-hover:w-full transition-all duration-300"></span>
                    </a>
                    <a href="#contact" class="font-semibold text-synergie-secondary hover:text-synergie-primary transition-colors duration-300 relative group">
                        Contact
                        <span class="absolute bottom-0 left-0 w-0 h-0.5 bg-synergie-primary group-hover:w-full transition-all duration-300"></span>
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
                    Nous créons l'image, nous produisons l'impact. Votre partenaire pour des solutions créatives et innovantes à Lubumbashi.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#services"
                       class="bg-synergie-secondary hover:bg-transparent hover:border-white border-2 border-synergie-secondary text-white  px-8 py-3 rounded-full font-semibold transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg">
                        Découvrir nos services
                    </a>
                    <a href="#contact"
                       class="bg-transparent hover:bg-synergie-accent border-2 border-synergie-accent text-synergie-accent hover:text-white px-8 py-3 rounded-full font-semibold transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg">
                        Nous contacter
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

    <!-- À Propos -->
    <section id="apropos" class="py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-black text-synergie-secondary mb-4">
                    À <span class="text-synergie-primary ">Propos</span>
                </h2>
                <div class="w-20 h-1 bg-synergie-primary mx-auto mb-8"></div>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Synergie UP est une agence de communication et d'événementiel basée à Lubumbashi,
                    alliant créativité, professionnalisme et innovation pour créer un impact maximal.
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Valeur 1 -->
                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border-t-4 border-synergie-accent">
                    <div class="w-16 h-16 bg-synergie-light rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-lightbulb text-3xl text-synergie-primary"></i>
                    </div>
                    <h3 class="text-xl font-bold text-synergie-secondary mb-4">Créativité</h3>
                    <p class="text-gray-600">
                        Des solutions innovantes et uniques qui marquent les esprits et différencient votre marque.
                    </p>
                </div>

                <!-- Valeur 2 -->
                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border-t-4 border-synergie-accent">
                    <div class="w-16 h-16 bg-synergie-light rounded-full flex items-center justify-center mb-6">
                        <i class="fas fa-tasks text-3xl text-synergie-primary"></i>
                    </div>
                    <h3 class="text-xl font-bold text-synergie-secondary mb-4">Rigueur</h3>
                    <p class="text-gray-600">
                        Un professionnalisme exemplaire à chaque étape, de la conception à la réalisation.
                    </p>
                </div>

                <!-- Valeur 3 -->
                <div class="bg-white p-8 rounded-2xl shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-2 border-t-4 border-synergie-accent">
                    <div class="w-16 h-16 bg-synergie-light rounded-full flex items-center justify-center mb-6">
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
                <div class="w-20 h-1 bg-synergie-primary mx-auto mb-8"></div>
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
                    <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 border-l-4 border-synergie-primary">
                        <div class="w-12 h-12 bg-synergie-light rounded-lg flex items-center justify-center mb-4">
                            <i class="fas fa-palette text-xl text-synergie-primary"></i>
                        </div>
                        <h3 class="text-lg font-bold text-synergie-secondary mb-3">Brand Design</h3>
                        <p class="text-gray-600">
                            Logos, affiches et identité visuelle complète qui reflètent votre marque.
                        </p>
                    </div>

                    <!-- Service 2 -->
                    <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 border-l-4 border-synergie-primary">
                        <div class="w-12 h-12 bg-synergie-light rounded-lg flex items-center justify-center mb-4">
                            <i class="fas fa-video text-xl text-synergie-primary"></i>
                        </div>
                        <h3 class="text-lg font-bold text-synergie-secondary mb-3">Motion Design</h3>
                        <p class="text-gray-600">
                            Animations et vidéos promotionnelles qui captivent votre audience.
                        </p>
                    </div>

                    <!-- Service 3 -->
                    <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 border-l-4 border-synergie-primary">
                        <div class="w-12 h-12 bg-synergie-light rounded-lg flex items-center justify-center mb-4">
                            <i class="fas fa-hashtag text-xl text-synergie-primary"></i>
                        </div>
                        <h3 class="text-lg font-bold text-synergie-secondary mb-3">Social Media</h3>
                        <p class="text-gray-600">
                            Gestion complète des réseaux sociaux et stratégie digitale.
                        </p>
                    </div>

                    <!-- Service 4 -->
                    <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 border-l-4 border-synergie-primary">
                        <div class="w-12 h-12 bg-synergie-light rounded-lg flex items-center justify-center mb-4">
                            <i class="fas fa-code text-xl text-synergie-primary"></i>
                        </div>
                        <h3 class="text-lg font-bold text-synergie-secondary mb-3">Développement Web</h3>
                        <p class="text-gray-600">
                            Sites web et applications digitales performantes et modernes.
                        </p>
                    </div>

                    <!-- Service 5 -->
                    <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 border-l-4 border-synergie-primary">
                        <div class="w-12 h-12 bg-synergie-light rounded-lg flex items-center justify-center mb-4">
                            <i class="fas fa-chart-line text-xl text-synergie-primary"></i>
                        </div>
                        <h3 class="text-lg font-bold text-synergie-secondary mb-3">Design Consulting</h3>
                        <p class="text-gray-600">
                            Conseil en image et accompagnement stratégique de marque.
                        </p>
                    </div>

                    <!-- Service 6 -->
                    <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 border-l-4 border-synergie-primary">
                        <div class="w-12 h-12 bg-synergie-light rounded-lg flex items-center justify-center mb-4">
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
                    <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-all duration-300">
                        <div class="w-16 h-16 bg-synergie-light rounded-full flex items-center justify-center mb-6">
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
                    <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-all duration-300">
                        <div class="w-16 h-16 bg-synergie-light rounded-full flex items-center justify-center mb-6">
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
                            <div class="bg-gray-50 p-2 rounded text-center">Génie électrique</div>
                        </div>
                    </div>

                    <!-- Couverture Média -->
                    <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-all duration-300">
                        <div class="w-16 h-16 bg-synergie-light rounded-full flex items-center justify-center mb-6">
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
                <div class="w-20 h-1 bg-synergie-primary mx-auto mb-8"></div>
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

    <!-- Partenaires -->
    <section id="partenaires" class="py-20">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-black text-synergie-secondary mb-4">
                    Nos <span class="text-synergie-primary">Partenaires</span>
                </h2>
                <div class="w-20 h-1 bg-synergie-primary mx-auto mb-8"></div>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Nous collaborons avec les meilleurs pour vous offrir un service d'exception.
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                <!-- Partenaire 1 -->
                <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 flex items-center justify-center transform hover:-translate-y-2">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-synergie-light rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-building text-2xl text-synergie-primary"></i>
                        </div>
                        <h3 class="font-bold text-synergie-secondary">HEWA BORA</h3>
                    </div>
                </div>

                <!-- Partenaire 2 -->
                <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 flex items-center justify-center transform hover:-translate-y-2">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-synergie-light rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-lightbulb text-2xl text-synergie-primary"></i>
                        </div>
                        <h3 class="font-bold text-synergie-secondary">INNOVATION GROUP</h3>
                    </div>
                </div>

                <!-- Partenaire 3 -->
                <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 flex items-center justify-center transform hover:-translate-y-2">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-synergie-light rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-calendar text-2xl text-synergie-primary"></i>
                        </div>
                        <h3 class="font-bold text-synergie-secondary">LUBUMBASHI EVENTS</h3>
                    </div>
                </div>

                <!-- Partenaire 4 -->
                <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 flex items-center justify-center transform hover:-translate-y-2">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-synergie-light rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-paint-brush text-2xl text-synergie-primary"></i>
                        </div>
                        <h3 class="font-bold text-synergie-secondary">CREATIVE LAB</h3>
                    </div>
                </div>

                <!-- Partenaire 5 -->
                <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-xl transition-all duration-300 flex items-center justify-center transform hover:-translate-y-2">
                    <div class="text-center">
                        <div class="w-16 h-16 bg-synergie-light rounded-full flex items-center justify-center mx-auto mb-4">
                            <i class="fas fa-laptop-code text-2xl text-synergie-primary"></i>
                        </div>
                        <h3 class="font-bold text-synergie-secondary">DIGITAL CONGO</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact -->
    <section id="contact" class="py-20 bg-gradient-to-br from-synergie-light to-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-black text-synergie-secondary mb-4">
                    Contactez-<span class="text-synergie-primary">nous</span>
                </h2>
                <div class="w-20 h-1 bg-synergie-primary mx-auto mb-8"></div>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Prêt à concrétiser votre projet ? Discutons-en !
                </p>
            </div>

            <div class="grid md:grid-cols-2 gap-12">
                <!-- Formulaire -->
                <div class="bg-white p-8 rounded-2xl shadow-xl">
                    <h3 class="text-2xl font-bold text-synergie-secondary mb-6">Envoyez-nous un message</h3>
                    <form id="contactForm">
                        <div class="space-y-4">
                            <div>
                                <input type="text"
                                       placeholder="Votre nom complet"
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-synergie-primary focus:border-transparent">
                            </div>
                            <div>
                                <input type="email"
                                       placeholder="Votre adresse email"
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-synergie-primary focus:border-transparent">
                            </div>
                            <div>
                                <input type="tel"
                                       placeholder="Votre numéro de téléphone"
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-synergie-primary focus:border-transparent">
                            </div>
                            <div>
                                <select class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-synergie-primary focus:border-transparent">
                                    <option value="" selected disabled>Type de service</option>
                                    <option value="communication">Communication</option>
                                    <option value="evenementiel">Événementiel</option>
                                    <option value="both">Les deux</option>
                                </select>
                            </div>
                            <div>
                                <textarea placeholder="Décrivez votre projet..."
                                          rows="5"
                                          class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-synergie-primary focus:border-transparent"></textarea>
                            </div>
                            <button type="submit"
                                    class="w-full bg-synergie-primary hover:bg-synergie-secondary text-white font-semibold py-3 px-6 rounded-lg transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg">
                                Envoyer le message
                            </button>
                        </div>
                    </form>
                </div>

                <!-- Informations -->
                <div class="space-y-8">
                    <div class="bg-white p-8 rounded-2xl shadow-xl">
                        <h3 class="text-2xl font-bold text-synergie-secondary mb-6">Nos Coordonnées</h3>
                        <div class="space-y-6">
                            <!-- Adresse -->
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-synergie-light rounded-lg flex items-center justify-center">
                                    <i class="fas fa-map-marker-alt text-xl text-synergie-primary"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-synergie-secondary">Adresse</h4>
                                    <p class="text-gray-600">Lubumbashi, République Démocratique du Congo</p>
                                </div>
                            </div>

                            <!-- Téléphone -->
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-synergie-light rounded-lg flex items-center justify-center">
                                    <i class="fas fa-phone text-xl text-synergie-primary"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-synergie-secondary">Téléphone</h4>
                                    <p class="text-gray-600">+243 XX XXX XX XX</p>
                                </div>
                            </div>

                            <!-- Email -->
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-synergie-light rounded-lg flex items-center justify-center">
                                    <i class="fas fa-envelope text-xl text-synergie-primary"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-synergie-secondary">Email</h4>
                                    <p class="text-gray-600">contact@synergie-up.com</p>
                                </div>
                            </div>

                            <!-- Horaires -->
                            <div class="flex items-start space-x-4">
                                <div class="w-12 h-12 bg-synergie-light rounded-lg flex items-center justify-center">
                                    <i class="fas fa-clock text-xl text-synergie-primary"></i>
                                </div>
                                <div>
                                    <h4 class="font-bold text-synergie-secondary">Horaires</h4>
                                    <p class="text-gray-600">Lun - Ven : 8h - 18h<br>Samedi : 9h - 13h</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Carte -->
                    <div class="bg-white p-8 rounded-2xl shadow-xl">
                        <h3 class="text-2xl font-bold text-synergie-secondary mb-6">Nous trouver</h3>
                        <div class="bg-gray-200 h-48 rounded-lg flex items-center justify-center">
                            <div class="text-center">
                                <i class="fas fa-map-marked-alt text-4xl text-synergie-primary mb-4"></i>
                                <p class="text-gray-600">Carte interactive</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-synergie-secondary text-white py-12">
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
                        <a href="https://web.facebook.com/Synergieupofficiel" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-synergie-accent transition-colors duration-300">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://www.instagram.com/synergie_up?fbclid=IwY2xjawQD381leHRuA2FlbQIxMABzcnRjBmFwcF9pZBAyMjIwMzkxNzg4MjAwODkyAAEeG5-eC2wcHja6rKZcY_ja295A0it0tChtj9GOURnfv4RdWdgeIhXbuDW7nBg_aem_k20NCyaLGwOIZTrGnfXCPw" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-synergie-accent transition-colors duration-300">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-synergie-accent transition-colors duration-300">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a href="#" class="w-10 h-10 bg-white/10 rounded-full flex items-center justify-center hover:bg-synergie-accent transition-colors duration-300">
                            <i class="fab fa-twitter"></i>
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

        // Navbar background on scroll
        const navbar = document.getElementById('navbar');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.classList.add('shadow-xl');
            } else {
                navbar.classList.remove('shadow-xl');
            }
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
