{{--@extends('layouts.app')--}}
@extends('layouts.base')

@section('title', 'Мої оголошення')

@section('main')
{{--@section('content')--}}
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="text-center"><h2>Ласкаво просимо, {{ Auth::user()->name }}</h2></div>
            <div class="text-end"><a href="{{route('bb.add')}}">Додати оголошення</a></div>
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('Dashboard') }}</div>--}}

{{--                <div class="card-body">--}}
{{--                    @if (session('status'))--}}
{{--                        <div class="alert alert-success" role="alert">--}}
{{--                            {{ session('status') }}--}}
{{--                        </div>--}}
{{--                    @endif--}}

{{--                    {{ __('You are logged in!') }}--}}
{{--                </div>--}}
{{--            </div>--}}
            @if(count($bbs))
                <table class="table table-striped">
                    <thead>
                    <th>Товар</th>
                    <th>Вартість</th>
                    <th></th>
{{--                    <th></th>--}}
                    <th></th>
                    </thead>
                    <tbody>
                    @foreach($bbs as $bb)
                        <tr>
                            <td>{{ $bb->title }}</td>
                            <td>{{ $bb->price }}</td>
{{--                            <td><a href="{{ route('detail', ['bb' => $bb->id]) }}">Докладно</a></td>--}}
                            <td><a href="{{ route('bb.edit', ['bb'=>$bb->id]) }}">Змінити</a></td>
                            <td><a href="{{ route('bb.delete', ['bb'=>$bb->id]) }}">Видалити</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <h2 class="text-center">Оголошень немає</h2>
            @endif
        </div>
    </div>
</div>
@endsection
