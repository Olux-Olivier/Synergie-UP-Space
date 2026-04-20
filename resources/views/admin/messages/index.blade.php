<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inbox Admin | Synergie UP</title>
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
<body class="bg-slate-100 dark:bg-slate-950 min-h-screen transition-colors">
    <header class="bg-white dark:bg-slate-900 border-b border-slate-200 dark:border-slate-800 sticky top-0 z-10">
        <div class="max-w-[1400px] mx-auto px-4 py-3 flex items-center justify-between">
            <div>
                <h1 class="text-xl font-black text-[#004A63] dark:text-[#F1BC54]">Inbox Admin</h1>
                <p class="text-sm text-slate-500 dark:text-slate-400">Gestion des messages entrants</p>
            </div>
            <div class="flex items-center gap-2">
                <button id="themeToggle" class="px-3 py-2 rounded-lg bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-200 border border-slate-200 dark:border-slate-700 text-xl font-semibold">
                    <span aria-hidden="true"></span>
                </button>
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button class="px-4 py-2 rounded-lg bg-[#004A63] text-white text-sm font-semibold hover:bg-[#F1BC54] hover:text-[#004A63]">
                        Déconnexion
                    </button>
                </form>
            </div>
        </div>
    </header>

    <main class="max-w-[1400px] mx-auto p-4">
        @if (session('success'))
            <div class="mb-4 rounded-lg bg-emerald-50 border border-emerald-200 text-emerald-700 p-3 text-sm">
                {{ session('success') }}
            </div>
        @endif

        <div class="grid lg:grid-cols-12 gap-4">
            <aside class="lg:col-span-3 bg-white dark:bg-slate-900 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm overflow-hidden">
                <div class="p-4 border-b border-slate-100 dark:border-slate-800">
                    <p class="text-xs uppercase tracking-widest text-slate-400">Messages</p>
                    <h2 class="font-bold text-slate-800 dark:text-slate-100">Boite de reception</h2>
                </div>
                @php
                    $activeMessageId = (int) request()->query('message', (int) ($selectedMessageId ?? 0));
                @endphp
                <div class="max-h-[70vh] overflow-y-auto divide-y divide-slate-100 dark:divide-slate-800">
                    @forelse($messages as $message)
                        <a href="{{ route('admin.messages.index') }}?message={{ $message->id }}"
                           data-message-id="{{ $message->id }}"
                           class="message-item relative block p-4 hover:bg-slate-50 dark:hover:bg-slate-800/60 transition-colors {{ (int) $activeMessageId === (int) $message->id ? 'bg-slate-50 dark:bg-slate-800' : '' }}">
                            @if((int) $activeMessageId === (int) $message->id)
                                <span class="absolute inset-y-1 left-0 w-1 rounded-r bg-amber-400"></span>
                            @endif
                            <div class="flex items-start justify-between gap-2">
                                <p class="font-semibold text-slate-800 dark:text-slate-100 truncate">{{ $message->nom_complet }}</p>
                                @if(! $message->is_read)
                                    <span class="inline-block w-2.5 h-2.5 rounded-full bg-amber-400 mt-1.5"></span>
                                @endif
                            </div>
                            <p class="text-xs text-slate-500 dark:text-slate-400 truncate">{{ $message->email }}</p>
                            <p class="text-xs text-slate-400 mt-2">{{ $message->created_at->format('d/m/Y H:i') }}</p>
                        </a>
                    @empty
                        <p class="p-6 text-sm text-slate-500 text-center">Aucun message</p>
                    @endforelse
                </div>
                <div class="p-3 border-t border-slate-100 dark:border-slate-800">
                    {{ $messages->links() }}
                </div>
            </aside>

            <section class="lg:col-span-6 bg-white dark:bg-slate-900 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm p-6">
                @if($selectedMessage)
                    <div class="flex items-center justify-between mb-4">
                        <div>
                            <h3 class="text-lg font-bold text-slate-800 dark:text-slate-100">{{ $selectedMessage->nom_complet }}</h3>
                            <p class="text-sm text-slate-500 dark:text-slate-400">{{ $selectedMessage->email }} @if($selectedMessage->telephone) • {{ $selectedMessage->telephone }} @endif</p>
                        </div>
                        <span class="text-xs px-3 py-1 rounded-full {{ $selectedMessage->is_read ? 'bg-slate-100 text-slate-600' : 'bg-amber-100 text-amber-700' }}">
                            {{ $selectedMessage->is_read ? 'Lu' : 'Nouveau' }}
                        </span>
                    </div>

                    <div class="rounded-xl bg-slate-50 dark:bg-slate-800 border border-slate-100 dark:border-slate-700 p-5 min-h-[280px]">
                        <p class="text-xs uppercase tracking-wider text-slate-400 mb-2">Message</p>
                        <p class="text-slate-700 dark:text-slate-200 leading-relaxed whitespace-pre-line">{{ $selectedMessage->message }}</p>
                    </div>
                @else
                    <div class="h-full min-h-[320px] flex items-center justify-center text-slate-500">
                        Selectionnez un message pour afficher le detail.
                    </div>
                @endif
            </section>

            <aside class="lg:col-span-3 bg-white dark:bg-slate-900 rounded-2xl border border-slate-200 dark:border-slate-800 shadow-sm p-5">
                @if($selectedMessage)
                    <h4 class="font-bold text-slate-800 dark:text-slate-100 mb-4">Details</h4>
                    <dl class="space-y-3 text-sm">
                        <div>
                            <dt class="text-slate-400">Service</dt>
                            <dd class="font-semibold text-slate-700 dark:text-slate-200">{{ $selectedMessage->type_service }}</dd>
                        </div>
                        <div>
                            <dt class="text-slate-400">Date</dt>
                            <dd class="font-semibold text-slate-700 dark:text-slate-200">{{ $selectedMessage->created_at->format('d/m/Y H:i') }}</dd>
                        </div>
                        <div>
                            <dt class="text-slate-400">Telephone</dt>
                            <dd class="font-semibold text-slate-700 dark:text-slate-200">{{ $selectedMessage->telephone ?: '-' }}</dd>
                        </div>
                    </dl>

                    <div class="mt-6 space-y-2">
                        <form method="POST" action="{{ route('admin.messages.toggle-read', $selectedMessage) }}">
                            @csrf
                            @method('PATCH')
                            <button class="w-full px-4 py-2.5 rounded-lg bg-slate-100 dark:bg-slate-800 hover:bg-slate-200 dark:hover:bg-slate-700 text-slate-700 dark:text-slate-200 text-sm font-semibold">
                                {{ $selectedMessage->is_read ? 'Marquer non lu' : 'Marquer lu' }}
                            </button>
                        </form>
                        <form method="POST" action="{{ route('admin.messages.destroy', $selectedMessage) }}" onsubmit="return confirm('Supprimer ce message ?')">
                            @csrf
                            @method('DELETE')
                            <button class="w-full px-4 py-2.5 rounded-lg bg-red-100 hover:bg-red-200 text-red-700 text-sm font-semibold">
                                Supprimer
                            </button>
                        </form>
                    </div>
                @else
                    <p class="text-slate-500 text-sm">Aucun detail disponible.</p>
                @endif
            </aside>
        </div>
    </main>
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