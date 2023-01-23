@extends('layout.app')
@section('title', 'home-page')

{{-- Main --}}
@section('main')
    <h1>Homepage</h1>

    @foreach ($trains as $elem )
        {{$elem['tipologia']}}
        {{$elem['train_number']}}
        {{$elem['destinazione']}}
        {{$elem['orarioArrivo']}}
        {{$elem['ritardo']}}
        {{$elem['binario']}}
    @endforeach


@endsection