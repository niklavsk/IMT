@extends('master')

@push('title')
    Destinations
@endpush

@push('description')
    Introduce yourself to the list of articles about places you can visit!
@endpush

@push('content')
    <h1>Articles about destinations</h1>

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
    </ul>
@endpush
