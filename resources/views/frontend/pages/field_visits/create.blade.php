@extends('frontend.fif_main')
@section('ftitle', 'FiF2025')
@section('meta_tag')
    <meta name="title"
        content="Frugal Innovation Forum 2025 | Frugal Innovation Forum 2025 - Field Visitor Application Form">
    <meta name="keywords"
        content="Frugal Innovation Forum, FIF 2025, BRAC, Climate Adaptation, Agriculture, Food Security, Livelihoods, Global South, Development Conference">
    <meta name="description"
        content="Frugal Innovation Forum 2025 will explore Climate Adaptation in Agriculture, Food Security, and Livelihoods. Join development practitioners, entrepreneurs, and climate experts for this 2-day global conference hosted by BRAC.">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title"
        content="Frugal Innovation Forum 2025 | Frugal Innovation Forum 2025 - Field Visitor Application Form">
    <meta property="og:description"
        content="FIF 2025 brings together global experts to discuss climate adaptation in agriculture, food systems, and livelihoods. Explore solutions grounded in the realities of the Global South.">
    <meta property="og:image" content="{{ asset('/') }}frontend/img/logo_1.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:site_name" content="Frugal Innovation Forum 2025">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title"
        content="Frugal Innovation Forum 2025 | Frugal Innovation Forum 2025 - Field Visitor Application Form">
    <meta name="twitter:description"
        content="A global forum exploring climate adaptation in agriculture and livelihoods. Hosted by BRAC.">
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
                        <h1 class="text-white" id="startpoint">Frugal Innovation Forum 2025 - Field Visitor Application Form
                        </h1>
                    </div>
                    <div class="text-light">
                        <p class="text-white mt-3 mb-3">
                            As part of the FIF 2025, we are organising a curated 2-day Field Visit to provide participants
                            with an immersive, real-world experience aligned with the conference themes. A fee is
                            applicable with the visit that includes accommodation, meals, and transportation costs for the
                            two days.
                        </p>
                        <p class="text-white fw-bold">
                            The field visit is open to a maximum of 24 participants and is intended for:
                        </p>
                        <ul class=" text-white ps-3 mx-2">
                            <li class="text-white" style="list-style: disc">
                                Expats residing in Bangladesh who work in climate change or adaptation
                            </li>

                            <li class="text-white" style="list-style: disc">
                                Non-resident Bangladeshis (NRBs) actively engaged in climate-related work
                            </li>
                            <li class="text-white" style="list-style: disc">
                                Non-Bangladeshis with a professional background or strong interest in
                                climate adaptation or agriculture
                            </li>
                        </ul>
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
                                Selection will prioritise individuals
                                registered for the FIF 2025 Conference and working independently or with organisations
                                directly
                                involved in the climate adaptation space.
                            </li>
                            <li class="text-white" style="list-style: disc">
                                FIF is committed to a low-waste, climate-friendly event—expect simple, sustainable
                                choices
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
                            <form id="fieldVisitForm">
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
                                        <!-- Current Affiliation -->
                                        @if (isset($currency) && $currency == 'USD')
                                            <div class="form-group mb-4 col-12">
                                                <label>Which of the following best represents your current
                                                    affiliation?<span style="color: #F99B1C">*</span></label><br>
                                                @foreach ($current_affiliation as $key => $label)
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio"
                                                            name="current_affiliation[]"
                                                            id="affiliation{{ ucfirst($key) }}"
                                                            value="{{ $key }}">
                                                        <label class="form-check-label"
                                                            for="affiliation{{ ucfirst($key) }}">{{ $label }}</label>

                                                    </div>
                                                @endforeach
                                                <p class="text-danger"></p>
                                            </div>
                                        @endif

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

                                        <!-- Email Address -->
                                        <div class="form-group mb-4 col-12 col-md-6">
                                            <label for="email">Email Address <span
                                                    style="color: #F99B1C">*</span></label>
                                            <input type="email" name="email" class="form-control round_input"
                                                id="email" placeholder="Enter your email">
                                            <p class="text-danger"></p>
                                        </div>

                                        <!-- WhatsApp Contact Number -->
                                        <div class="form-group mb-4 col-12 col-md-6">
                                            <label for="whatsapp_number">Contact Number <span
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
                                                    name="whatsapp_number" id="whatsapp_number"
                                                    placeholder="Enter number">

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
                                    <div class="form-group col-12 text-end mb-4">
                                        <button type="submit" id="next1"
                                            class="btn btn-primary save-and-next-button">Save
                                            and Next</button>
                                    </div>
                                </div>
                                <!-- Section 2: Eligibility Check -->
                                <div id="step2" class="step-section" style="display:none;">
                                    <div class="form_section mt-4 mb-4">
                                        <h2>Section 2: Organisation Information</h2>
                                    </div>
                                    <div class="row">
                                        <!-- Organisation Name -->
                                        <div class="form-group mb-4 col-12 col-md-6">
                                            <label for="orgName">Organisation Name <span
                                                    style="color: #F99B1C">*</span></label>
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
                                            <label>Sectors: <span style="color: #F99B1C">*</span></label><br>
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
                                                    style="color: #F99B1C">*</span></label>
                                            <input type="text" name="organisation_website"
                                                class="form-control round_input" id="orgWebsite"
                                                placeholder="Enter website URL">
                                            <p class="text-danger"></p>
                                        </div>
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







                                <!-- Section 3: Eligibility Check -->
                                <div id="step3" class="step-section" style="display:none;">
                                    <div class="form_section mt-4 mb-4">
                                        <h2>Section 3: Eligibility and Motivation</h2>
                                    </div>

                                    <div class="row">


                                        <!-- Eligibility Confirmation -->



                                        <!-- Field Visit Options -->
                                        {{-- <div class="form-group mb-4 col-12" id="visitOptionsGroup">
                                            <label><strong>Field Visit Options (Select one)</strong></label><br>
                                            @foreach ($fieldVisitOptions as $key => $label)
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="field_visit_option" id="option{{ ucfirst($key) }}"
                                                        value="{{ $key }}">
                                                    <label class="form-check-label"
                                                        for="option{{ ucfirst($key) }}">{{ $label }}</label>
                                                </div>
                                            @endforeach
                                            <p class="text-danger"></p>
                                        </div> --}}
                                        <!-- Motivation -->
                                        <div class="form-group mb-4 col-12" id="visitMotivationGroup">
                                            <label for="motivation"><strong>How does this field visit align with your work
                                                    or interests?</strong> <small>(max 100 words)</small><span
                                                    style="color: #F99B1C">*</span></label>
                                            <textarea class="form-control round_input overflow-auto" name="motivation" id="motivation" rows="3"
                                                placeholder="Please Share..."></textarea>
                                            <p class="text-danger"></p>
                                        </div>

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

                                    <script>
                                        document.addEventListener('DOMContentLoaded', function() {
                                            // Show/hide the ineligible message based on eligibility radio selection
                                            document.querySelectorAll('input[name="eligibility_status"]').forEach(function(radio) {
                                                radio.addEventListener('change', function() {
                                                    if (this.id === 'eligibility_not_eligible' && this.checked) {
                                                        document.getElementById('ineligibleMsg').style.display = 'block';
                                                    } else {
                                                        document.getElementById('ineligibleMsg').style.display = 'none';
                                                    }
                                                });
                                                // On page load, show if already checked
                                                if (radio.id === 'eligibility_not_eligible' && radio.checked) {
                                                    document.getElementById('ineligibleMsg').style.display = 'block';
                                                }
                                            });
                                        });
                                    </script>

                                    <script>
                                        // Show/hide the "Other" sector input field
                                        document.querySelectorAll('input[name="work_sector"]').forEach(function(radio) {
                                            radio.addEventListener('change', function() {
                                                if (this.id === 'sectorOther') {
                                                    document.getElementById('sectorOtherText').style.display = 'block';
                                                } else {
                                                    document.getElementById('sectorOtherText').style.display = 'none';
                                                }
                                            });
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



                                <!-- Section 4: Field Visit Participation -->
                                <div id="step4" class="step-section" style="display:none;">
                                    <div class="form_section mt-4 mb-4">
                                        <h2>Section 4: Field Visit Participation</h2>
                                    </div>
                                    <div class="row">

                                        <!-- Accessibility Requirements -->
                                        <div class="form-group mb-4 col-12">
                                            <label><strong>Do you have any accessibility requirements?<span
                                                        style="color: #F99B1C">*</span></strong></label><br>

                                            <div class="form-check form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="accessibility_required" id="accessNo" value="No">
                                                <label class="form-check-label" for="accessNo">No</label>
                                            </div>

                                            <div class="form-check form-check">
                                                <input class="form-check-input" type="radio"
                                                    name="accessibility_required" id="accessYes" value="Yes">
                                                <label class="form-check-label" for="accessYes">Yes</label>
                                            </div>

                                            <input type="text" name="accessibility_description"
                                                class="form-control mt-2" id="accessDetails"
                                                placeholder="Please describe" style="display:none;">
                                            <p class="text-danger"></p>
                                        </div>
                                    </div>

                                    <script>
                                        document.getElementById('accessYes').addEventListener('change', () => {
                                            document.getElementById('accessDetails').style.display = 'block';
                                        });
                                        document.getElementById('accessNo').addEventListener('change', () => {
                                            document.getElementById('accessDetails').style.display = 'none';
                                        });

                                        function toggleRelevanceRequired(show) {
                                            document.querySelectorAll('input[name="relevance_to_work"]').forEach(function(radio) {
                                                if (show) {
                                                    radio.setAttribute('required', 'required');
                                                } else {
                                                    radio.removeAttribute('required');
                                                }
                                            });
                                        }

                                        const visitYes = document.getElementById('visitYes');
                                        const visitNo = document.getElementById('visitNo');
                                        const optionsGroup = document.getElementById('visitOptionsGroup');
                                        const motivationGroup = document.getElementById('visitMotivationGroup');
                                        const relevanceGroup = document.getElementById('visitRelevanceGroup');
                                        const endOfFormMsg = document.getElementById('endOfFormMsg');

                                        visitYes.addEventListener('change', () => {
                                            if (visitYes.checked) {
                                                optionsGroup.style.display = 'block';
                                                motivationGroup.style.display = 'block';
                                                relevanceGroup.style.display = 'block';
                                                endOfFormMsg.style.display = 'none';
                                                toggleRelevanceRequired(true);
                                            }
                                        });

                                        visitNo.addEventListener('change', () => {
                                            if (visitNo.checked) {
                                                optionsGroup.style.display = 'none';
                                                motivationGroup.style.display = 'none';
                                                relevanceGroup.style.display = 'none';
                                                endOfFormMsg.style.display = 'block';
                                                toggleRelevanceRequired(false);
                                            }
                                        });

                                        // On page load, set required attribute correctly
                                        document.addEventListener('DOMContentLoaded', function() {
                                            if (visitYes.checked) {
                                                toggleRelevanceRequired(true);
                                            } else {
                                                toggleRelevanceRequired(false);
                                            }
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







                                <!-- Section 5: Logistics & Accessibility -->
                                <div id="step5" class="step-section" style="display:none;">
                                    <div class="form_section mt-4 mb-4">
                                        <h2>SECTION 5: Consent & Coordination</h2>
                                    </div>
                                    <div class="row">


                                        <!-- Comfort Outdoors -->
                                        <div class="form-group mb-4 col-12">
                                            <label><strong>I understand that the field visit will involve long travel
                                                    durations (4–6 hours), potentially on rural roads, and may require
                                                    walking short distances in non-urban settings. <span
                                                        style="color: #F99B1C">*</span></strong></label><br>

                                            <div class="form-check form-check">
                                                <input class="form-check-input" type="checkbox" name="comfort_outdoors"
                                                    id="outdoorYes" value="Yes">
                                                <label class="form-check-label" for="outdoorYes">Yes, I confirm</label>
                                            </div>
                                            <p class="text-danger"></p>
                                        </div>

                                        <!-- Medical Conditions -->
                                        <div class="form-group mb-4 col-12">
                                            <label><strong>I understand that interpretation support during the field visit
                                                    will be limited to English.<span
                                                        style="color: #F99B1C">*</span></strong></label><br>

                                            <div class="form-check form-check">
                                                <input class="form-check-input" type="checkbox" name="medical_conditions"
                                                    id="medicalYes" value="Yes">
                                                <label class="form-check-label" for="medicalYes">Yes, I confirm</label>
                                            </div>
                                            <p class="text-danger"></p>
                                        </div>

                                        <!-- Translation/Interpretation -->
                                        <div class="form-group mb-4 col-12">
                                            <label><strong>I agree to actively coordinate with the FIF 2025 team regarding
                                                    logistical arrangements, including travel confirmations and any
                                                    applicable payments.<span
                                                        style="color: #F99B1C">*</span></strong></label><br>

                                            <div class="form-check form-check">
                                                <input class="form-check-input" type="checkbox"
                                                    name="interpretation_support" id="translationYes" value="Yes">
                                                <label class="form-check-label" for="translationYes">Yes</label>
                                            </div>


                                            <p class="text-danger"></p>
                                        </div>
                                    </div>

                                    <script>
                                        // Accessibility requirements toggle


                                        // Outdoor condition details toggle
                                        document.getElementById('outdoorDepends').addEventListener('change', () => {
                                            document.getElementById('outdoorDetails').style.display = 'block';
                                        });
                                        document.getElementById('outdoorYes').addEventListener('change', () => {
                                            document.getElementById('outdoorDetails').style.display = 'none';
                                        });
                                        document.getElementById('outdoorNo').addEventListener('change', () => {
                                            document.getElementById('outdoorDetails').style.display = 'none';
                                        });
                                    </script>
                                    <div class="col-12 mt-3 mb-4">
                                        <div class="d-flex justify-content-between">
                                            <button type="button"
                                                class="btn btn-primary save-and-next-button backBtn">Back</button>
                                            <button type="submit" id="next1"
                                                class="btn btn-primary save-and-next-button">Submit</button>
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
@push('fscript')
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    <script>
        let currentStep = 1;

        function showStep(step) {
            $('[id^=step]').hide(); // Hide all steps
            $(`#step${step}`).show(); // Show current step
            $('#stepInput').val(step); // Update hidden input
        }

        // Initial step
        showStep(currentStep);

        $('#fieldVisitForm').on('submit', function(e) {
            e.preventDefault();
            $('#fieldVisitForm .is-invalid').removeClass('is-invalid');
            const form = $(this);
            // Set the hidden step input to currentStep value
            $('#stepInput').val(currentStep);

            // Clear previous errors
            $('.text-danger').text('');

            const formData = form.serialize();

            $.ajax({
                url: "{{ route('field-visits.store') }}",
                method: "POST",
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                success: function(response) {
                    if (response.nextStep) {
                        currentStep = response.nextStep;
                        showStep(currentStep);
                        window.scrollTo(0, $(`#startpoint`).offset().top);
                    } else if (response.success) {
                        $('#fieldVisitForm')[0].reset();
                        $(`#step${currentStep}`).hide(); // Hide the last step (5)
                        currentStep = 1;
                        $(`#step${currentStep}`).show();
                        $('.text-danger').text('');
                        if (typeof fbq !== 'undefined') {
                            fbq('track', 'CompleteRegistration'); // Facebook Pixel Event
                        }

                        if (typeof lintrk !== 'undefined') {
                            lintrk('track', {
                                conversion_id: 20271652
                            }); // LinkedIn Event
                        }

                        Swal.fire({
                            title: '',
                            html: `
                                <h1>Field Visit Application Received!</h1>
                                <p>Thank you for applying to join a <strong>Field Visit as part of Frugal Innovation Forum 2025</strong>.<br>
                                    Your application has been successfully submitted and is currently under review by our team.</p>

                                <p><strong>📅 What’s Next?</strong><br>
                                You can expect to receive an update on your application status within <strong>2–3 business days.</strong><br>
                                Selection will be based on thematic relevance and logistical feasibility</p>

                                <p><strong>🔗 <a href="${window.location.origin}/" target="_blank" style="color: black;">Learn More</a></strong><br>
                                To explore the full FIF 2025 agenda, speaker line-up, and event updates, visit our official website.</p>

                                <p><strong>📱 Need Assistance?</strong><br>
                                For urgent queries, contact us via WhatsApp at
                                <a href="https://wa.me/8801332550461" target="_blank" style="color: orange;">+880-1332550461</a>
                                or connect with us on
                                <a href="https://www.facebook.com/FIForum/" target="_blank" style="color: orange;">Facebook</a>,
                                <a href="https://x.com/innovate_frugal" target="_blank" style="color: orange;">Twitter</a>, or
                                <a href="https://www.linkedin.com/company/frugal-innovation-forum/" target="_blank" style="color: orange;">LinkedIn</a>.</p>

                                <p>We appreciate your interest and look forward to potentially welcoming you on one of the field visits.</p>
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
                                window.location.href = "{{ route('ffieldpackages') }}";
                            }
                        });

                    }
                },
                error: function(xhr) {
                    if (xhr.status === 422) {
                        var errors = xhr.responseJSON.errors;
                        var firstErrorField = null;
                        $.each(errors, function(key, value) {
                            var baseKey = key.replace(/\.\d+$/, '');
                            var inputField = $('#fieldVisitForm [name="' + baseKey + '[]"]');

                            if (inputField.length) {
                                inputField.closest('.form-group').find('p.text-danger').first()
                                    .html(value[0]);
                                if (!firstErrorField) {
                                    firstErrorField = inputField;
                                }
                            } else {
                                var singleField = $('#fieldVisitForm [name="' + baseKey + '"]');
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
