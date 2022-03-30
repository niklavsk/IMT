@extends('master')
@push('title')
    Popular Cat Cafes with terraces
@endpush

@push('content')
<h1>Popular Cat Cafes with terraces</h1>

<!-- wp:paragraph -->
<p>Alongside <a href="{{ route('interesting-places-to-see-stray-cats') }}">places with many stray cats</a>, there are establishments dedicated to cats, such as cat cafes as seen below.</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":17,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="{{ url('/images/cat-cafes-1.jpg') }}" alt="" class="wp-image-17"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<br>
<h3>Cat cafe "KOTOFFSKI"</h3>
<h5 style="color:grey;">Daugavpils</h5>
<!-- /wp:html -->

<!-- wp:image {"id":80,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><a href="https://www.tripadvisor.com/Restaurant_Review-g274962-d21038428-Reviews-Cat_cafe_KOTOFFSKI-Daugavpils_Latgale_Region.html"><img src="{{ url('/images/cat-cafes-2.jpg') }}" alt="" class="wp-image-80"/></a></figure>
<!-- /wp:image -->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph -->

<!-- wp:html -->
<br>
<h3>Brooklin cat cafe</h3>
<h5 style="color:grey;">New York</h5>
<!-- /wp:html -->

<!-- wp:image {"id":85,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><a href="https://brooklyneagle.com/articles/2022/01/28/brooklyn-cat-cafes-resident-kitties-produce-video-to-combat-misinformation/"><img src="{{ url('/images/cat-cafes-3.jpg') }}" alt="" class="wp-image-85"/></a></figure>
<!-- /wp:image -->
@endpush
