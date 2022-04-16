@extends('master')

@push('title')
    Guides
@endpush

@push('description')
    Introduce yourself to our list of guides!
@endpush

@push('content')
    <h1>Articles about guides</h1>

    <ul class="article-list">
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
