@extends('layouts.main')
@section('title', 'Home')
@section('header')
@section('footer')

    @foreach ($events as $event)
        <p>{{ $event->title }} -- {{ $event->description }}</p>
    @endforeach

@endsection
