<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Realisations | Synergie UP</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 min-h-screen">
    <header class="bg-white border-b border-slate-200 sticky top-0 z-10">
        <div class="max-w-[1400px] mx-auto px-4 py-3 flex items-center justify-between">
            <div>
                <h1 class="text-xl font-black text-[#004A63]">Realisations</h1>
                <p class="text-sm text-slate-500">Gestion des projets affiches sur le site</p>
            </div>
            <div class="flex items-center gap-2">
                <a href="{{ route('admin.messages.index') }}" class="px-4 py-2 rounded-lg bg-slate-100 text-slate-700 text-sm font-semibold">
                    Messages
                </a>
                <form method="POST" action="{{ route('admin.logout') }}">
                    @csrf
                    <button class="px-4 py-2 rounded-lg bg-[#004A63] text-white text-sm font-semibold">
                        Deconnexion
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

        @if ($errors->any())
            <div class="mb-4 rounded-lg bg-red-50 border border-red-200 text-red-700 p-3 text-sm">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <section class="bg-white rounded-2xl border border-slate-200 shadow-sm p-5 mb-4">
            <h2 class="text-lg font-bold text-slate-800 mb-4">Ajouter une realisation</h2>
            <form method="POST" action="{{ route('admin.realisations.store') }}" class="grid md:grid-cols-2 gap-4">
                @csrf
                <div>
                    <label class="text-sm text-slate-600">Titre</label>
                    <input name="titre" required class="w-full mt-1 px-3 py-2 border border-slate-300 rounded-lg" placeholder="Ex: Evenement Corporate" />
                </div>
                <div>
                    <label class="text-sm text-slate-600">Sous-titre</label>
                    <input name="sous_titre" class="w-full mt-1 px-3 py-2 border border-slate-300 rounded-lg" placeholder="Ex: Lancement de produit" />
                </div>
                <div class="md:col-span-2">
                    <label class="text-sm text-slate-600">URL image</label>
                    <input type="url" name="image_url" required class="w-full mt-1 px-3 py-2 border border-slate-300 rounded-lg" placeholder="https://..." />
                </div>
                <div>
                    <label class="text-sm text-slate-600">Ordre</label>
                    <input type="number" name="ordre" min="0" value="0" class="w-full mt-1 px-3 py-2 border border-slate-300 rounded-lg" />
                </div>
                <div class="md:col-span-2">
                    <button class="px-4 py-2.5 rounded-lg bg-[#004A63] text-white text-sm font-semibold">
                        Publier la realisation
                    </button>
                </div>
            </form>
        </section>

        <section class="space-y-3">
            @forelse($realisations as $realisation)
                <article class="bg-white rounded-2xl border border-slate-200 shadow-sm p-4">
                    <form method="POST" action="{{ route('admin.realisations.update', $realisation) }}" class="grid md:grid-cols-2 gap-4 mb-3">
                        @csrf
                        @method('PATCH')
                        <div>
                            <label class="text-sm text-slate-600">Titre</label>
                            <input name="titre" required value="{{ $realisation->titre }}" class="w-full mt-1 px-3 py-2 border border-slate-300 rounded-lg" />
                        </div>
                        <div>
                            <label class="text-sm text-slate-600">Sous-titre</label>
                            <input name="sous_titre" value="{{ $realisation->sous_titre }}" class="w-full mt-1 px-3 py-2 border border-slate-300 rounded-lg" />
                        </div>
                        <div class="md:col-span-2">
                            <label class="text-sm text-slate-600">URL image</label>
                            <input type="url" name="image_url" required value="{{ $realisation->image_url }}" class="w-full mt-1 px-3 py-2 border border-slate-300 rounded-lg" />
                        </div>
                        <div>
                            <label class="text-sm text-slate-600">Ordre</label>
                            <input type="number" name="ordre" min="0" value="{{ $realisation->ordre }}" class="w-full mt-1 px-3 py-2 border border-slate-300 rounded-lg" />
                        </div>
                        <div class="md:col-span-2">
                            <button class="px-4 py-2 rounded-lg bg-slate-100 text-slate-800 text-sm font-semibold">
                                Enregistrer
                            </button>
                        </div>
                    </form>
                    <form method="POST" action="{{ route('admin.realisations.destroy', $realisation) }}" onsubmit="return confirm('Supprimer cette realisation ?')">
                        @csrf
                        @method('DELETE')
                        <button class="px-4 py-2 rounded-lg bg-red-100 text-red-700 text-sm font-semibold">
                            Supprimer
                        </button>
                    </form>
                    <div class="mt-3">
                        <img src="{{ $realisation->image_url }}" alt="{{ $realisation->titre }}" class="w-full max-w-sm h-44 object-cover rounded-lg border border-slate-200">
                    </div>
                </article>
            @empty
                <p class="text-slate-500 text-sm">Aucune realisation publiee pour le moment.</p>
            @endforelse
        </section>
    </main>
</body>
</html>
