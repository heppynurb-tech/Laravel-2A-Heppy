@extends('layouts.olshop')

@section('title', 'Product')

@section('content')
    <section>
        <p class="eyebrow">Koleksi kami</p>
        <h1>Product</h1>
        <p class="intro">Pilih produk untuk melihat detail harganya.</p>
        <div class="product-grid">
            @foreach ($products as $product)
                <article class="product-card">
                    <span class="product-icon" aria-hidden="true">✦</span>
                    <h2>{{ $product['name'] }}</h2>
                    <p class="price">Rp {{ number_format($product['price'], 0, ',', '.') }}</p>
                    <a class="button" href="{{ route('product.detail', ['harga' => $product['price']]) }}">Lihat detail</a>
                </article>
            @endforeach
        </div>
    </section>
@endsection
