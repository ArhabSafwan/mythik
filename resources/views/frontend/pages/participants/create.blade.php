@extends('frontend.fif_main')
@section('ftitle', 'FiF2025')
@section('meta_tag')
<meta name="title" content="Frugal Innovation Forum 2025 | Frugal Innovation Forum 2025 - Conference Application Form">
<meta name="keywords" content="Frugal Innovation Forum, FIF 2025, BRAC, Climate Adaptation, Agriculture, Food Security, Livelihoods, Global South, Development Conference">
<meta name="description" content="Frugal Innovation Forum 2025 will explore Climate Adaptation in Agriculture, Food Security, and Livelihoods. Join development practitioners, entrepreneurs, and climate experts for this 2-day global conference hosted by BRAC.">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:title" content="Frugal Innovation Forum 2025 | Frugal Innovation Forum 2025 - Conference Application Form">
<meta property="og:description" content="FIF 2025 brings together global experts to discuss climate adaptation in agriculture, food systems, and livelihoods. Explore solutions grounded in the realities of the Global South.">
<meta property="og:image" content="{{ asset('/') }}frontend/img/logo_1.png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:site_name" content="Frugal Innovation Forum 2025">

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:url" content="{{ url()->current() }}">
<meta name="twitter:title" content="Frugal Innovation Forum 2025 | Frugal Innovation Forum 2025 - Conference Application Form">
<meta name="twitter:description" content="A global forum exploring climate adaptation in agriculture and livelihoods. Hosted by BRAC.">
<meta name="twitter:image" content="{{ asset('/') }}frontend/img/logo_1.png">
@endsection
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
                        <h1 class="text-white" id="startpoint">Frugal Innovation Forum 2025 — Conference Application Form
                        </h1>
                    </div>

                    <div>
                        <span class="step-description">Welcome to the registration form for the Frugal Innovation Forum
                            (FIF) 2025.</span>

                    </div>
                    <div class="text-light">

                        <p class="text-white">
                            <i class="fas fa-map-marker-alt text-white"></i>
                            <strong>Venue:</strong> BRAC CDM, Savar, Dhaka, Bangladesh
                        </p>
                        <p class="text-white  mt-1">
                            <i class="fa fa-calendar  text-white"></i>
                            <strong>Conference Dates:</strong> 25–26 July 2025
                        </p>
                        <p class="text-white  mt-1">
                            <!-- <i class="fas fa-seedling  text-success"></i>-->
                            <strong>Theme:</strong> Climate Adaptation in Agriculture, Food Security, and Livelihoods
                        </p>
                        <p class="text-white">
                            This form will take approximately 5 minutes to complete. Mandatory fields are marked with an
                            asterisk ( * ).
                        </p>
                        <p class="text-white">
                            The deadline to apply is 10 July 2025. If you're applying from abroad with a non-Bangladeshi
                            passport, we encourage early submission to allow adequate time for visa processing and travel
                            preparations.
                        </p>
                        <p class="text-white fw-bold mt-1">
                            <i class="fas fa-info-circle text-white"></i> Please note:
                        </p>
                        <ul class=" text-white ps-3 mx-2">
                            <li class="text-white" style="list-style: disc">
                                Seats are limited. Preference will be given to individuals and organisations with
                                relevant experience in the forum’s thematic areas. Filling out this form does not guarantee
                                participation.
                                Selected applicants will be notified via email.
                            </li>
                            <li class="text-white" style="list-style: disc">
                                FIF is committed to a low-waste, climate-friendly event—expect simple, sustainable choices
                                and bring a
                                like-minded spirit.
                            </li>
                            <li class="text-white" style="list-style: disc">
                                You are currently registaring for <span style="color: #F99B1C">{{ $package }},
                                    {{ $currency }} {{ $price }}</span>
                            </li>
                        </ul>

                    </div>

                </div>

                <div class="col-md-12 col-lg-12">
                    <div class="">
                        <div class="">
                            <form id="participrntForm">
                                <input type="hidden" value="{{ $package }}" name="category_type">
                                <input type="hidden" value="{{ $price }}" name="cost">
                                <input type="hidden" value="{{ $currency }}" name="currency">
                                <input type="hidden" name="step" id="stepInput" value="1">
                                <!-- Section 1: Personal Information -->
                                <div id="step1" class="step-section">
                                    <div class="form_section mt-4 mb-4">
                                        <h2>Section 1: Personal Information</h2>
                                    </div>
                                    <div class="row">
                                        <!-- Full Name -->
                                        <div class="form-group mb-4 col-12 col-md-6">
                                            <label for="fullName">Full Name <span style="color: #F99B1C">*</span></label>
                                            <input type="text" name="full_name" class="form-control round_input"
                                                id="fullName" placeholder="Enter your full name">
                                            <p class="text-danger"></p>
                                        </div>

                                        <!-- Gender -->
                                        <div class="form-group mb-4 col-12 col-md-6">
                                            <label>Gender <span style="color: #F99B1C">*</span></label><br>
                                            @foreach ($genders as $key => $gender)
                                                <div class="form-check form-check">
                                                    <input class="form-check-input" type="radio" name="gender"
                                                        id="gender{{ $key }}" value="{{ $key }}"
                                                        {{ $loop->first ? '' : '' }}>
                                                    <label class="form-check-label"
                                                        for="gender{{ $key }}">{{ $gender }}</label>
                                                </div>
                                                @if ($key == 3)
                                                    <input type="text" class="form-control mt-2" name="gender_other"
                                                        id="genderOtherText" placeholder="Specify other"
                                                        style="display:none;">
                                                @endif
                                            @endforeach
                                            <p class="text-danger"></p>
                                        </div>

                                        <!-- Email Address -->
                                        <div class="form-group mb-4 col-12 col-md-6">
                                            <label for="email">Email Address <span
                                                    style="color: #F99B1C">*</span></label>
                                            <input type="email" class="form-control round_input" name="email"
                                                id="email" placeholder="Enter your email">
                                            <p class="text-danger"></p>
                                        </div>

                                        <div class="form-group mb-4 col-12 col-md-6">
                                            <label for="contact_number">Contact Number<span
                                                    style="color: #F99B1C">*</span></label>
                                            <div class="input-group">
                                                <select class="form-select  round_input" name="country_code"
                                                    id="country_code" style="max-width: 120px;">
                                                    <option value="" disabled selected>Code</option>
                                                    @foreach ($countries as $country)
                                                        <option value="{{ $country->phonecode }}">
                                                            +{{ $country->phonecode }} ({{ $country->name }})
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <input type="text" class="form-control  round_input"
                                                    name="contact_number" id="contact_number" placeholder="Enter number">
                                            </div>
                                            <p class="text-danger"></p>
                                        </div>

                                        <!-- Country of Residence -->
                                        <div class="form-group mb-4 col-12 col-md-6">
                                            <label for="residenceCountry">Workstation (Country) <span
                                                    style="color: #F99B1C">*</span></label>
                                            <select class="form-control round_input" name="country_of_residence"
                                                id="residenceCountry">
                                                <option value="" disabled selected>Select your country</option>
                                                @foreach ($countries as $country)
                                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                                @endforeach
                                            </select>
                                            <p class="text-danger"></p>
                                        </div>

                                        <!-- Nationality -->
                                        <div class="form-group mb-4 col-12 col-md-6">
                                            <label for="nationality">Nationality <span
                                                    style="color: #F99B1C">*</span></label>
                                            <select class="form-control round_input" name="nationality" id="nationality">
                                                <option value="" disabled selected>Select your Nationality</option>
                                                @foreach ($countries as $country)
                                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                                @endforeach
                                            </select>
                                            <p class="text-danger"></p>
                                        </div>

                                    </div>

                                    <script>
                                        // Show/hide the "Other" gender text input when key 3 is selected
                                        document.querySelectorAll('input[name="gender"]').forEach(function(radio) {
                                            radio.addEventListener('change', function() {
                                                if (this.id === 'gender3') {
                                                    document.getElementById('genderOtherText').style.display = 'block';
                                                } else {
                                                    document.getElementById('genderOtherText').style.display = 'none';
                                                }
                                            });
                                        });
                                    </script>

                                    <div class="form-group col-12 text-end mb-4">

                                        <button type="submit" id="next1"
                                            class="btn btn-primary save-and-next-button">Save
                                            and Next</button>
                                    </div>
                                </div>
                                <div id="step2" class="step-section" style="display:none;">
                                    <div class="form_section mt-4 mb-4">
                                        <h2>Section 2: Organisation Information</h2>
                                    </div>

                                    <div class="row">
                                        <!-- Organisation Name -->
                                        <div class="form-group mb-4 col-12 col-md-6">
                                            <label for="orgName">Organisation Name <span style="color: #F99B1C">*</span>
                                                <span class="text-danger">*</span></label>
                                            <input type="text" name="organisation_name"
                                                class="form-control round_input" id="orgName"
                                                placeholder="Enter organisation name">
                                            <p class="text-danger"></p>
                                        </div>

                                        <!-- Designation -->
                                        <div class="form-group mb-4 col-12 col-md-6">
                                            <label for="designation">Designation <span
                                                    style="color: #F99B1C">*</span></label>
                                            <input type="text" name="designation" class="form-control round_input"
                                                id="designation" placeholder="Enter your designation">
                                            <p class="text-danger"></p>
                                        </div>


                                        <!-- Sectors Your Organisation Works In -->
                                        <div class="form-group mb-4 col-12">
                                            <label>Sector(s) Your Organisation Works In * (Select all that
                                                apply): <span style="color: #F99B1C">*</span></label><br>
                                            @foreach ($sectors as $key => $label)
                                                <div class="form-check form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        name="sectors_works_in[]" id="sector{{ ucfirst($key) }}"
                                                        value="{{ $key }}">
                                                    <label class="form-check-label"
                                                        for="sector{{ ucfirst($key) }}">{{ $label }}</label>
                                                    @if ($key === 'other')
                                                        <input type="text" class="form-control mt-2"
                                                            id="sectorOtherText" name="sectors_works_in_others"
                                                            placeholder="Specify other" style="display:none;">
                                                    @endif
                                                </div>
                                            @endforeach
                                            <p class="text-danger"></p>
                                        </div>
                                        <script>
                                            // Show/hide the "Other" sector text input
                                            document.getElementById('sectorOther').addEventListener('change', function() {
                                                document.getElementById('sectorOtherText').style.display = this.checked ? 'block' : 'none';
                                            });
                                        </script>

                                        <!-- Organisation's Website -->
                                        <div class="form-group mb-4 col-12 col-md-6">
                                            <label for="orgWebsite">Organisation’s Website <span
                                                    style="color: #F99B1C">*</span> </label>
                                            <input type="text" name="organisation_website"
                                                class="form-control round_input" id="orgWebsite"
                                                placeholder="Enter website URL">
                                            <p class="text-danger"></p>
                                        </div>

                                    </div>


                                    <!-- Background & Motivation Section -->

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
                                <div id="step3" class="step-section" style="display:none;">
                                    <div class="form_section mt-4 mb-4">
                                        <h2>Section 3: Background & Motivation</h2>
                                    </div>
                                    <div class="row">
                                        <!-- Attending As -->
                                        <div class="form-group mb-4 col-12">
                                            <label>You are attending as:<span style="color: #F99B1C">*</span></label><br>
                                            @foreach ($attending_as as $key => $label)
                                                <div class="form-check form-check">
                                                    <input class="form-check-input" type="checkbox" name="attending_as[]"
                                                        id="attend{{ ucfirst($key) }}" value="{{ $key }}">
                                                    <label class="form-check-label"
                                                        for="attend{{ ucfirst($key) }}">{{ $label }}</label>
                                                    @if ($key === 'other')
                                                        <input type="text" class="form-control mt-2"
                                                            id="attendOtherText" name="attending_as_other"
                                                            placeholder="Specify other" style="display:none;">
                                                    @endif
                                                </div>
                                            @endforeach
                                            <p class="text-danger"></p>
                                        </div>
                                        <script>
                                            // Show/hide the "Other" attending as text input
                                            document.getElementById('attendOther').addEventListener('change', function() {
                                                document.getElementById('attendOtherText').style.display = this.checked ? 'block' : 'none';
                                            });
                                        </script>


                                        <!-- Describe Current Initiative -->
                                        <div class="form-group mb-4 col-12">
                                            <label for="currentInitiative">Briefly describe your current role and how it
                                                relates to climate adaptation, agriculture, or
                                                livelihoods. (Max 150 words) <span style="color: #F99B1C">*</span> </label>
                                            <textarea class="form-control round_input overflow-auto" name="current_initiative" id="currentInitiative"
                                                rows="3" maxlength="1000" placeholder="Describe your initiative..."></textarea>
                                            <p class="text-danger"></p>
                                        </div>

                                        <!-- Plan to Scale -->


                                        <!-- LinkedIn or Portfolio (Optional) -->
                                        <div class="form-group mb-4 col-12 col-md-6">
                                            <label for="linkedin"> LinkedIn profile / portfolio / article <span
                                                    style="color: #F99B1C">*</span> (Share links that highlight your
                                                involvement in
                                                sectors relevant to climate adaptation)
                                            </label>
                                            <input type="url" name="linkedin_profile"
                                                class="form-control round_input" id="linkedin"
                                                placeholder="For multiple links, separate each link with a comma (,)">
                                            <p class="text-danger"></p>
                                        </div>


                                        <!-- Where did you hear about FIF? -->
                                        <div class="form-group mb-4 col-12">
                                            <label>Where did you hear about FIF?</label><br>
                                            @foreach ($about_fif as $key => $label)
                                                <div class="form-check form-check">
                                                    <input class="form-check-input" type="checkbox" name="about_fif[]"
                                                        id="heardAbout{{ ucfirst($key) }}" value="{{ $key }}">
                                                    <label class="form-check-label"
                                                        for="heardAbout{{ ucfirst($key) }}">{{ $label }}</label>
                                                    @if ($key === 'other')
                                                        <input type="text" class="form-control mt-2"
                                                            id="heardAboutOtherText" name="about_fif_other"
                                                            placeholder="Please specify" style="display:none;">
                                                    @endif
                                                </div>
                                            @endforeach
                                            <p class="text-danger"></p>
                                        </div>
                                        <script>
                                            // Show/hide the "Other" text input for about_fif
                                            document.getElementById('heardAboutOther').addEventListener('change', function() {
                                                document.getElementById('heardAboutOtherText').style.display = this.checked ? 'block' : 'none';
                                            });
                                        </script>


                                    </div>

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
                                <!-- Section 4: Breakout Session Preferences -->

                                <div id="step4" class="step-section" style="display:none;">
                                    <div class="form_section mt-4 mb-4">
                                        <h2>Section 4: Breakout Session Preferences</h2>
                                        <p class="text-white">Please select one breakout session you are most interested in
                                            attending. These sessions will take place at the same time, so you can only
                                            participate in one. Your selection will help us manage seating and ensure
                                            thematic alignment.</p>
                                    </div>
                                    <div class="row">
                                        <!-- Day 1 Breakouts -->
                                        <div class="form-group mb-4 col-12">
                                            <label><strong>Day 1: Stakeholder-Specific Climate Data Use Cases (Choose
                                                    One)</strong><span style="color: #F99B1C">*</span></label><br>
                                            @foreach ($day1_breakouts as $key => $label)
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="day1_preference"
                                                        id="breakout1_{{ $key }}" value="{{ $key }}">
                                                    <label class="form-check-label"
                                                        for="breakout1_{{ $key }}">{{ $label }}</label>
                                                </div>
                                            @endforeach
                                            <p class="text-danger"></p>
                                        </div>

                                        {{-- Day 2 Breakouts --}}
                                        <div class="form-group mb-4 col-12">
                                            <label><strong>Day 2: Designing Bundled Solutions for Farmers (Choose
                                                    One)</strong><span style="color: #F99B1C">*</span></label><br>
                                            @foreach ($day2_breakouts as $key => $label)
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="day2_preference"
                                                        id="breakout2_{{ $key }}" value="{{ $key }}">
                                                    <label class="form-check-label"
                                                        for="breakout2_{{ $key }}">{{ $label }}</label>
                                                </div>
                                            @endforeach
                                            <p class="text-danger"></p>
                                        </div>
                                    </div>


                                    <div class="form-group col-12 text-end mb-4">
                                        <div class="d-flex justify-content-between">
                                            <button type="button"
                                                class="btn btn-primary save-and-next-button backBtn">Back</button>
                                            <button type="submit" id="next1"
                                                class="btn btn-primary save-and-next-button">Submit</button>
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
                url: "{{ route('participants.store') }}",
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
                        $('#participrntForm')[0].reset();
                        $(`#step${currentStep}`).hide(); // Hide the last step (5)
                        currentStep = 1;
                        $(`#step${currentStep}`).show();
                        $('.text-danger').text('');
                         if (typeof fbq !== 'undefined') {
                            fbq('track', 'CompleteRegistration'); // Facebook Pixel Event
                        }

                        if (typeof lintrk !== 'undefined') {
                            lintrk('track', { conversion_id: 20271652 }); // LinkedIn Event
                        }

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
                                window.location.href = "{{ route('fconferencepackages') }}";
                            }
                        });

                    }
                },
                error: function(xhr) {
                    if (xhr.status === 422) {
                        var errors = xhr.responseJSON.errors;
                        var firstErrorField = null;

                        // Show validation errors inside corresponding <p> tags
                        $.each(errors, function(key, value) {
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
