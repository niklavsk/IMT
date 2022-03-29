@extends('master')

@push('head')
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "NewsArticle",
            "author": {
                "@type": "Person",
                "name": "Anna Rozvadovska",
                "url": "https://github.com/annarozv"
            },
            "datePublished": "2022-03-28T08:00:00+08:00",
            "dateModified": "2022-03-28T08:00:00+08:00",
            "headline": "Popular Cat Cafes with Terraces",
            "image": "https://streetcatsgallery.files.wordpress.com/2022/03/pexels-sami-aksu-10207624.jpg"
        }
    </script>
@endpush

@push('content')
    <p>
        Alongside <a href="https://streetcatsgallery.wordpress.com/interesting-places-to-see-stray-cats/">places with
            many stray cats</a>, there are establishments dedicated to cats, such as cat cafes as seen below.
    </p>

    <figure class="wp-block-image size-large">
        <img src="https://streetcatsgallery.files.wordpress.com/2022/03/pexels-sami-aksu-10207624.jpg?w=1024" alt=""
             class="wp-image-17"/>
    </figure>

    <p></p>
    <br>
    <h3>Cat cafe "KOTOFFSKI"</h3>
    <h5 style="color:grey;">Daugavpils</h5>
    <figure class="wp-block-image size-large">
        <a href="https://www.tripadvisor.com/Restaurant_Review-g274962-d21038428-Reviews-Cat_cafe_KOTOFFSKI-Daugavpils_Latgale_Region.html">
            <img src="https://streetcatsgallery.files.wordpress.com/2022/03/very-nice-and-stylish.jpg?w=550" alt=""
                 class="wp-image-80"/>
        </a>
    </figure>

    <p></p>
    <br>
    <h3>Brooklin cat cafe</h3>
    <h5 style="color:grey;">New York</h5>

    <figure class="wp-block-image size-large">
        <a href="https://brooklyneagle.com/articles/2022/01/28/brooklyn-cat-cafes-resident-kitties-produce-video-to-combat-misinformation/">
            <img src="https://streetcatsgallery.files.wordpress.com/2022/03/cats-in-window-brooklyn-cat-cafe.jpg?w=1024"
                alt="" class="wp-image-85"/>
        </a>
    </figure>
@endpush
