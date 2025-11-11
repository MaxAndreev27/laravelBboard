@extends('layouts.base')

@section('title', 'Видалення оголошення :: Мої оголошення')

@section('main')
    <h2 class="my-3 text-center">Оголошення</h2>
    <div>Автор: {{ $bb->user->name }}</div>
    <div>{{ $bb->title }}</div>
    <div>{{ $bb->content }}</div>
    <div>{{ $bb->price }}</div>
    <div><a href="{{ route('home') }}">До списку оголошень</a></div>
    <form action="{{ route('bb.destroy', ['bb'=>$bb->id]) }}" method="POST">
        @csrf
        @method('DELETE')
        <div class="form-group">
            <input type="submit" class="btn btn-danger" value="Видалити">
        </div>
    </form>
@endsection

