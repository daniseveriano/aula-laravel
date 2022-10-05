@extends('layouts.main')
@section('title', 'Login')
@section('header')
@section('footer')

    <h1>Busca</h1>

    @if ($busca != '')
        <p>O usuário está buscando por {{ $busca }}</p>
    @endif

@endsection