<div class="flex flex-col md:max-w-3xl md:min-w-3xl m-auto text-center bg-slate-200 rounded-xl">
    <div>
        <img class="rounded-t-xl w-full" src="{{ asset('img/' . $article->frontMatterGet('img')) }}" alt="Post image" />
    </div>
    <div class="mt-10">
        <h2 class="text-4xl">{{ $article->frontMatterGet('titolo') }}</h2>
        <div class="mt-6">
            <a href="/posts/?author={{ $article->frontMatterGet('autore') }}"
                class="inline-block text-md text-slate-700">di
                {{ $article->frontMatterGet('autore') }}</a><span class="text-sm text-slate-500">
                &#8226; {{ $article->frontMatterGet('data') }}</span>
        </div>
        <div class="md:p-6 p-4 text-justify mb-6">
            <p class="text-slate-800 md:text-lg text-md">{!! nl2br($article->body_markdown) !!}</p>
        </div>
        @if ($article->frontMatterGet('parole'))
            <h2 class="text-sm m-6">Parole: {{ $article->frontMatterGet('parole') }}</h2>
        @endif
    </div>
</div>

<!--
tema: 
titolo: Al mare
autore: Abha
parole: la solitudine, mi scaldo, surf, rilassatezza, sognare, il sole, trambusto, aquiloni
data: '11 novembre 2020'
img: by-the-sea.jpg
tags:
-->