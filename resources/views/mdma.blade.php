<x-app-layout>
    <div class="min-h-screen flex flex-col justify-center items-center gap-4 bg-gray-900">

        <p class="text-4xl text-slate-200 mt-10">MDMA</p>

        @forEach ($articles as $article)
            <!-- <div class="text-md text-slate-100">{{ $article->frontMatterGet('titolo') }}</div>
            <div class="text-md text-slate-100">{{ $article->frontMatterGet('autore') }}</div> -->
            <x-postpanel :article="$article"></x-postpanel>
        @endforeach

    </div>
</x-app-layout>