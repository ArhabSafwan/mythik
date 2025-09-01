@extends('frontend.mythik_main')
@section('title', 'Shopping Cart')

@section('mythik_content')
    <div class="container my-5">
        <h1 class="mb-4">Shopping Cart</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if($cartItems->count() > 0)
            <div class="row">
                <div class="col-lg-8">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Product</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Total</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $subtotal = 0; @endphp
                                @foreach($cartItems as $item)
                                    @php
                                        $total = $item->price * $item->quantity;
                                        $subtotal += $total;
                                    @endphp
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                @if(isset($item->product) && $item->product->image)
                                                    <img src="{{ asset('storage/' . $item->product->image) }}"
                                                        alt="{{ $item->product->title }}"
                                                        style="width: 50px; height: 50px; object-fit: cover;" class="me-3">
                                                    <a
                                                        href="{{ route('product.show', ['slug' => $item->product->slug]) }}">{{ $item->product->title }}</a>
                                                @endif
                                            </div>
                                        </td>
                                        <td>${{ number_format($item->price, 2) }}</td>
                                        <td>
                                            <input type="number" value="{{ $item->quantity }}" min="1" class="form-control"
                                                style="width: 70px;">
                                        </td>
                                        <td>${{ number_format($total, 2) }}</td>
                                        <td>
                                            <form class="delete-form" action="{{ route('cart.destroy', $item->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"><i
                                                        class="fas fa-trash"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Cart Summary</h5>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Subtotal
                                    <span>${{ number_format($subtotal, 2) }}</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    Shipping
                                    <span>Free</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center fw-bold">
                                    Total
                                    <span>${{ number_format($subtotal, 2) }}</span>
                                </li>
                            </ul>
                            <a href="#" class="btn btn-primary w-100 mt-3">Proceed to Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="text-center">
                <h2>Your cart is empty.</h2>
                <a href="{{ url('/') }}" class="btn btn-primary mt-3">Continue Shopping</a>
            </div>
        @endif
    </div>
@endsection

@push('script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function () {
            $('.delete-form').on('submit', function (e) {
                e.preventDefault();
                var form = this;

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                })
            });
        });
    </script>
@endpush
