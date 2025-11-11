@extends('layouts.base')

@section('title', 'Всі оголошення')

@section('main')
    <h1 class="my-3 text-center">Оголошення:</h1>
    @if(count($bbs))
        <table class="table table-striped">
            <thead>
            <th>Товар</th>
            <th>Вартість</th>
{{--            <th></th>--}}
            </thead>
            <tbody>
            @foreach($bbs as $bb)
                <tr>
                    <td>{{ $bb->title }}</td>
                    <td>{{ $bb->price }}</td>
{{--                    <td><a href="{{ route('detail', ['bb' => $bb->id]) }}">Докладно</a></td>--}}
                </tr>
            @endforeach
            </tbody>
        </table>
    @else
        <h2 class="text-center">Оголошень немає</h2>
    @endif
@endsection
