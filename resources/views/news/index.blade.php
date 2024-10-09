<!-- resources/views/news/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mx-auto my-8">
    <h1 class="text-3xl font-bold">Actualités</h1>
    <ul class="mt-4">
        @foreach($news as $newsItem)
            <li>
                <a href="{{ route('news.show', $newsItem->id) }}" class="text-blue-600 hover:underline">{{ $newsItem->title }}</a>
            </li>
        @endforeach
    </ul>
</div>
@endsection