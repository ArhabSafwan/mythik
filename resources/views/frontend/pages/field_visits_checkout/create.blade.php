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
                        <h5 class="modal-title" id="termsModalLabel">Terms & Conditions – Field Visit
                            Participants</h5>
                    </div>
                    <div class="modal-body" style="max-height: 60vh; overflow-y: auto;">
                        <p>
                            By submitting your registration and proceeding to make payment for participation in the Frugal
                            Innovation Forum 2025 (conference and/or field visit), you acknowledge and agree to the
                            following terms:
                        </p>
                        <h6>1. Event Participation</h6>
                        <ul>
                            <li>Your registration will be confirmed upon successful payment and validation by the FIF
                                organizing team.</li>
                            <li>Participation includes access to conference sessions, meals, and materials as outlined in
                                your registration package.</li>
                        </ul>
                        <h6>2. Field Visit Participation (If Applicable)</h6>
                        <ul>
                            <li>Field visits have limited capacity and will be assigned based on thematic alignment,
                                logistical feasibility, and confirmation from the organizing team.</li>
                            <li>Participants must adhere to travel schedules and protocols shared prior to the visit.</li>
                        </ul>
                        <h6>3. Payment</h6>
                        <ul>
                            <li>Upon clicking “Proceed to Payment”, you will be redirected to a secured third-party payment
                                gateway. The gateway may request additional information to complete the transaction and may
                                apply a service or convenience charge. This platform does not access, store, or process any
                                of your payment details.</li>
                            <li>All transactions are subject to the Terms and Conditions and Privacy Policies of the
                                third-party payment gateway operator. Once a payment is successfully processed, it is
                                non-refundable under all circumstances.</li>
                            <li>All payments made to FIF in United States Dollars (USD) shall be converted into Bangladeshi
                                Taka (BDT) before proceeding in accordance with the <a
                                    href="https://www.bb.org.bd/en/index.php/econdata/exchangerate" target="_blank">official
                                    exchange rate prescribed by the
                                    Bangladesh Bank, the central bank of Bangladesh</a>, as on 25 June 2025, which is 1 USD
                                = 122.90
                                BDT.</li>
                            <li>In the event that the exchange rate applicable on the actual date of the transaction exceeds
                                the prescribed rate as on 25 June 2025 (i.e., 1 USD = 122.90 BDT), any resulting foreign
                                exchange loss shall be borne solely by FIF. Conversely, should the applicable exchange rate
                                be lower than the prescribed rate, the resulting loss shall be borne by the participant
                                registering for the event and executing the payment transaction.</li>
                            <li>
                                During the conversion USD to BDT, any fractional or decimal amounts resulting from the
                                conversion shall be rounded down to the nearest whole BDT. No partial Taka or fractional
                                value shall be considered in the final amount payable.
                            </li>
                        </ul>
                        <h6>4. Refund & Cancellation Policy – Non-Refundable Payments</h6>
                        <ul>
                            <li>The payment once made is non-refundable and non-cancellable. Please ensure your availability
                                before confirming payment.</li>

                        </ul>
                        <h6>5. Safeguarding & Code of Conduct</h6>
                        <ul>
                            <li>A guiding principle of BRAC is the safeguarding of its people (staff, volunteers,
                                participants) and the people of communities it serves against any form of abuse, sexual
                                harassment, intimidation, violence, bullying, humiliation, neglect, exploitation and
                                discrimination, including physical, financial, psychological and sexual abuse, sexual
                                exploitation, neglect, or self-harm or inhuman or degrading treatment howsoever arising
                                (collectively, “Behaviour”). This principle, and related BRAC policies and procedures, forms
                                an integral part of these terms and conditions. The Parties agree and undertake to take all
                                reasonable steps necessary to eliminate or minimise risk of actual, attempted or threatened
                                Behaviour, and whether or not such conduct would amount to a criminal offence.</li>

                        </ul>
                        <h6>6. Data Privacy</h6>
                        <ul>
                            <li>Any data, personal information and other related information collected will only be used for
                                the purpose of the event related to logistics, coordination, and communication. It will not
                                be shared with third parties beyond what is necessary (e.g., hotels, transport providers)
                                and shall be done so in compliance with all applicable laws related to data protection and
                                privacy.</li>
                        </ul>
                        <h6>7. Media & Consent</h6>
                        <ul>
                            <li>By registering, you consent to be photographed or recorded during the event. BRAC may use
                                such materials for communication and documentation purposes.</li>
                            <li>FIF is committed to a low-waste, climate-friendly event—expect simple, sustainable choices
                                and bring a like-minded spirit.</li>
                        </ul>
                        <div class="form-check mt-3">
                            <input class="form-check-input" type="checkbox" id="agreeCheck">
                            <label class="form-check-label" for="agreeCheck">
                                I have read and agree to the above Terms & Conditions for participation in FIF 2025.
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
            <form id="checkout-form" action="{{ route('checkout-field-visit.initiate') }}" method="POST">
                <div class="row g-4">
                    <!-- Left: Checkout Form -->

                    <div class="col-lg-7">
                        <div class="checkout-card">
                            <div class="checkout-section-title">Personal Information</div>

                            <div class="row mb-3">
                                <div class="col-md-6 mb-2">
                                    <label class="checkout-label" for="full_name">Name</label>
                                    <input type="text" class="form-control" id="full_name" name="full_name"
                                        value="{{ $fieldvisitinvitation->full_name }}" readonly>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label class="checkout-label" for="email">Email Address</label>
                                    <input type="email" class="form-control" id="email" name="email"
                                        value="{{ $fieldvisitinvitation->email }}" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6 mb-2">
                                    <label class="checkout-label" for="nationality">Nationality</label>
                                    <input type="text" class="form-control" id="nationality" name="nationality"
                                        value="{{ $fieldvisitinvitation?->nationalityName?->name }}" readonly>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label class="checkout-label" for="passport_nid">Passport/NID Number</label>
                                    <input type="text" class="form-control" id="passport_nid"
                                        value="{{ $fieldvisitinvitation->proof_number }}" readonly>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6 mb-2">
                                    <label class="checkout-label" for="country_code">Country Code</label>
                                    <input type="text" class="form-control" id="country_code" name="country_code"
                                        value="{{ $fieldvisitinvitation->country_code }}" readonly>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label class="checkout-label" for="contact_number">Contact Number (WhatsApp)</label>
                                    <input type="text" class="form-control" id="contact_number" name="contact_number"
                                        value="{{ $fieldvisitinvitation->contact_number }}" readonly>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label class="checkout-label" for="emergency_country_code">Emergency Country
                                        Code</label>
                                    <input type="text" class="form-control" id="emergency_country_code"
                                        value="{{ $fieldvisitinvitation->emergency_country_code }}" disabled />
                                </div>
                                <div class="col-md-6 mb-2">
                                    <label class="checkout-label" for="emergency_contact_number">Emergency Contact
                                        Number</label>
                                    <input type="text" class="form-control" id="emergency_contact_number"
                                        value="{{ $fieldvisitinvitation->emergency_contact_number }}" disabled />
                                </div>
                            </div>

                            <div class="checkout-divider"></div>
                            <div class="checkout-section-title">Meals & Health</div>
                            <div class="mb-3">
                                <label class="checkout-label">Dietary Restrictions/Preferences</label>
                                <input type="text" class="form-control" value="{{ $restrictionsDisplay }}" disabled />
                            </div>
                            <div class="mb-3">
                                <label class="checkout-label">Dietary Restrictions/Preferences (Others)</label>
                                <input type="text" class="form-control"
                                    value="{{ $fieldvisitinvitation->dietary_restrictions_others }}" disabled />
                            </div>
                            <div class="mb-3">
                                <label class="checkout-label">Prayer/Meditation Space Required</label>
                                <input type="text" class="form-control"
                                    value="{{ $fieldvisitinvitation->meditation_space }}" disabled />
                            </div>
                            <div class="mb-3">
                                <label class="checkout-label">Medical Conditions/Allergies</label>
                                <input type="text" class="form-control"
                                    value="{{ $fieldvisitinvitation->medical_condition }}" disabled />
                            </div>
                            <div class="mb-3">
                                <label class="checkout-label">Medical Conditions/Allergies</label>
                                <input type="text" class="form-control"
                                    value="{{ $fieldvisitinvitation->medical_condition_details }}" disabled />
                            </div>

                            <div class="checkout-divider"></div>
                            <div class="checkout-section-title">Engagement & Consent</div>
                            <div class="mb-3">
                                <label class="checkout-label">Accommodation Confirmation</label>
                                <input type="text" class="form-control"
                                    value="{{ $fieldvisitinvitation->accomodation }}, I confirm" disabled />
                            </div>
                            <div class="mb-3">
                                <label class="checkout-label">Event Photography/Recording Consent</label>
                                <input type="text" class="form-control"
                                    value="{{ $fieldvisitinvitation->photographed_recorded }}" disabled />
                            </div>


                        </div>
                    </div>
                    <!-- Right: Order Summary -->
                    <div class="col-lg-5">
                        <div class="order-summary">
                            <img src="{{ asset('frontend/img/hero.png') }}" alt="Event Banner">
                            <div class="mb-3">
                                <div class="fw-bold fs-5 mb-1">Order summary</div>
                                <div><strong>{{ $fieldvisitinvitation->category_type }}</strong></div>


                            </div>
                            <input type="hidden" value="{{ $fieldvisitinvitation->cost }}" name="amount">
                            <input type="hidden" value="{{ $fieldvisitinvitation->currency }}" name="currency">
                            <input type="hidden" value="{{ $fieldvisitinvitation->id }}"
                                name="field_visit_invitation_id">
                            <input type="hidden" value="{{ $fieldvisitinvitation->uuid }}"
                                name="field_visit_invitation_uuid">
                            <input type="hidden" value="{{ $paymentLink->id }}" name="payment_link_send_id">
                            <input type="hidden" value="{{ $paymentLink->uuid }}" name="payment_link_send_uuid">
                            <div class="checkout-divider"></div>
                            <div class="d-flex justify-content-between mb-2">
                                <span>Total</span>
                                <span class="fw-bold">{{ $fieldvisitinvitation->currency }}
                                    {{ $fieldvisitinvitation->cost }}</span>
                            </div>
                            @if ($fieldvisitinvitation->currency !== 'BDT')
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
            const AGREED_KEY = 'fif_terms_checkout_agreed' + "{{ $fieldvisitinvitation->uuid }}";
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
                url: "{{ route('checkout-field-visit.initiate') }}",
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
