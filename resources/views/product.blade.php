@extends('layouts.base')

@section('head-script')
    <style>
        main {
            background: var(--primary-color-light);
        }
    </style>
@endsection

@section('page-title')
    {{$prodotto['titolo']}}
@endsection

@section('page-content')
    <h1>{{$prodotto['titolo']}}</h1>
    <img src="{{$prodotto['src-p']}}" alt="{{$prodotto['titolo']}}">
    <p>
        {!!$prodotto['descrizione']!!}
    </p>
@endsection