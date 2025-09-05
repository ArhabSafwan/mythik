@extends('frontend.mythik_main')
@section('title', $category->name)

@push('css')
    <style>
        .hero-section {
            background-image: url('{{ asset('storage/' . $category->image) }}');
            height: 50vh;
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
@endpush

@section('mythik_content')
    <div class="hero-section">
        {{-- The hero image is set via CSS --}}
    </div>

    <div class="container py-5">

        {{-- Products of the Parent Category --}}
        @if($parentProducts && $parentProducts->count() > 0)
            <section class="product-showcase-section mb-5">
                <h2 class="text-center mb-5">{{ strtoupper($category->name) }}</h2>
                <div class="row">
                    @foreach ($parentProducts as $product)
                        <div class="col-md-6 col-lg-3 mb-4">
                            <div class="card product-showcase-card h-100">
                                <a href="{{ route('product.show', ['slug' => $product->slug]) }}">
                                    <div class="card-img-container">
                                        <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="{{ $product->title }}">
                                    </div>
                                </a>
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title">{{ $product->title }}</h5>
                                    <p class="card-price">₹{{ $product->price }}</p>
                                    <a href="{{ route('product.show', ['slug' => $product->slug]) }}" class="btn btn-add-to-cart mt-auto">VIEW DETAILS</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
        @endif

        {{-- Products of Child Categories --}}
        @if($category->children && $category->children->count() > 0)
            @foreach ($category->children as $childCategory)
                @if($childCategory->products && $childCategory->products->count() > 0)
                    <section class="product-showcase-section mb-5">
                        <h2 class="text-center mb-5">{{ strtoupper($childCategory->name) }}</h2>
                        <div class="row">
                            @foreach ($childCategory->products as $product)
                                <div class="col-md-6 col-lg-3 mb-4">
                                    <div class="card product-showcase-card h-100">
                                        <a href="{{ route('product.show', ['slug' => $product->slug]) }}">
                                            <div class="card-img-container">
                                                <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="{{ $product->title }}">
                                            </div>
                                        </a>
                                        <div class="card-body d-flex flex-column">
                                            <h5 class="card-title">{{ $product->title }}</h5>
                                            <p class="card-price">₹{{ $product->price }}</p>
                                            <a href="{{ route('product.show', ['slug' => $product->slug]) }}" class="btn btn-add-to-cart mt-auto">VIEW DETAILS</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </section>
                @endif
            @endforeach
        @endif

    </div>
@endsection

@push('script')
{{-- Scripts removed as they are no longer needed --}}
@endpush
