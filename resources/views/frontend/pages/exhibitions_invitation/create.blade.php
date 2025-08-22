@extends('frontend.fif_main')
@section('ftitle', 'FiF2025')
@push('fcss')
    <style>
        /* bootstrap style override start */
        .form-check-input.is-invalid~.form-check-label {
            color: #F99B1C !important;
        }

        .text-danger {
            color: #F99B1C !important;
        }

        .form-control.is-invalid,
        .was-validated .form-control:invalid {
            border-color: #F99B1C !important;
            padding-right: calc(1.5em + .75rem);
            background-image: url(data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e);
            background-repeat: no-repeat;
            background-position: right calc(.375em + .1875rem) center;
            background-size: calc(.75em + .375rem) calc(.75em + .375rem);
        }

        .form-check-input.is-invalid,
        .was-validated .form-check-input:invalid {
            border-color: #F99B1C !important;
        }

        .form-select.is-invalid,
        .was-validated .form-select:invalid {
            border-color: #F99B1C !important;
        }

        /* bootstrap style override end */
        .save-and-next-button {
            background-color: #F99B1C !important;
            color: #ffffff;
            padding: 10px 30px;
            border: none;
            border-radius: 10px;
            font-weight: 500;
            letter-spacing: 0.5px;
            transition: background-color 0.3s ease, color 0.3s ease;
        }

        .save-and-next-button:hover {
            background-color: #D6E03D !important;
            color: #ffffff;
        }
    </style>
@endpush
@section('fif_content')

    <section class="d-flex align-items-center form_section" style="background-color: #007160 !important;">
        <div class="container">
            <div class="row justify-content-center text-white gap-3">
                <div class="col-md-12 col-lg-12 g-4 m-4">
                    <div class="heading">
                        <h1 class="text-white" id="startpoint">Exhibitor Invitation Application Form – Frugal Innovation
                            Forum 2025</h1>
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
                    <div class="form_section mt-2 mb-4">
                        <p class="form_section_p">
                            Please complete the following to finalize your participation and proceed to payment.
                        </p>
                    </div>

                </div>
                <div class="col-md-12 col-lg-12">
                    <div class="">
                        <div class="">
                            <form id="exhibition_reg" method="post">
                                @csrf
                                <input type="hidden" id="stepInput" name="step" value="1">
                                <input type="hidden"
                                    value="{{ $exhibitionRegestration->category_type }}"name="category_type">
                                <input type="hidden" value="{{ $exhibitionRegestration->cost }}" name="cost">
                                <input type="hidden" value="{{ $exhibitionRegestration->currency }}" name="currency">
                                <input type="hidden" value="{{ $exhibitionRegestration->id }}" name="er_id">
                                <input type="hidden" value="{{ $paymentLink->id }}" name="payment_link_send_id">
                                <input type="hidden" value="{{ $paymentLink->uuid }}" name="payment_link_send_uuid">

                                <div id="step1" class="step-section">
                                    <div class="form_section mt-2 mb-4">
                                        <h2> SECTION 1: Accommodation & Logistics </h2>
                                    </div>


                                    <div class="form-group mb-4 col-12">
                                        <label> Do you have any dietary restrictions or preferences?<span
                                                style="color: #F99B1C">*</span></label><br>
                                        @foreach ($dietary_restrictions as $key => $label)
                                            <div class="form-check form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="dietary_restrictions[]" id="attend{{ ucfirst($key) }}"
                                                    value="{{ $key }}">
                                                <label class="form-check-label"
                                                    for="attend{{ ucfirst($key) }}">{{ $label }}</label>
                                                @if ($key === 'other')
                                                    <input type="text" class="form-control mt-2" id="attendOtherText"
                                                        name="dietary_restrictions_others" placeholder="Specify other"
                                                        style="display:none;">
                                                @endif
                                            </div>
                                        @endforeach
                                        <p class="text-danger"></p>
                                    </div>

                                    <div class="form-group mb-4 col-12">
                                        <label><strong>Would you require access to a prayer/meditation space during the
                                                event? <span style="color: #F99B1C">*</span></strong></label><br>

                                        <div class="form-check form-check">
                                            <input class="form-check-input" type="radio" name="meditation_space"
                                                id="" value="Yes">
                                            <label class="form-check-label" for="accessYes">Yes</label>
                                        </div>

                                        <div class="form-check form-check">
                                            <input class="form-check-input" type="radio" name="meditation_space"
                                                id="" value="No">
                                            <label class="form-check-label" for="accessNo">No</label>
                                        </div>
                                        <p class="text-danger"></p>

                                    </div>

                                    <div class="form-group mb-4 col-12">
                                        <label><strong>Do you have any medical conditions or allergies
                                                we should be aware of (for safety
                                                protocol)? <span style="color: #F99B1C">*</span></strong></label><br>


                                        <div class="form-check form-check">
                                            <input class="form-check-input" type="radio" name="medical_condition"
                                                id="medicalNo" value="No">
                                            <label class="form-check-label" for="medicalNo">No</label>
                                        </div>

                                        <div class="form-check form-check">
                                            <input class="form-check-input" type="radio" name="medical_condition"
                                                id="medicalYes" value="Yes">
                                            <label class="form-check-label" for="medicalYes">Yes :</label>
                                        </div>

                                        <input type="text" name="medical_condition_details" class="form-control mt-2"
                                            id="medicalDetails" placeholder="Please describe" style="display:none;">
                                        <p class="text-danger"></p>

                                        <p class="text-white">Note: We recommend that you carry your personal medications
                                            and any necessary
                                            medical supplies. In case of an emergency, please ensure you have your
                                            prescription with you.</p>
                                    </div>

                                    <script>
                                        // Show/hide the "Other" attending as text input
                                        document.getElementById('attendOther').addEventListener('change', function() {
                                            document.getElementById('attendOtherText').style.display = this.checked ? 'block' : 'none';
                                        });

                                        document.getElementById('medicalYes').addEventListener('change', () => {
                                            document.getElementById('medicalDetails').style.display = 'block';
                                        });
                                        document.getElementById('medicalNo').addEventListener('change', () => {
                                            document.getElementById('medicalDetails').style.display = 'none';
                                        });
                                    </script>

                                    <div class="form-group col-12 text-end mb-4">
                                        <div class="d-flex justify-content-end">

                                            <button type="submit" id="next1"
                                                class="btn btn-primary save-and-next-button">Save
                                                and Next</button>
                                        </div>
                                    </div>


                                </div>
                                <div id="step2" class="step-section" style="display:none;">
                                    <div class="form_section mt-2 mb-4">
                                        <h2> SECTION 2: Declaration & Consent</h2>
                                    </div>
                                    <div class="form-group mb-4 col-12">
                                        <label><strong>I understand that the accommodation is available on a
                                                twin-sharing basis, and
                                                room allocation will be determined by the FIF Organising Team.<span
                                                    style="color: #F99B1C">*</span></strong></label><br>

                                        <div class="form-check form-check">
                                            <input class="form-check-input" type="checkbox" name="accomodation"
                                                id="" value="Yes">
                                            <label class="form-check-label" for="">Yes, I confirm</label>
                                        </div>
                                        <p class="text-danger"></p>
                                    </div>
                                    <div class="form-group mb-4 col-12">
                                        <label><strong> I understand that through participating in the exhibition, I
                                                consent to have my
                                                brand and booth details featured in official event materials (website,
                                                catalogue,
                                                social media)? <span style="color: #F99B1C">*</span></strong></label><br>

                                        <div class="form-check form-check">
                                            <input class="form-check-input" type="checkbox"
                                                name="participating_exhibition" id="" value="Yes">
                                            <label class="form-check-label" for="">Yes, I confirm</label>
                                        </div>
                                        <p class="text-danger"></p>
                                    </div>

                                    <div class="form-group mb-4 col-12">
                                        <label><strong> I understand that booth allocation and access to sessions will
                                                be at the discretion
                                                of the organiser?? <span
                                                    style="color: #F99B1C">*</span></strong></label><br>

                                        <div class="form-check form-check">
                                            <input class="form-check-input" type="checkbox" name="booth_allocation"
                                                id="" value="Yes">
                                            <label class="form-check-label" for="">Yes, I confirm</label>
                                        </div>
                                        <p class="text-danger"></p>
                                    </div>

                                    <div class="form-group mb-4 col-12 col-md-6">
                                        <label>Are you a BRAC Employee? <span style="color: #F99B1C">*</span></label>
                                        <div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="brac_member"
                                                    id="bracEmpYes" value="yes"
                                                    {{ old('brac_member') == 'yes' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="bracEmpYes">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="brac_member"
                                                    id="bracEmpNo" value="no"
                                                    {{ old('brac_member') == 'no' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="bracEmpNo">No</label>
                                            </div>
                                        </div>
                                        <p class="text-danger"></p>
                                    </div>

                                    <!-- Q13: Nominated -->
                                    <div id="nominationQuestion" class="form-group mb-4 col-12 col-md-6"
                                        style="display: none;">
                                        <label>Are you nominated by your programme to participate in FIF? <span
                                                style="color: #F99B1C">*</span></label>
                                        <div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="nominated"
                                                    id="nominatedYes" value="yes"
                                                    {{ old('nominated') == 'yes' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="nominatedYes">Yes</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="nominated"
                                                    id="nominatedNo" value="no"
                                                    {{ old('nominated') == 'no' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="nominatedNo">No</label>
                                            </div>
                                        </div>
                                        <p class="text-danger"></p>
                                    </div>

                                    <!-- Q14/Q15: Show only if nominated -->
                                    <div id="bracFields" class="mt-2 col-12 col-md-6" style="display: none;">
                                        <div class="form-group mb-4">
                                            <label for="brac_email">Verify email <span
                                                    style="color: #F99B1C">*</span></label>
                                            <input type="email" name="brac_email" class="form-control round_input"
                                                placeholder="Enter Email Address" value="{{ old('brac_email') }}">
                                            <p class="text-danger"></p>
                                        </div>
                                        <div class="form-group mb-4">
                                            <label for="brac_pin">Budget Code <span
                                                    style="color: #F99B1C">*</span></label>
                                            <input type="text" name="brac_pin" class="form-control round_input"
                                                placeholder="Enter Budget Code" value="{{ old('brac_pin') }}">
                                            <p class="text-danger"></p>
                                        </div>
                                    </div>

                                    <script>
                                        document.addEventListener('DOMContentLoaded', function() {
                                            const bracEmpYes = document.getElementById('bracEmpYes');
                                            const bracEmpNo = document.getElementById('bracEmpNo');
                                            const nominationQuestion = document.getElementById('nominationQuestion');
                                            const nominatedYes = document.getElementById('nominatedYes');
                                            const nominatedNo = document.getElementById('nominatedNo');
                                            const bracFields = document.getElementById('bracFields');

                                            function toggleFields() {
                                                const isBracEmployee = document.querySelector('input[name="brac_member"]:checked')?.value;
                                                const isNominated = document.querySelector('input[name="nominated"]:checked')?.value;

                                                // Reset fields
                                                nominationQuestion.style.display = 'none';
                                                bracFields.style.display = 'none';

                                                if (isBracEmployee === 'yes') {
                                                    nominationQuestion.style.display = 'block';

                                                    if (isNominated === 'yes') {
                                                        bracFields.style.display = 'block';
                                                    }
                                                }
                                            }

                                            // Initial run on load
                                            toggleFields();

                                            // Event listeners
                                            [bracEmpYes, bracEmpNo, nominatedYes, nominatedNo].forEach(el => {
                                                if (el) {
                                                    el.addEventListener('change', toggleFields);
                                                }
                                            });
                                        });
                                    </script>


                                    <div class="form_section mt-2 mb-4">
                                        <p class="form_section_p">
                                            Note: After submission, you will receive a payment link to confirm your
                                            registration. Please complete payment within 72 hours to secure your spot.
                                        </p>
                                    </div>

                                    <!-- Submit Button (Full Width) -->
                                    <div class="col-12 mt-3 mb-5">
                                        <div class="d-flex justify-content-between">
                                            <button type="button"
                                                class="btn btn-primary save-and-next-button backBtn">Back</button>
                                            <button type="submit" id="next1"
                                                class="btn btn-primary save-and-next-button">Proceed to Checkout</button>
                                        </div>
                                    </div>
                                </div>

                        </div>

                        </form>


                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
@push('script')
    <script>
        let currentStep = 1;

        function showStep(step) {
            $('[id^=step]').hide(); // Hide all steps
            $(`#step${step}`).show(); // Show current step
            $('#stepInput').val(step); // Update hidden input
        }

        // Initial step
        showStep(currentStep);

        $('#exhibition_reg').on('submit', function(e) {
            console.log("some");
            e.preventDefault();

            $('#exhibition_reg .is-invalid').removeClass('is-invalid');
            const form = $(this);
            // Set the hidden step input to currentStep value
            $('#stepInput').val(currentStep);

            // Clear previous errors
            $('.text-danger').text('');

            const formData = form.serialize();

            $.ajax({
                url: "{{ route('exhibitions-invitation.store') }}",
                method: "POST",
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                success: function(response) {
                    if (response.nextStep) {
                        currentStep = response.nextStep;
                        console.log(currentStep);
                        showStep(currentStep);
                        window.scrollTo(0, $(`#startpoint`).offset().top);
                    } else if (response.success) {
                       if (response.brac_member == 'yes' && response.nominated == 'yes') {

                            Swal.fire({
                                title: '',
                               html: `
                                <h1>Exhibitor Application Received!</h1>
                                    <p>Thank you for applying to exhibit at the <strong>Frugal Innovation Forum 2025.</strong><br>
                                        Your application has been successfully submitted and is currently under review by our team.</p>

                                    <p><strong>📅 What’s Next?</strong><br>
                                    You can expect to receive an update on your application status within <strong>2–3 business days.</strong></p>

                                    <p><strong>🔗 <a href="${window.location.origin}/" target="_blank" style="color: black;">Explore More</a></strong><br>
                                    In the meantime, feel free to learn more about the event, speakers, and exhibition guidelines on our official website.</p>

                                    <p><strong>📱 Need Assistance?</strong><br>
                                    For urgent queries, contact us via WhatsApp at
                                    <a href="https://wa.me/8801332550461" target="_blank" style="color: orange;">+880-1332550461</a>
                                    or reach out on
                                    <a href="https://www.facebook.com/FIForum/" target="_blank" style="color: orange;">Facebook</a>,
                                    <a href="https://x.com/innovate_frugal" target="_blank" style="color: orange;">Twitter</a>, or
                                    <a href="https://www.linkedin.com/company/frugal-innovation-forum/" target="_blank" style="color: orange;">LinkedIn</a>.</p>

                                    <p>We appreciate your interest in showcasing your work and look forward to engaging with you soon.</p>
                                `,
                                icon: 'success',
                                confirmButtonText: 'Ok',
                                width: '60rem',
                                allowOutsideClick: false,
                                buttonsStyling: false,
                                customClass: {
                                    confirmButton: 'btn btn-success'
                                }
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href = response.redirect_url;
                                }
                            });
                        }else {
                            // Direct redirect when condition doesn't match
                            window.location.replace(response.redirect_url);
                        }
                    }
                },
                error: function(xhr) {
                    if (xhr.status === 422) {
                        var errors = xhr.responseJSON.errors;
                        var firstErrorField = null;
                        $.each(errors, function(key, value) {
                            var baseKey = key.replace(/\.\d+$/, '');
                            var inputField = $('#exhibition_reg [name="' + baseKey + '[]"]');
                            if (inputField.length) {
                                inputField.closest('.form-group').find('p.text-danger').first()
                                    .html(value[0]);
                                if (!firstErrorField) {
                                    firstErrorField = inputField;
                                }
                            } else {
                                var singleField = $('#exhibition_reg [name="' + baseKey + '"]');
                                if (singleField.length) {
                                    singleField.closest('.form-group').find('p.text-danger')
                                        .first().html(value[0]);
                                    if (!firstErrorField) {
                                        firstErrorField = singleField;
                                    }
                                }
                            }
                        });
                        if (firstErrorField) {
                            $('html, body').animate({
                                scrollTop: firstErrorField.offset().top - 200
                            }, 400);
                            firstErrorField.focus();
                        }
                    } else {
                        Swal.fire({
                            title: 'Your Applicaiton Not Submitted Sucessfully',
                            text: 'We will get back to you shortly and look forward to connecting with you soon!',
                            icon: 'error',
                            customClass: {
                                confirmButton: 'btn btn-success waves-effect waves-light'
                            },
                            buttonsStyling: false
                        })
                    }
                }
            });
        });

        $('.backBtn').on('click', function() {
            if (currentStep > 1) {
                currentStep--;
                showStep(currentStep);
                window.scrollTo(0, $(`#startpoint`).offset().top);
            }
        });
    </script>
@endpush
