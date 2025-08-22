{{-- filepath: resources/views/frontend/pages/checkout/create.blade.php --}}
@extends('frontend.fif_main')
@section('ftitle', 'Checkout')
@section('fif_content')
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css"
        integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNfttjNsDmNatFVc=" crossorigin="anonymous" />

    <style>
        label {
            color: #000000;
        }

        .checkout-card {
            border-radius: 12px;
            box-shadow: 0 2px 24px rgba(0, 0, 0, 0.07);
            background: #fff;
            padding: 2rem;
            margin-bottom: 2rem;
        }

        .order-summary {
            background: #f8f9fa;
            border-radius: 12px;
            padding: 1.5rem;
        }

        .order-summary img {
            border-radius: 8px;
            width: 100%;
            object-fit: cover;
            margin-bottom: 1rem;
        }

        .checkout-label {
            font-weight: 500;
            margin-bottom: 0.25rem;
        }

        .form-control,
        .form-select {
            border-radius: 6px;
        }

        .checkout-section-title {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 1rem;
        }

        .checkout-divider {
            border-top: 1px solid #e9ecef;
            margin: 1.5rem 0;
        }

        .checkout-btn {
            width: 100%;
            padding: 0.75rem;
            font-size: 1.1rem;
            border-radius: 6px;
            background: #007160;
            color: #fff;
            border: none;
            font-weight: 600;
            transition: background 0.2s;
        }

        .checkout-btn:hover {
            background: #004238;
            color: #fff;
        }

        #termsModal ul {
            list-style-type: disc !important;
            padding-left: 1.5rem !important;
            margin-bottom: 1rem;
        }

        #termsModal li {
            list-style-type: disc !important;
            display: list-item !important;
            margin-bottom: 0.5rem;
        }

        #termsModal .modal-body {
            padding-left: 4rem;
            padding-right: 4rem;
        }

        .custom-tooltip {
            position: relative;
            cursor: help;
        }

        .custom-tooltip::after {
            content: attr(data-tooltip);
            position: absolute;
            bottom: 125%;
            left: 0;
            background-color: #343a40;
            color: #fff;
            padding: 10px 12px;
            font-size: 14px;
            width: 260px;
            border-radius: 6px;
            white-space: normal;
            z-index: 999;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.2s ease-in-out;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
        }

        .custom-tooltip:hover::after {
            opacity: 1;
        }

        @media (max-width: 991.98px) {
            .checkout-card {
                padding: 1rem;
            }

            .order-summary {
                margin-top: 2rem;
            }
        }
    </style>

    <section class="registration-progress countdown">
        <span class="leaf"></span>
        <div class="container">
            <div class="row w-100 justify-content-start content">
                <div class="col-lg-12 mb-4 mb-lg-0">
                    <h2 class="highlight">Checkout</h2>
                </div>
                <p class="text-white fw-bold mt-1">
                    <i class="fas fa-info-circle text-white"></i> Please note:
                </p>
                <ul class=" text-white ps-3 mx-2">

                    <li class="text-white" style="list-style: disc">
                        FIF is committed to a low-waste, climate-friendly event—expect simple, sustainable choices
                        and bring a
                        like-minded spirit.
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Terms & Conditions Modal -->
    <form id="termsForm">
        <div class="modal fade" id="termsModal" tabindex="-1" role="dialog" aria-labelledby="termsModalLabel"
            aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="termsModalLabel">Terms & Conditions – Exhibitors</h5>
                    </div>
                    <div class="modal-body" style="max-height: 60vh; overflow-y: auto;">
                        <p>
                            By submitting your application and proceeding to make payment for an exhibition slot at FIF
                            2025, you acknowledge and agree to the following terms:
                        </p>
                        <h6>1. Exhibitor Selection</h6>
                        <ul>
                            <li>Submission of this form does not guarantee exhibition space. Selection will be made based on
                                thematic alignment, potential for impact, and logistical considerations.</li>
                            <li>Once selected, your slot will be confirmed upon successful payment and verification by the
                                FIF team.</li>
                        </ul>
                        <h6>2. Payment</h6>
                        <ul>
                            <li>Upon selecting a payment method (e.g., credit/debit card), you will be redirected to a
                                secure third-party payment gateway. The gateway may request additional information to
                                complete the transaction and may apply a service or convenience charge. This platform does
                                not access, store, or process any of your payment details.</li>
                            <li>All transactions are subject to the Terms and Conditions and Privacy Policies of the
                                selected payment gateway. Once a payment is successfully processed, it is non-refundable
                                under all circumstances.</li>
                        </ul>
                        <h6>3. Non-Refundable Payment</h6>
                        <ul>
                            <li>The payment once made is non-refundable and non-cancellable. Please ensure your availability
                                before confirming payment. Exhibitors are responsible for all associated payment gateway
                                service charges. These will be reflected in the final transaction amount.</li>


                        </ul>
                        <h6>4. Exhibition Responsibilities</h6>
                        <ul>
                            <li>Exhibitors must commit to low-waste, resource-efficient displays, in alignment with the
                                climate-focused mission of FIF.</li>
                            <li>Booth logistics (set-up, dismantling, transport, and staffing) are the sole responsibility
                                of the exhibitor unless otherwise stated.</li>
                        </ul>
                        <h6>5. Safeguarding & Conduct</h6>
                        <ul>
                            <li>A guiding principle of BRAC is the safeguarding of its people (staff, volunteers,
                                participants) and the people of communities it serves against any form of abuse, sexual
                                harassment, intimidation, violence, bullying, humiliation, neglect, exploitation and
                                discrimination, including physical, financial, psychological and sexual abuse, sexual
                                exploitation, neglect, or self-harm or inhuman or degrading treatment howsoever arising
                                (collectively, “Behaviour”). This principle, and related BRAC policies and procedures, forms
                                an integral part of these terms and conditions. The Parties agree and undertake to take all
                                reasonable steps necessary to eliminate or minimise risk of actual, attempted or
                                threatened Behaviour, and whether or not such conduct would amount to a criminal offence.
                            </li>
                        </ul>
                        <h6>6. Data Use</h6>
                        <ul>
                            <li>Any data, personal information and other related information collected will only be used for
                                the purpose of the event related to logistics, coordination, and communication. It will not
                                be shared with third parties beyond what is necessary (e.g., hotels, transport providers)
                                and shall be done so in compliance with all applicable laws related to data protection and
                                privacy.</li>
                        </ul>
                        <h6>7. Media & Consent</h6>
                        <ul>
                            <li>By participating, you consent to being photographed or recorded. BRAC reserves the right to
                                use such materials in its communications.</li>
                            <li>
                                FIF is committed to a low-waste, climate-friendly event—expect simple, sustainable choices
                                and bring a like-minded spirit.
                            </li>
                        </ul>
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="checkbox" id="agreeCheck">
                            <label class="form-check-label" for="agreeCheck">
                                I have read and agree to the above Terms & Conditions for exhibition at FIF 2025.
                            </label>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" id="agreeBtn" style="background: #004238"
                            disabled>Agree & Continue</button>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <section class="register-event">
        <div class="container">
            <form id="checkout-form" action="{{ route('checkout-exhibition.initiate') }}" method="POST">
                <div class="row g-4">
                    <!-- Left: Checkout Form -->

                    <div class="col-lg-7">
                        <div class="checkout-card">
                            <div class="checkout-section-title">Meals & Health</div>

                            <div class="mb-3">
                                <label class="checkout-label">Dietary Restrictions/Preferences</label>
                                <input type="text" class="form-control" value="{{ $restrictionsDisplay }}" disabled />
                            </div>
                            <div class="mb-3">
                                <label class="checkout-label">Dietary Restrictions/Preferences (Others)</label>
                                <input type="text" class="form-control"
                                    value="{{ $exhivition->dietary_restrictions_others }}" disabled />
                            </div>
                            <div class="mb-3">
                                <label class="checkout-label">Prayer/Meditation Space Required</label>
                                <input type="text" class="form-control" value="{{ $exhivition->meditation_space }}"
                                    disabled />
                            </div>
                            <div class="mb-3">
                                <label class="checkout-label">Medical Conditions/Allergies</label>
                                <textarea class="form-control" rows="2" readonly>{{ $exhivition->medical_condition }}</textarea>
                            </div>
                            <div class="mb-3">
                                <label class="checkout-label">Medical Conditions/Allergies Other</label>
                                <textarea class="form-control" rows="2" readonly>{{ $exhivition->medical_condition_details }}</textarea>
                            </div>

                            <div class="checkout-divider"></div>
                            <div class="checkout-section-title">Consent & Acknowledgement</div>
                            <div class="mb-3">
                                <label class="checkout-label">Accommodation Confirmation</label>
                                <input type="text" class="form-control"
                                    value="{{ $exhivition->accomodation }}, I confirm" readonly>
                            </div>
                            <div class="mb-3">
                                <label class="checkout-label">Official Event Materials</label>
                                <input type="text" class="form-control"
                                    value="{{ $exhivition->participating_exhibition }}" readonly>
                            </div>
                            <div class="mb-3">
                                <label class="checkout-label">Booth Allocation and Access</label>
                                <input type="text" class="form-control"
                                    value="{{ $exhivition->booth_allocation }}, I confirm" readonly>
                            </div>

                        </div>
                    </div>
                    <!-- Right: Order Summary -->
                    <div class="col-lg-5">
                        <div class="order-summary">
                            <img src="{{ asset('frontend/img/hero.png') }}" alt="Event Banner">
                            <div class="mb-3">
                                <div class="fw-bold fs-5 mb-1">Order summary</div>
                                <div><strong>{{ $exhivition->category_type }}</strong></div>


                            </div>
                            <input type="hidden" value="{{ $exhivition->cost }}" name="amount">
                            <input type="hidden" value="{{ $exhivition->currency }}" name="currency">
                            <input type="hidden" value="{{ $exhivition->id }}" name="exhibition_invitation_id">
                            <input type="hidden" value="{{ $exhivition->uuid }}" name="exhibition_invitation_uuid">
                            <input type="hidden" value="{{ $paymentLink->id }}" name="payment_link_send_id">
                            <input type="hidden" value="{{ $paymentLink->uuid }}" name="payment_link_send_uuid">
                            <input type="hidden" value="{{ $exhivitionReg->p1_full_name }}" name="full_name">
                            <input type="hidden" value="{{ $exhivitionReg->p1_email }}" name="email">
                            <input type="hidden" value="{{ $exhivitionReg->p1_contact_number }}" name="phone">
                            <div class="checkout-divider"></div>
                            <div class="d-flex justify-content-between mb-2">
                                <span>Total</span>
                                <span class="fw-bold">{{ $exhivition->currency }} {{ $exhivition->cost }}</span>
                            </div>
                            @if ($exhivition->currency !== 'BDT')
                                <div class="d-flex justify-content-between mb-2">
                                    <span>
                                        <strong>Calculator:</strong> <i class="fas fa-info-circle text-secondary"></i>
                                        <span class="custom-tooltip"
                                            data-tooltip="Disclaimer: The amount shown is an estimate and will be charged in Bangladeshi Taka (BDT). Please note that due to fluctuations in your bank’s foreign exchange rates and differences in billing cycles, the final converted amount reflected on your statement may vary. We are not responsible for any discrepancies arising from such variations.">
                                            <u>Estimated</u> equivalent
                                        </span>
                                    </span>
                                    <span class="fw-bold">BDT {{ $amountInBDT }}</span>
                                </div>
                            @endif
                            <div class="checkout-divider"></div>
                            <button type="submit" class="checkout-btn mt-3" id="pay-now">Proceed to Payment</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>
@endsection
@push('fscript')
    <script>
        $(document).ready(function() {
            const AGREED_KEY = 'fif_terms_checkout_agreed' + "{{ $exhivition->uuid }}";
            $('#pay-now').prop('disabled', true);
            if (localStorage.getItem(AGREED_KEY) !== 'true') {
                setTimeout(() => {
                    $('#termsModal').modal('show');
                }, 1000);
            } else {
                $('#pay-now').prop('disabled', false);
            }
            $('#agreeCheck').on('change', function() {
                $('#agreeBtn').prop('disabled', !this.checked);
            });
            $('#agreeBtn').on('click', function() {
                localStorage.setItem(AGREED_KEY, 'true');
                $('#termsModal').modal('hide');
                $('#pay-now').prop('disabled', false);
            });


        });
    </script>
    <script>
        // Handle form submission via AJAX
        $('#pay-now').on('click', function(e) {
            e.preventDefault();

            var formData = $('#checkout-form').serialize();

            $.ajax({
                url: "{{ route('checkout-exhibition.initiate') }}",
                method: "POST",
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                beforeSend: function() {
                    $('#pay-now').prop('disabled', true).text('Processing...');
                },
                success: function(response) {
                    if (response.redirect_url) {
                        if (typeof fbq !== 'undefined') {
                            fbq('track', 'AddPaymentInfo');
                        }

                        // ✅ LinkedIn Conversion Tracking
                        if (typeof lintrk !== 'undefined') {
                            lintrk('track', { conversion_id: 20271652 });
                        }
                        window.location.href = response.redirect_url;
                    } else {
                        Swal.fire({
                            title: 'Payment Failed!',
                            text: 'Something went wrong. Please try again later.',
                            icon: 'error',
                            confirmButtonText: 'OK',
                            customClass: {
                                confirmButton: 'btn btn-danger waves-effect waves-light'
                            },
                            buttonsStyling: false
                        });
                    }
                },
                error: function(xhr) {
                    const msg = xhr.responseJSON?.message || xhr.responseText ||
                        'Unknown error';
                    Swal.fire({
                        title: 'Payment Failed!',
                        text: 'Something went wrong. Please try again later.',
                        icon: 'error',
                        confirmButtonText: 'OK',
                        customClass: {
                            confirmButton: 'btn btn-danger waves-effect waves-light'
                        },
                        buttonsStyling: false
                    });
                },
                complete: function() {
                    $('#pay-now').prop('disabled', false).text('Proceed to Payment');
                }
            });
        });
    </script>
@endpush
