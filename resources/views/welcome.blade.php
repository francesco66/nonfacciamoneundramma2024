<x-app-layout>
    <div class="min-h-screen flex flex-col items-center bg-gray-900">
        <div class="pt-20 pb-10">
            <p class="text-5xl text-slate-200 border-b-2 border-slate-300 pb-4 mb-4">NON FACCIAMONE UN DRAMMA</p>
        </div>
        <div class="pb-10">
            <img src="{{ asset('img/teatro.png') }}" alt="il teatro">
        </div>
        <div class="flex flex-col justify-center items-center gap-6">
            <a href="/mdma" class="text-3xl text-slate-200 bg-slate-800 border border-slate-600 hover:bg-slate-700 hover:border-slate-100 rounded-xl p-4"><span class="text-slate-200">MDMA</span> - Mai Dire Mi Arrendo</a>
            <a href="/ndi" class="text-3xl text-slate-200 bg-slate-800 border border-slate-600 hover:bg-slate-700 hover:border-slate-100 rounded-xl p-4">NDI - Nel Dominio dell'Incerto</a>
        </div>
    </div>
</x-app-layout>
