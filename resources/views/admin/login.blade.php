<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | Synergie UP</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/imgs/synergie-up-logo.png') }}">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class'
        }
    </script>
    <script>
        (function () {
            const saved = localStorage.getItem('admin_theme') || 'light';
            const root = document.documentElement;
            root.classList.remove('dark', 'light');
            root.classList.add(saved === 'dark' ? 'dark' : 'light');
        })();
    </script>
</head>
<body class="min-h-screen bg-slate-100 dark:bg-slate-950 transition-colors">
    <div class="fixed top-4 right-4 z-20">
        <button id="themeToggle" class="px-3 py-2 rounded-lg bg-white/90 dark:bg-slate-800 text-slate-700 dark:text-slate-200 shadow border border-slate-200 dark:border-slate-700 text-xl font-semibold">
            <span aria-hidden="true"></span>
        </button>
    </div>

    <div class="min-h-screen flex items-center justify-center p-4">
        <div class="w-full max-w-6xl rounded-3xl overflow-hidden shadow-2xl border border-slate-200 dark:border-slate-800 grid lg:grid-cols-2 bg-white dark:bg-slate-900">
            <div class="relative bg-gradient-to-br from-[#00384b] via-[#004A63] to-[#0b6786] p-10 lg:p-14 text-white hidden lg:flex flex-col justify-between">
                <div>
                    <div class="w-14 h-14 rounded-2xl border border-white/30 flex items-center justify-center text-3xl font-bold mb-10">✶</div>
                    <h1 class="text-5xl font-black leading-tight mb-4">Hello<br>Synergie!</h1>
                    <p class="text-white/85 text-lg max-w-md">
                        Gere efficacement les messages clients et gardez le controle total de votre communication.
                    </p>
                </div>
                <p class="text-white/70 text-sm">© {{ date('Y') }} Synergie UP. Tous droits reserves.</p>
                <div class="absolute inset-0 pointer-events-none bg-[radial-gradient(circle_at_top_right,rgba(241,188,84,0.28),transparent_38%)]"></div>
            </div>

            <div class="p-8 md:p-12 lg:p-14">
                <p class="text-sm font-semibold text-slate-500 dark:text-slate-400 mb-4">Synergie UP Admin</p>
                <h2 class="text-3xl font-black text-[#004A63] dark:text-[#F1BC54] mb-2">Bon retour!</h2>
                <p class="text-slate-500 dark:text-slate-400 mb-8">Connectez-vous pour acceder a votre boite de reception.</p>

                @if ($errors->any())
                    <div class="mb-4 rounded-lg bg-red-50 border border-red-200 text-red-700 p-3 text-sm">
                        {{ $errors->first() }}
                    </div>
                @endif

                <form method="POST" action="{{ route('admin.login.submit') }}" class="space-y-5">
                    @csrf
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 dark:text-slate-200 mb-1">Nom d'utilisateur</label>
                        <input
                            type="text"
                            name="username"
                            value="{{ old('username') }}"
                            class="w-full border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 text-slate-800 dark:text-slate-100 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#F1BC54]"
                            required
                        >
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-slate-700 dark:text-slate-200 mb-1">Mot de passe</label>
                        <input
                            type="password"
                            name="password"
                            class="w-full border border-slate-300 dark:border-slate-700 bg-white dark:bg-slate-800 text-slate-800 dark:text-slate-100 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-[#F1BC54]"
                            required
                        >
                    </div>
                    <button
                        type="submit"
                        class="w-full bg-[#004A63] text-white font-semibold rounded-xl py-3 hover:bg-[#F1BC54] hover:text-[#004A63] transition-colors"
                    >
                        Login now
                    </button>
                </form>
            </div>
        </div>
    </div>

    <script>
        const root = document.documentElement;
        const toggleBtn = document.getElementById('themeToggle');
        const moonIcon = '<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 3a1 1 0 0 0 0 18 9 9 0 1 1 0-18z"/></svg>';
        const sunIcon = '<svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M4.93 19.07l1.41-1.41M17.66 6.34l1.41-1.41"/></svg>';

        function applyTheme(theme) {
            const isDark = theme === 'dark';
            root.classList.remove('dark', 'light');
            root.classList.add(isDark ? 'dark' : 'light');
            localStorage.setItem('admin_theme', isDark ? 'dark' : 'light');
            toggleBtn.innerHTML = isDark ? sunIcon : moonIcon;
        }

        applyTheme(localStorage.getItem('admin_theme') || 'light');
        toggleBtn.addEventListener('click', () => {
            applyTheme(root.classList.contains('dark') ? 'light' : 'dark');
        });
    </script>
</body>
</html>