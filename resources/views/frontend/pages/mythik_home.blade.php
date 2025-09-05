@extends('frontend.mythik_main')
@section('title', 'Mythik')


@section('mythik_content')
    <div class="hero-section">
        <div class="container text-center">
            <a href="#" class="btn btn-outline-light">VIEW COLLECTIONS</a>
        </div>
    </div>

    <section class="categories-section py-5">
        <div class="container">
            <h2 class="text-center mb-5">CATEGORIES</h2>
            <div class="row">
                @foreach ($categories as $category)
                    <div class="col-lg-6 mb-4">
                        <div class="category-item">
                            <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}" class="img-fluid">
                            <div class="category-item-overlay">
                                <h3>{{ strtoupper($category->name) }}</h3>
                                <a href="{{ route('category.show', $category->slug) }}" class="btn btn-light">SHOP NOW</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="trending-section py-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="m-0">TRENDING</h2>
                <a href="#" class="text-dark">View All</a>
            </div>
            <div class="row">
                @foreach ($trendingProducts as $product)
                    <div class="col-md-4 mb-4">
                        <a href="{{ route('product.show', ['slug' => $product->slug]) }}">
                            <div class="trending-item">
                                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}"
                                    class="img-fluid">
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="trending-section py-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="m-0">Best Selling</h2>
                <a href="#" class="text-dark">View All</a>
            </div>
            <div class="row">
                @foreach ($bestSellingProducts as $product)
                    <div class="col-md-4 mb-4">
                        <a href="{{ route('product.show', ['slug' => $product->slug]) }}">
                            <div class="trending-item">
                                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}"
                                    class="img-fluid">
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="trending-section py-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h2 class="m-0">Shop By Fandom</h2>
                <a href="#" class="text-dark">View All</a>
            </div>
            <div class="row">
                @foreach ($fandomProducts as $product)
                    <div class="col-md-4 mb-4">
                        <a href="{{ route('product.show', ['slug' => $product->slug]) }}">
                            <div class="trending-item">
                                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}"
                                    class="img-fluid">
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="categories-section py-5">
        <div class="container">
            <h2 class="text-center mb-5">Believers Choice</h2>
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="category-item">
                        <img src="{{ asset('frontend/images/believer/palestine1.jpg') }}" alt="Totes" class="img-fluid">
                        <div class="category-item-overlay">
                            <h3>Totes</h3>
                            <a href="#" class="btn btn-light">SHOP NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="category-item">
                        <img src="{{ asset('frontend/images/believer/palestine2.jpg') }}" alt="T-SHIRT" class="img-fluid">
                        <div class="category-item-overlay">
                            <h3>T-SHIRT</h3>
                            <a href="#" class="btn btn-light">SHOP NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection