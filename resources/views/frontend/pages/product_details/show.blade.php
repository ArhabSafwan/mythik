@extends('frontend.layouts.app')

@section('content')
    <div class="container my-5 product-details-container">
        <div class="row">
            <div class="col-md-6 product-image-gallery">
                <img src="{{ asset('storage/products/' . $product->image) }}" alt="{{ $product->title }}"
                    class="img-fluid rounded">
            </div>
            <div class="col-md-6 product-info">
                <h1 class="display-5 fw-bold">{{ $product->title }}</h1>
                <p class="lead">{{ $product->description }}</p>
                <hr>
                <h2 class="price">${{ number_format($product->price, 2) }}</h2>
                <div class="d-flex align-items-center mb-3 quantity-selector">
                    <span class="me-3">Quantity:</span>
                    <div class="input-group">
                        <button class="btn btn-outline-secondary" type="button" id="button-minus">-</button>
                        <input type="text" class="form-control text-center" value="1" id="quantity-input">
                        <button class="btn btn-outline-secondary" type="button" id="button-plus">+</button>
                    </div>
                </div>
                <div class="d-grid gap-2 d-md-block">
                    <button class="btn btn-primary btn-lg" type="button">
                        <i class="fas fa-shopping-cart me-2"></i> Add to Cart
                    </button>
                    <button class="btn btn-outline-secondary btn-lg" type="button">
                        <i class="fas fa-heart me-2"></i> Add to Wishlist
                    </button>
                </div>
                <div class="mt-4">
                    <p><strong>Category:</strong> {{ $product->category->title }}</p>
                    <p><strong>Availability:</strong>
                        @if ($product->stock > 0)
                            <span class="text-success">In Stock</span>
                        @else
                            <span class="text-danger">Out of Stock</span>
                        @endif
                    </p>
                </div>
            </div>
        </div>

        <!-- Product Tabs -->
        <div class="mt-5 product-tabs">
            <ul class="nav nav-tabs" id="productTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="description-tab" data-bs-toggle="tab"
                        data-bs-target="#description" type="button" role="tab" aria-controls="description"
                        aria-selected="true">Description</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="reviews-tab" data-bs-toggle="tab" data-bs-target="#reviews"
                        type="button" role="tab" aria-controls="reviews" aria-selected="false">Reviews</button>
                </li>
            </ul>
            <div class="tab-content" id="productTabContent">
                <div class="tab-pane fade show active" id="description" role="tabpanel"
                    aria-labelledby="description-tab">
                    <p class="mt-3">{{ $product->description }}</p>
                </div>
                <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                    <div class="mt-3">
                        <!-- Review Form -->
                        <form class="review-form">
                            <h5>Write a review</h5>
                            <div class="mb-3">
                                <label for="rating" class="form-label">Rating</label>
                                <select class="form-select" id="rating">
                                    <option value="5">5 Stars</option>
                                    <option value="4">4 Stars</option>
                                    <option value="3">3 Stars</option>
                                    <option value="2">2 Stars</option>
                                    <option value="1">1 Star</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="reviewText" class="form-label">Your review</label>
                                <textarea class="form-control" id="reviewText" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit Review</button>
                        </form>
                        <hr>
                        <!-- Existing Reviews -->
                        <div class="review">
                            <div class="d-flex mt-4">
                                <div class="flex-shrink-0">
                                    <img src="https://via.placeholder.com/64" alt="User" class="rounded-circle">
                                </div>
                                <div class="ms-3">
                                    <h6 class="mt-0">John Doe</h6>
                                    <div class="review-rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="far fa-star"></i>
                                    </div>
                                    <p>This is a great product! Highly recommended.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const minusButton = document.getElementById('button-minus');
            const plusButton = document.getElementById('button-plus');
            const quantityInput = document.getElementById('quantity-input');

            minusButton.addEventListener('click', function() {
                let currentValue = parseInt(quantityInput.value);
                if (currentValue > 1) {
                    quantityInput.value = currentValue - 1;
                }
            });

            plusButton.addEventListener('click', function() {
                let currentValue = parseInt(quantityInput.value);
                quantityInput.value = currentValue + 1;
            });
        });
    </script>
@endpush
