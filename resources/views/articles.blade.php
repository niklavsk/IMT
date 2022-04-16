@extends('master')

@push('title')
    All articles
@endpush

@push('head')
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "NewsArticle",
            "headline": "Popular Cat Cafes with Terraces",
            "author": {
                "@type": "Person",
                "name": "Anna",
                "url": "https://github.com/annarozv"
            },
            "datePublished": "2022-03-28T08:00:00+08:00",
            "dateModified": "2022-04-10T08:00:00+08:00",
            "image": "https://kadikis.id.lv/images/cat-cafes-1.jpg"
        }
    </script>
@endpush

@push('content')
    <h1>All articles</h1>

    <ul class="article-list">
        <li>
            <div class="image-container">
                <img src="{{ url('/images/interesting-places-1.jpg') }}" alt="Stray Cats on the Tashirojima Cat Island in Japan"/>
            </div>
            <a href="{{ route('interesting-places-to-see-stray-cats') }}">Interesting places where you can find a lot of stray cats</a>
        </li>

        <li>
            <div class="image-container">
                <img src="{{ url('/images/cat-cafes-1.jpg') }}" alt="Cat in the streets"/>
            </div>

            <a href="{{ route('cat-cafes') }}">Popular Cat Cafes with terraces</a>
        </li>

        <li>
            <div class="image-container">
                <img src="{{ url('/images/care-1.jpg') }}" alt="Cat next to a window"/>
            </div>

            <a href="{{ route('how-to-care-for-street-cats') }}">How to Care for Street Cats</a>
        </li>

        <li>
            <div class="image-container">
                <img src="{{ url('/images/donalds.jpg') }}" alt="Cat on a closet"/>
            </div>

            <a href="{{ route('how-to-introduce-a-new-cat-to-other-cats-at-home') }}">How to Introduce a New Cat to Other Cats at Home</a>
        </li>
    </ul>
@endpush
