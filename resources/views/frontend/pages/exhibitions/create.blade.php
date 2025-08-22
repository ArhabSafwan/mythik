@extends('frontend.fif_main')
@section('ftitle', 'FiF2025')
@section('meta_tag')
<meta name="title" content="Frugal Innovation Forum 2025 | Frugal Innovation Forum 2025 - Exhibitor Application Form ">
<meta name="keywords" content="Frugal Innovation Forum, FIF 2025, BRAC, Climate Adaptation, Agriculture, Food Security, Livelihoods, Global South, Development Conference">
<meta name="description" content="Frugal Innovation Forum 2025 will explore Climate Adaptation in Agriculture, Food Security, and Livelihoods. Join development practitioners, entrepreneurs, and climate experts for this 2-day global conference hosted by BRAC.">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:title" content="Frugal Innovation Forum 2025 | Frugal Innovation Forum 2025 - Exhibitor Application Form">
<meta property="og:description" content="FIF 2025 brings together global experts to discuss climate adaptation in agriculture, food systems, and livelihoods. Explore solutions grounded in the realities of the Global South.">
<meta property="og:image" content="{{ asset('/') }}frontend/img/logo_1.png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:site_name" content="Frugal Innovation Forum 2025">

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:url" content="{{ url()->current() }}">
<meta name="twitter:title" content="Frugal Innovation Forum 2025 | Frugal Innovation Forum 2025 - Exhibitor Application Form">
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
                        <h1 class="text-white" id="startpoint">Exhibitor Application Form – Frugal Innovation Forum 2025
                        </h1>
                    </div>
                    <div class="text-light">
                        <p class="text-white">
                            <!-- <i class="fas fa-seedling  text-success"></i>-->
                            <strong>Theme:</strong> Climate Adaptation in Agriculture, Food Security, and Livelihoods
                        </p>
                        <p class="text-white">
                            <i class="fas fa-map-marker-alt text-white"></i>
                            <strong>Venue:</strong> BRAC CDM, Savar, Dhaka, Bangladesh
                        </p>
                        <p class="text-white">
                            <i class="fa fa-calendar  text-white"></i>
                            <strong>Conference Dates:</strong> 25–26 July 2025
                        </p>
                        <p class="text-white">
                            We are excited to officially invite you to the exhibition of the Frugal Innovation Forum (FIF)
                            2025.
                        </p>
                        <p class="text-white mt-3 mb-4">
                            Please fill out this application form to book one booth at FIF 2025.
                        </p>
                        <p class="text-white fw-bold"> <i class="fas fa-info-circle text-white"></i>
                            Please note:
                        </p>
                        <ul class=" text-white ps-3 mx-2">
                            <li class="text-white" style="list-style: disc">
                                Limited spots are available and are subject to fees. Exhibitor will be confirmed on a
                                rolling basis.
                            </li>
                            <li class="text-white" style="list-style: disc">
                                Exhibitors should minimize waste and use resource-efficient displays to align with the
                                event’s climate-focused mission
                            </li>
                            <li class="text-white" style="list-style: disc">
                                Fees will cover the logistical elements of the exhibition booth, food and accommodation for
                                02 participants over the course of the two-day forum.
                                <a href="{{ asset('frontend/Overview_FIF_2025_Exhibitor_Guide.pdf') }}"
                                    target="_blank">Check the Exhibitor Guide for further details</a>
                            </li>
                            <li class="text-white" style="list-style: disc">
                                FIF is committed to a low-waste, climate-friendly event—expect simple,
                                sustainable
                                choices and bring a like-minded spirit.
                            </li>
                            <li class="text-white" style="list-style: disc">
                                You are currently registaring for <span style="color: #F99B1C">{{ $package }},
                                    {{ $currency }} {{ $price }}</span>
                            </li>
                        </ul>
                        <p class="text-white">
                            Kindly fill out the form below to help us assess your participation.
                        </p>

                    </div>

                </div>
                <div class="col-md-12 col-lg-12">
                    <div class="">
                        <div class="">
                            <form id="exhibition_reg" method="post">
                                @csrf
                                <input type="hidden" value="{{ $package }}" name="category_type">
                                <input type="hidden" value="{{ $price }}" name="cost">
                                <input type="hidden" value="{{ $currency }}" name="currency">
                                <input type="hidden" name="step" id="stepInput" value="1">
                                <div id="step1" class="step-section">
                                    <div class="form_section mt-2 mb-4">
                                        <h2> Section: Contact Details</h2>
                                        <p class="form_section_p">
                                            Kindly provide the name of your organization along with the contact details of
                                            the two representatives who will be attending the Frugal Innovation Forum 2025
                                            as exhibitors.
                                        </p>
                                    </div>
                                    <div class="row">
                                        <!-- Full Name -->
                                        <div class="form-group mb-4 col-12 col-md-12">
                                            <label for="textInput">Name of your organisation<span
                                                    style="color: #F99B1C">*</span></label>
                                            <input type="text" class="form-control round_input" id="textInput"
                                                name="organization_name" placeholder="Enter your organisation">
                                            <p class="text-danger"></p>
                                        </div>
                                        <div class="form_section mt-2 mb-4">
                                            <h2>Participants detail 1</h2>
                                        </div>
                                        <!-- Email -->
                                        <div class="form-group mb-4 col-12 col-md-6">
                                            <label for="emailInput">Full name<span style="color: #F99B1C">*</span></label>
                                            <input type="text" class="form-control round_input" id="emailInput"
                                                name="p1_full_name" placeholder="Enter full name">
                                            <p class="text-danger"></p>
                                        </div>

                                        <!-- Phone -->
                                        <div class="form-group mb-4 col-12 col-md-6">
                                            <label for="phoneInput">Designation<span style="color: #F99B1C">*</span></label>
                                            <input type="text" class="form-control round_input" id="phoneInput"
                                                name="p1_designation" placeholder="Enter designation">
                                            <p class="text-danger"></p>
                                        </div>

                                        <div class="form-group mb-4 col-12 col-md-6">
                                            <label for="phoneInput">Contact number<span
                                                    style="color: #F99B1C">*</span></label>
                                            <input type="text" class="form-control round_input" id="phoneInput"
                                                name="p1_contact_number" placeholder="Enter contact number">
                                            <p class="text-danger"></p>
                                        </div>
                                        <div class="form-group mb-4 col-12 col-md-6">
                                            <label for="phoneInput">WhatsApp number<span
                                                    style="color: #F99B1C">*</span></label>
                                            <input type="text" class="form-control round_input" id="phoneInput"
                                                name="p1_whatsapp" placeholder="Enter contact number">
                                            <p class="text-danger"></p>
                                        </div>
                                        <div class="form-group mb-4 col-12 col-md-6">
                                            <label for="phoneInput">Email address<span
                                                    style="color: #F99B1C">*</span></label>
                                            <input type="email" class="form-control round_input" id="phoneInput"
                                                name="p1_email" placeholder="Enter your email address">
                                            <p class="text-danger"></p>
                                        </div>
                                        <div class="form_section mt-2 mb-4">
                                            <h2>Participants detail 2</h2>
                                        </div>
                                        <!-- Email -->
                                        <div class="form-group mb-4 col-12 col-md-6">
                                            <label for="emailInput">Full name</label>
                                            <input type="text" class="form-control round_input" id="emailInput"
                                                name="p2_full_name" placeholder="Enter full name">
                                            <p class="text-danger"></p>
                                        </div>

                                        <!-- Phone -->
                                        <div class="form-group mb-4 col-12 col-md-6">
                                            <label for="phoneInput">Designation</label>
                                            <input type="text" class="form-control round_input" id="phoneInput"
                                                name="p2_designation" placeholder="Enter designation">
                                            <p class="text-danger"></p>
                                        </div>

                                        <div class="form-group mb-4 col-12 col-md-6">
                                            <label for="phoneInput">Contact number</label>
                                            <input type="text" class="form-control round_input" id="phoneInput"
                                                name="p2_contact_number" placeholder="Enter contact number">
                                            <p class="text-danger"></p>
                                        </div>
                                        <div class="form-group mb-4 col-12 col-md-6">
                                            <label for="phoneInput">WhatsApp number</label>
                                            <input type="text" class="form-control round_input" id="phoneInput"
                                                name="p2_whats_app" placeholder="Enter contact number">
                                            <p class="text-danger"></p>
                                        </div>
                                        <div class="form-group mb-4 col-12 col-md-6">
                                            <label for="phoneInput">Email address</label>
                                            <input type="email" class="form-control round_input" id="phoneInput"
                                                name="p2_email" placeholder="Enter contact number">
                                            <p class="text-danger"></p>
                                        </div>
                                    </div>
                                    <div class="form-group col-12 text-end mb-4">
                                        <button type="submit" id="next1"
                                            class="btn btn-primary save-and-next-button">Save
                                            and Next</button>
                                    </div>
                                </div>
                                <div id="step2" class="step-section" style="display:none;">
                                    <div class="form_section mt-2 mb-4">
                                        <h2> Section: Exhibition Details</h2>
                                        <p class="form_section_p">
                                            Please provide an overview of your exhibition plan.
                                        </p>
                                    </div>

                                    <div class="form-group mb-4 col-12 col-md-12">
                                        <label for="phoneInput">Title of the Innovation/Project You Intend to Exhibit <span
                                                style="color: #F99B1C">*</span></label>
                                        <input type="text" class="form-control round_input" id="phoneInput"
                                            name="exhibition_title"
                                            placeholder="Enter Title of the Innovation/Project You Intend to Exhibit">
                                        <p class="text-danger"></p>
                                    </div>
                                    <div class="form-group mb-4 col-12 col-md-6">
                                        <label for="messageInput">Brief Description of the Innovation (Max 150 words) <span
                                                style="color: #F99B1C">*</span></label>
                                        <textarea class="form-control round_input overflow-auto" id="messageInput" rows="4" name="innovation_desc"
                                            placeholder="Type your message here..."></textarea>
                                        <p class="text-danger"></p>
                                    </div>
                                    <div class="form-group mb-4 col-12 col-md-6">
                                        <label for="messageInput">How does this innovation serve climate-vulnerable
                                            communities? (Max 100 words) <span style="color: #F99B1C">*</span></label>
                                        <textarea class="form-control round_input overflow-auto" id="messageInput" rows="4" name="climate_vulnerable"
                                            placeholder="Type your message here..."></textarea>
                                        <p class="text-danger"></p>
                                    </div>
                                    <div class="form-group mb-4 col-12 col-md-12">
                                        <label for="messageInput">Please describe how you plan to present or display your
                                            innovation at the booth (Max 100 words) <span
                                                style="color: #F99B1C">*</span></label>
                                        <textarea class="form-control round_input overflow-auto" name="describe_plan" id="messageInput" rows="4"
                                            placeholder="Type your message here..."></textarea>
                                        <p class="text-danger"></p>
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
                                <div id="step3" class="step-section" style="display:none;">
                                    <div class="form_section mt-2 mb-4">
                                        <h2> Section: Materials & Requirements</h2>
                                        <p class="form_section_p">
                                            Kindly take note of the logistical support available at the venue and plan the
                                            design of your exhibition booth accordingly.
                                        </p>
                                    </div>
                                    <div class="form-group mb-4 col-12 col-md-6">
                                        <label class="d-block mb-2">
                                            What materials will you share with us ahead of the event? <span
                                                style="color: #F99B1C">*</span>
                                        </label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="presentation_slides"
                                                name="material_needed[]" id="checkNews">
                                            <label class="form-check-label" for="checkNews">Presentation slides</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="material_needed[]"
                                                value="audio_visual" id="checkUpdates">
                                            <label class="form-check-label" for="checkUpdates">Audio visuals</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="material_needed[]"
                                                value="handouts" id="checkOffers">
                                            <label class="form-check-label" for="checkOffers">Handouts</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="material_needed[]"
                                                value="poster" id="checkPoster">
                                            <label class="form-check-label" for="checkPoster">Posters</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="material_needed[]"
                                                value="other" id="checkOther">
                                            <label class="form-check-label" for="checkOther">Other</label>
                                        </div>
                                        <input type="text" class="form-control mt-2" id="materialOtherText"
                                            name="other_material_needed" placeholder="Please specify"
                                            style="display:none;">
                                        <p class="text-danger"></p>
                                    </div>
                                    <script>
                                        document.getElementById('checkOther').addEventListener('change', function() {
                                            document.getElementById('materialOtherText').style.display = this.checked ? 'block' : 'none';
                                        });
                                    </script>
                                    <div class="form-group mb-4 col-12 col-md-6">
                                        <label class="d-block mb-2">Do you plan to use any audio-visual content at your
                                            booth?</label>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio"
                                                name="have_audio_visual_content" id="genderMale" value="yes">
                                            <label class="form-check-label" for="genderMale">Yes</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio"
                                                name="have_audio_visual_content" id="genderFemale" value="no">
                                            <label class="form-check-label" for="genderFemale">No</label>
                                        </div>
                                        <p class="text-danger"></p>
                                    </div>
                                    <div class="form-group mb-4 col-12 col-md-12">
                                        <label for="phoneInput">Do you need any logistical support?</label>
                                        <input type="text" class="form-control round_input" id="phoneInput"
                                            name="need_logistic_support" placeholder="Write in brief">
                                        <span class="text-white">Note: Logistical support is limited to basic
                                            provisions—electricity, internet access, and standard booth setup. It does not
                                            include production of personal materials, printing, provision of staff
                                            assistance, transportation/shipping of materials, or custom booth
                                            furnishings.</span>
                                        <p class="text-danger"></p>

                                    </div>
                                    <!-- Submit Button (Full Width) -->
                                    <div class="col-12 mt-3 mb-5">
                                        <div class="d-flex justify-content-between">
                                            <button type="button"
                                                class="btn btn-primary save-and-next-button backBtn">Back</button>
                                            <button type="submit" id="next1"
                                                class="btn btn-primary save-and-next-button">Submit</button>
                                        </div>
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
            e.preventDefault();

            $('#exhibition_reg .is-invalid').removeClass('is-invalid');
            const form = $(this);
            // Set the hidden step input to currentStep value
            $('#stepInput').val(currentStep);

            // Clear previous errors
            $('.text-danger').text('');

            const formData = form.serialize();

            $.ajax({
                url: "{{ route('exhibitions.store') }}",
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
                        $('#exhibition_reg')[0].reset();
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
                                window.location.href = "{{ route('fexhibitionpackages') }}";
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
