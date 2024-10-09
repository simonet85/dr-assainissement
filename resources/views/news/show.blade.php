<!-- resources/views/news/show.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container mx-auto my-8">
    <h1 class="text-3xl font-bold">{{ $newsItem->title }}</h1>
    <p class="mt-4">{{ $newsItem->content }}</p>
</div>
@endsection