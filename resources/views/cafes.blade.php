@extends('master')

@push('title')
    Popular Cat Cafes with terraces
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
    <h1>Popular Cat Cafes with terraces</h1>
    <p>
        Alongside <a href="{{ route('interesting-places-to-see-stray-cats') }}">places with
            many stray cats</a>, there are establishments dedicated to cats, such as cat cafes as seen below.
    </p>

<figure class="wp-block-image size-large"><img src="{{ url('/images/cat-cafes-1.jpg') }}" alt="Cat in the streets" class="half-width"/></figure>

<p></p>
<br>
<h3>Cat cafe "KOTOFFSKI"</h3>
<h5 style="color:grey;">Daugavpils</h5>

<figure class="wp-block-image size-large"><a href="https://www.tripadvisor.com/Restaurant_Review-g274962-d21038428-Reviews-Cat_cafe_KOTOFFSKI-Daugavpils_Latgale_Region.html" rel="nofollow"><img src="{{ url('/images/cat-cafes-2.jpg') }}" alt="KOTOFFSKI cat cafe" class="half-width"/></a></figure>

<p></p>

<br>
<h3>Brooklin cat cafe</h3>
<h5 style="color:grey;">New York</h5>

<figure class="wp-block-image size-large"><a href="https://brooklyneagle.com/articles/2022/01/28/brooklyn-cat-cafes-resident-kitties-produce-video-to-combat-misinformation/" rel="nofollow"><img src="{{ url('/images/cat-cafes-3.jpg') }}" alt="Brooklin cat cafe" class="half-width"/></a></figure>

    <p>
        A cat café is a theme café whose attraction is cats who can be watched and played with. Patrons pay a cover fee,
        generally hourly, and thus cat cafés can be seen as a form of supervised indoor pet rental. "Cat café" has been
        officially recognized in the online edition of the Oxford Dictionary of English since August 2015.
    </p>

    <p>
        The world's first cat café, "Cat Flower Garden", opened in Taipei, Taiwan, in 1998 and eventually became
        a global tourist destination. The concept blossomed in Japan, where the first one named "Neko no Jikan"
        (lit. "Cat's Time") was opened in Osaka in 2004. Due to Japan's land size and population, many residents live
        in small apartments or condominiums which do not allow pets, making a cat café a very popular destination for
        young workers looking for the companionship and comfort offered. Tokyo's first cat café, named "Neko no mise"
        (Cat’s Store), opened in 2005. After this, the popularity of cat cafés boomed in Japan. From 2005 to 2010,
        seventy-nine cat cafés opened across the country.
    </p>
@endpush
