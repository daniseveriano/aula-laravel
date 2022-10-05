@extends('layouts.main')
@section('title', 'Conversor')
@section('header')
@section('footer')

@if($id != null)
    <h1>Conversor</h1>
    <p>Exibindo conversor de moeda {{$id}}</p>
@endif

@endsection