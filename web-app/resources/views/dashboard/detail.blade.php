@extends('layouts.olshop')

@section('title', 'Detail ' . $product['name'])

@section('content')
    <article class="panel">
        <p class="eyebrow">Detail produk</p>
        <h1>{{ $product['name'] }}</h1>
        <p class="intro">Harga produk pilihanmu:</p>
        <p class="price">Rp {{ number_format($product['price'], 0, ',', '.') }}</p>
        <a class="back-link" href="{{ route('product') }}">← Kembali ke Product</a>
    </article>
@endsection
