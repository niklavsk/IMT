@extends('master')
@push('title')
    Homepage
@endpush

@push('content')
<h1>Welcome to the Stray Cats Gallery!</h1>

<img src="{{ url('/images/homepage.jpg') }}" class="half-width" alt="A picture of two cats on a street">

<p>Hello everyone! This website is dedicated to various topics about street cats.
    Here you will be able to read our articles about the most
    <a href="{{ route('interesting-places-to-see-stray-cats') }}">interesting places</a>
    where you can meet many cats all around the world, learn more about <a href="{{ route('cat-cafes') }}">popular cat cafes</a>
    and find out <a href="{{ route('how-to-care-for-street-cats') }}">how to properly care for</a> felines you found on the street.
    You can head over here <a href="{{ route('how-to-introduce-a-new-cat-to-other-cats-at-home') }}">to learn how to introduce
    a new cat to other cats at home!</a></p>
@endpush
