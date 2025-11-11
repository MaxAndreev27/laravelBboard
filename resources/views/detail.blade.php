@extends('layouts.base')

@section('title', $bb->title)

@section('main')
    <h2 class="my-3 text-center">Оголошення</h2>
    <div>Автор: {{ $bb->user->name }}</div>
    <div>{{ $bb->title }}</div>
    <div>{{ $bb->content }}</div>
    <div>{{ $bb->price }}</div>
    <div><a href="{{ route('home') }}">До списку оголошень</a></div>
@endsection

