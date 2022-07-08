@extends('layouts.base')

@section('page-title')
    Home Page
@endsection

@section('page-content')
    <section>
        <h2>LE LUNGHE</h2>
        <ul class="product-list">
            @foreach ($paste['lunga'] as $pasta)
                <li>
                    <a href="{{route('product', ['id' => $pasta['id']])}}">
                        <x-card-product :image="$pasta['src']" :title="$pasta['titolo']"/>
                    </a>
                </li>
            @endforeach
        </ul>
    </section>
    <section>
        <h2>LE CORTE</h2>
        <ul class="product-list">
            @foreach ($paste['corta'] as $pasta)
                <li>
                    <a href="{{route('product', ['id' => $pasta['id']])}}">
                        <x-card-product :image="$pasta['src']" :title="$pasta['titolo']"/>
                    </a>
                </li>
            @endforeach
        </ul>
    </section>
    <section>
        <h2>LE CORTISSIME</h2>
        <ul class="product-list">
            @foreach ($paste['cortissima'] as $pasta)
                <li>
                    <a href="{{route('product', ['id' => $pasta['id']])}}">
                        <x-card-product :image="$pasta['src']" :title="$pasta['titolo']"/>
                    </a>
                </li>
            @endforeach
        </ul>
    </section>
@endsection