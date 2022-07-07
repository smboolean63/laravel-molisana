@extends('layouts.base')

@section('page-title')
    Home Page
@endsection

@section('page-content')
@dump($paste)
    <section>
        <h2>LE LUNGHE</h2>
        <ul>
            @foreach ($paste['lunga'] as $pasta)
                <li>
                    <img src="{{$pasta['src']}}" alt="">
                    <h3>{{$pasta['titolo']}}</h3>
                </li>
            @endforeach
        </ul>
    </section>
@endsection