@extends('layouts.base')

@section('title', 'Редагування оголошення :: Мої оголошення')

@section('main')
    <form action="{{ route('bb.update', ['bb'=>$bb->id]) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="txtTitle">Товар</label>
            <input name="title" id="txtTitle" class="form-control @error('title') is-invalid @enderror"
                   value="{{ old('title', $bb->title) }}">
            @error('title')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="txtContent">Опис</label>
            <textarea name="content" id="txtContent" rows="3" class="form-control @error('content') is-invalid @enderror">{{ old('content', $bb->content) }}</textarea>
            @error('content')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="txtPrice">Ціна</label>
            <input name="price" id="txtPrice" class="form-control @error('price') is-invalid @enderror" value="{{ old('price', $bb->price) }}">
            @error('price')
            <span class="invalid-feedback">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Оновити">
        </div>
    </form>
@endsection
