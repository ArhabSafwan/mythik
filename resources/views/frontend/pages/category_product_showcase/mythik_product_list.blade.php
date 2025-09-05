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

        .product-card {
            border: 1px solid #eee;
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 2rem;
            transition: box-shadow 0.3s ease;
        }

        .product-card:hover {
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .product-card img {
            width: 100%;
            height: auto;
        }

        .product-card-body {
            padding: 1rem;
        }

        .product-title {
            font-size: 1rem;
            font-weight: 600;
        }

        .product-price {
            font-size: 0.9rem;
            color: #666;
        }

        .add-to-cart-btn {
            display: block;
            width: 100%;
            border: 1px solid #333;
            background-color: #fff;
            color: #333;
            padding: 0.5rem;
            text-align: center;
            margin-top: 1rem;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .add-to-cart-btn:hover {
            background-color: #333;
            color: #fff;
        }
    </style>
@endpush

@section('mythik_content')
    <div class="hero-section-inner">
        {{-- The hero image is set via CSS --}}
    </div>

    <div class="container py-5">

        {{-- Products of the Parent Category --}}
        @if($parentProducts && $parentProducts->count() > 0)
            <section class="product-showcase-section mb-5">
                <h2 class="text-center mb-5">{{ strtoupper($category->name) }}</h2>
                <div class="row">
                    @foreach ($parentProducts as $product)
                        <div class="col-md-4 col-lg-3">
                            <div class="product-card">
                                <a href="{{ route('product.show', ['slug' => $product->slug]) }}">
                                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}"
                                        class="img-fluid">
                                </a>
                                <div class="product-card-body">
                                    <h5 class="product-title">{{ $product->title }}</h5>
                                    <p class="product-price">₹{{ $product->price }}</p>
                                    {{-- Add to cart form if needed --}}
                                    <button class="add-to-cart-btn" onclick="addToCart({{ $product->id }})">ADD TO CART</button>
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
                                <div class="col-md-4 col-lg-3">
                                    <div class="product-card">
                                        <a href="{{ route('product.show', ['slug' => $product->slug]) }}">
                                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}"
                                                class="img-fluid">
                                        </a>
                                        <div class="product-card-body">
                                            <h5 class="product-title">{{ $product->title }}</h5>
                                            <p class="product-price">₹{{ $product->price }}</p>
                                            {{-- Add to cart form if needed --}}
                                            <button class="add-to-cart-btn" onclick="addToCart({{ $product->id }})">ADD TO CART</button>
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
    <script>
        function addToCart(productId) {
            // Basic implementation, you might want to expand this with quantity and feedback
            axios.post('{{ route('cart.store') }}', {
                product_id: productId,
                quantity: 1
            })
                .then(function (response) {
                    // Maybe show a success message
                    alert(response.data.message);
                    // Update cart count in header
                    updateCartCount();
                })
                .catch(function (error) {
                    console.error(error);
                    alert('Something went wrong!');
                });
        }

        function updateCartCount() {
            axios.get('{{ route('cart.count') }}')
                .then(function (response) {
                    // Assuming you have an element with id 'cart-count' in your main layout
                    const cartCountElement = document.getElementById('cart-count');
                    if (cartCountElement) {
                        cartCountElement.innerText = response.data.count;
                    }
                })
                .catch(function (error) {
                    console.error(error);
                });
        }
    </script>
@endpush
