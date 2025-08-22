@extends('backend.template.template')
@section('title', 'Dashboard')
@section('main')
    <div class="row">
        <div class="card-title mb-0">
            <h3>Revenue From Participants</h3>
        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-3 mb-4">
                <div class="card card-border-shadow-primary">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2 pb-1">
                            <div class="avatar me-2">
                                <span class="avatar-initial rounded bg-label-primary"><i
                                        class="ti ti-currency-taka"></i></span>
                            </div>
                            <h4 class="ms-1 mb-0 text-primary">1000 </h4>
                        </div>
                        <h5 class="mb-1">Products</h5>

                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4">
                <div class="card card-border-shadow-primary">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2 pb-1">
                            <div class="avatar me-2">
                                <span class="avatar-initial rounded bg-label-primary"><i
                                        class="ti ti-currency-taka"></i></i></span>
                            </div>
                            <h4 class="ms-1 mb-0 text-primary">30</h4>
                        </div>
                        <h5 class="mb-1">Customer</h5>

                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4">
                <div class="card card-border-shadow-primary">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2 pb-1">
                            <div class="avatar me-2">
                                <span class="avatar-initial rounded bg-label-primary"><i
                                        class="ti ti-currency-taka"></i></i></span>
                            </div>
                            <h4 class="ms-1 mb-0 text-primary">100</h4>
                        </div>
                        <h5 class="mb-1">Order</h5>

                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 mb-4">
                <div class="card card-border-shadow-primary">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-2 pb-1">
                            <div class="avatar me-2">
                                <span class="avatar-initial rounded bg-label-primary"><i
                                        class="ti ti-currency-taka"></i></i></span>
                            </div>
                            <h4 class="ms-1 mb-0 text-primary">BDT 100,000</h4>
                        </div>
                        <h5 class="mb-1">Total Income</h5>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
@endpush
