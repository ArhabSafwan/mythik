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
                        <h1 class="text-white" id="startpoint">Conference Invitation Application Form – Frugal Innovation
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
                            <form id="participrntForm">
                                <input type="hidden" value="{{ $participant->category_type }}" name="category_type">
                                <input type="hidden" value="{{ $participant->cost }}" name="cost">
                                <input type="hidden" value="{{ $participant->currency }}" name="currency">
                                <input type="hidden" value="{{ $participant->id }}" name="pr_id">
                                <input type="hidden" name="step" id="stepInput" value="1">
                                <input type="hidden" value="{{ $paymentLink->id }}" name="payment_link_send_id">
                                <input type="hidden" value="{{ $paymentLink->uuid }}" name="payment_link_send_uuid">
                                <!-- Section 1: Personal Information -->
                                <div id="step1" class="step-section">
                                    <div class="form_section mt-4 mb-4">
                                        <h2>Section 1: Personal Information</h2>
                                    </div>
                                    <div class="row">
                                        <!-- Full Name -->
                                        <div class="form-group mb-4 col-12 col-md-6">
                                            <label for="fullName">Name <span style="color: #F99B1C">*</span></label>
                                            <input type="text" name="full_name" class="form-control round_input"
                                                id="fullName" placeholder="Enter your full name"
                                                value="{{ old('full_name', $participant->full_name ?? '') }}">
                                            <p class="text-danger"></p>
                                        </div>

                                        <!-- Email Address -->
                                        <div class="form-group mb-4 col-12 col-md-6">
                                            <label for="email">Email Address <span
                                                    style="color: #F99B1C">*</span></label>
                                            <input type="email" class="form-control round_input" name="email"
                                                id="email" placeholder="Enter your email"
                                                value="{{ old('email', $participant->email ?? '') }}">
                                            <p class="text-danger"></p>
                                        </div>



                                        <!-- Nationality -->
                                        <div class="form-group mb-4 col-12 col-md-6">
                                            <label for="nationality">Nationality <span
                                                    style="color: #F99B1C">*</span></label>
                                            <select class="form-control round_input" name="nationality" id="nationality">
                                                <option value="" disabled selected>Select your Nationality</option>
                                                @foreach ($countries as $country)
                                                    <option value="{{ $country->id }}"
                                                        {{ old('nationality', $participant->nationality ?? '') == $country->id ? 'selected' : '' }}>
                                                        {{ $country->name }}</option>
                                                @endforeach
                                            </select>
                                            <p class="text-danger"></p>
                                        </div>

                                        <div class="form-group mb-4 col-12 col-md-6">
                                            <label>Proof of Identification <span style="color: #F99B1C">*</span></label>
                                            <div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="proof_type"
                                                        id="passportOption" value="passport"
                                                        {{ old('proof_type') == 'passport' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="passportOption">Passport</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input class="form-check-input" type="radio" name="proof_type"
                                                        id="nidOption" value="nid"
                                                        {{ old('proof_type') == 'nid' ? 'checked' : '' }}>
                                                    <label class="form-check-label" for="nidOption">NID</label>
                                                </div>
                                            </div>

                                            <div id="passportField" class="mt-2" style="display: none;">
                                                <input type="text" name="passport_number"
                                                    class="form-control round_input" placeholder="Enter Passport Number"
                                                    value="{{ old('passport_number') }}">
                                            </div>

                                            <div id="nidField" class="mt-2" style="display: none;">
                                                <input type="text" name="nid_number" class="form-control round_input"
                                                    placeholder="Enter NID Number" value="{{ old('nid_number') }}">
                                            </div>

                                            <p class="text-danger"></p>

                                        </div>

                                        <script>
                                            document.addEventListener('DOMContentLoaded', function() {
                                                function toggleFields() {
                                                    const type = document.querySelector('input[name="proof_type"]:checked')?.value;
                                                    document.getElementById('passportField').style.display = type === 'passport' ? 'block' : 'none';
                                                    document.getElementById('nidField').style.display = type === 'nid' ? 'block' : 'none';
                                                }

                                                toggleFields();
                                                document.querySelectorAll('input[name="proof_type"]').forEach(el => {
                                                    el.addEventListener('change', toggleFields);
                                                });
                                            });
                                        </script>

                                        <div class="form-group mb-4 col-12 col-md-6">
                                            <label for="contact_number">Contact Number (WhatsApp, incl. country code) -
                                                <span style="color: #F99B1C">*</span></label>
                                            <div class="input-group">
                                                <select class="form-select  round_input" name="country_code"
                                                    id="country_code" style="max-width: 120px;">
                                                    <option value="" disabled selected>Code</option>
                                                    @foreach ($countries as $country)
                                                        <option value="{{ $country->phonecode }}"
                                                            {{ old('country_code', $participant->country_code ?? '') == $country->phonecode ? 'selected' : '' }}>
                                                            +{{ $country->phonecode }} ({{ $country->name }})
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <input type="text" class="form-control  round_input"
                                                    name="contact_number" id="contact_number" placeholder="Enter number"
                                                    value="{{ old('contact_number', $participant->contact_number ?? '') }}">
                                            </div>
                                            <p class="text-danger"></p>
                                        </div>

                                        <div class="form-group mb-4 col-12 col-md-6">
                                            <label for="contact_number">Emergency Contact Number -
                                                <span style="color: #F99B1C">*</span></label>
                                            <div class="input-group">
                                                <select class="form-select  round_input" name="emergency_country_code"
                                                    id="emergency_country_code" style="max-width: 120px;">
                                                    <option value="" disabled selected>Code</option>
                                                    @foreach ($countries as $country)
                                                        <option value="{{ $country->phonecode }}"
                                                            {{ old('emergency_country_code', $participant->emergency_country_code ?? '') == $country->phonecode ? 'selected' : '' }}>
                                                            +{{ $country->phonecode }} ({{ $country->name }})
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <input type="text" class="form-control  round_input"
                                                    name="emergency_contact_number" id="emergency_contact_number"
                                                    placeholder="Enter number"
                                                    value="{{ old('emergency_contact_number', $participant->emergency_contact_number ?? '') }}">
                                            </div>
                                            <p class="text-danger"></p>
                                        </div>

                                    </div>



                                    <div class="form-group col-12 text-end mb-4">

                                        <button type="submit" id="next1"
                                            class="btn btn-primary save-and-next-button">Save
                                            and Next</button>
                                    </div>
                                </div>

                                <div id="step2" class="step-section" style="display: none;">
                                    <div class="form_section mt-4 mb-4">
                                        <h2>Section 2: Meals & Health</h2>
                                    </div>
                                    <div class="row">
                                        <!-- Attending As -->
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
                                                        <input type="text" class="form-control mt-2"
                                                            id="attendOtherText" name="dietary_restrictions_others"
                                                            placeholder="Specify other" style="display:none;">
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

                                            <input type="text" name="medical_condition_details"
                                                class="form-control mt-2" id="medicalDetails"
                                                placeholder="Please describe" style="display:none;">
                                            <p class="text-danger"></p>

                                            <p class="text-white">Note: We recommend that you carry your personal
                                                medications and any necessary
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
                                            <div class="d-flex justify-content-between">
                                                <button type="button"
                                                    class="btn btn-primary save-and-next-button backBtn">Back</button>
                                                <button type="submit" id="next1"
                                                    class="btn btn-primary save-and-next-button">Save
                                                    and Next</button>
                                            </div>
                                        </div>



                                    </div>
                                </div>

                                <!-- Section 3: Breakout Session Preferences -->

                                <div id="step3" class="step-section" style="display: none;">
                                    <div class="form_section mt-4 mb-4">
                                        <h2>Section 3: Declaration & Consent</h2>
                                    </div>
                                    <div class="form-group mb-4 col-12">
                                        <label><strong>I understand that the accommodation is available on a
                                                twin-sharing
                                                basis, and room
                                                allocation will be determined by the FIF Organising Team.<span
                                                    style="color: #F99B1C">*</span></strong></label><br>

                                        <div class="form-check form-check">
                                            <input class="form-check-input" type="checkbox" name="accomodation"
                                                id="" value="Yes">
                                            <label class="form-check-label" for="">Yes, I confirm</label>
                                        </div>
                                        <p class="text-danger"></p>
                                    </div>
                                    <div class="form-group mb-4 col-12">
                                        <label><strong> I understand that this event will be photographed and recorded
                                                for official
                                                documentation and communications.<span
                                                    style="color: #F99B1C">*</span></strong></label><br>

                                        <div class="form-check form-check">
                                            <input class="form-check-input" type="checkbox" name="photographed_recorded"
                                                id="" value="Yes">
                                            <label class="form-check-label" for="">Yes, I confirm</label>
                                        </div>
                                        <p class="text-danger"></p>
                                    </div>


                                    <script>
                                        document.addEventListener('DOMContentLoaded', () => {
                                            const notSameNo = document.getElementById('notSameNo');
                                            const sameNo = document.getElementById('sameNo');
                                            const noGroup = document.getElementById('noGroup');
                                            const notSameNoDetails = document.getElementById('notSameNoDetails');

                                            const toggleInputVisibility = () => {
                                                if (notSameNo.checked) {
                                                    notSameNoDetails.style.display = 'block';
                                                } else {
                                                    notSameNoDetails.style.display = 'none';
                                                }
                                            };

                                            // Attach listeners
                                            notSameNo.addEventListener('change', toggleInputVisibility);
                                            sameNo.addEventListener('change', toggleInputVisibility);
                                            noGroup.addEventListener('change', toggleInputVisibility);

                                            // Initialize on page load
                                            toggleInputVisibility();
                                        });
                                    </script>

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

                                    <div class="col-12 mt-3 mb-5">
                                        <div class="d-flex justify-content-between">
                                            <button type="button"
                                                class="btn btn-primary save-and-next-button backBtn">Back</button>
                                            <button type="submit" id="next1"
                                                class="btn btn-primary save-and-next-button">Proceed to Checkout</button>
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

@push('fscript')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        let currentStep = 1;

        function showStep(step) {
            $('[id^=step]').hide(); // Hide all steps
            $(`#step${step}`).show(); // Show current step
            $('#stepInput').val(step); // Update hidden input
        }

        // Initial step
        showStep(currentStep);

        $('#participrntForm').on('submit', function(e) {
            e.preventDefault();

            $('#participrntForm .is-invalid').removeClass('is-invalid');

            const form = $(this);
            // Set the hidden step input to currentStep value
            $('#stepInput').val(currentStep);

            // Clear previous errors
            $('.text-danger').text('');

            const formData = form.serialize();

            $.ajax({
                url: "{{ route('participants_invitation.store') }}",
                method: "POST",
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                success: function(response) {
                    if (response.nextStep) {
                        // Hide current step, show next step
                        currentStep = response.nextStep;
                        showStep(currentStep);
                        window.scrollTo(0, $(`#startpoint`).offset().top);
                    } else if (response.success) {
                        if (response.brac_member == 'yes' && response.nominated == 'yes') {

                            Swal.fire({
                                title: '',
                                html: `
                                    <h1>Application Received!</h1>
                                    <p>Your application has been successfully submitted and is now under review by our team.<br>
                                    Thank you for applying to Frugal Innovation Forum 2025.</p>

                                    <p><strong>📅 What’s Next?</strong><br>
                                    You can expect to receive an update on your application status within <strong>2–3 business days.</strong></p>

                                    <p><strong>🔗 <a href="${window.location.origin}/" target="_blank" style="color: black;">Learn More</a></strong><br>
                                    In the meantime, feel free to explore event details, speakers, and updates on our official website.</p>

                                    <p><strong>📱 Need urgent assistance or have queries?</strong><br>
                                    Contact us via WhatsApp at
                                    <a href="https://wa.me/8801332550461" target="_blank" style="color: orange;">+880-1332550461</a>
                                    or message us on
                                    <a href="https://www.facebook.com/FIForum/" target="_blank" style="color: orange;">Facebook</a>,
                                    <a href="https://x.com/innovate_frugal" target="_blank" style="color: orange;">Twitter</a>, or
                                    <a href="https://www.linkedin.com/company/frugal-innovation-forum/" target="_blank" style="color: orange;">LinkedIn</a>.</p>

                                    <p>We appreciate your interest and look forward to connecting with you soon.</p>
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
                            // Remove `.0`, `.1` etc. from keys like material_needed.0
                            var baseKey = key.replace(/\.\d+$/, '');
                            var inputField = $('#participrntForm [name="' + baseKey + '[]"]');

                            if (inputField.length) {
                                inputField.closest('.form-group').find('p.text-danger').first()
                                    .html(value[0]);
                                if (!firstErrorField) {
                                    firstErrorField = inputField;
                                }
                            } else {
                                var singleField = $('#participrntForm [name="' + baseKey +
                                    '"]');
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

        // Back button handler
        $('.backBtn').on('click', function() {
            if (currentStep > 1) {
                currentStep--;
                showStep(currentStep);
                window.scrollTo(0, $(`#startpoint`).offset().top);
            }
        });
    </script>
@endpush
