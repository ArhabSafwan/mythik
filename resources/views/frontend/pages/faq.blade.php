@extends('frontend.fif_main')
@section('ftitle', 'FAQ')
@section('meta_tag')
<meta name="title" content="Frugal Innovation Forum 2025 | BRAC Social Innovation Lab | FAQ ">
<meta name="keywords" content="Frugal Innovation Forum, FIF 2025, BRAC, Climate Adaptation, Agriculture, Food Security, Livelihoods, Global South, Development Conference">
<meta name="description" content="Frugal Innovation Forum 2025 will explore Climate Adaptation in Agriculture, Food Security, and Livelihoods. Join development practitioners, entrepreneurs, and climate experts for this 2-day global conference hosted by BRAC.">

<!-- Open Graph / Facebook -->
<meta property="og:type" content="website">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:title" content="Frugal Innovation Forum 2025 | FAQ">
<meta property="og:description" content="FIF 2025 brings together global experts to discuss climate adaptation in agriculture, food systems, and livelihoods. Explore solutions grounded in the realities of the Global South.">
<meta property="og:image" content="{{ asset('/') }}frontend/img/logo_1.png">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:site_name" content="Frugal Innovation Forum 2025">

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:url" content="{{ url()->current() }}">
<meta name="twitter:title" content="Frugal Innovation Forum 2025 | FAQ">
<meta name="twitter:description" content="A global forum exploring climate adaptation in agriculture and livelihoods. Hosted by BRAC.">
<meta name="twitter:image" content="{{ asset('/') }}frontend/img/logo_1.png">
@endsection
@push('fcss')
<style>

</style>
@endpush
@section('fif_content')
    <section class="d-flex align-items-center faq-custom form_section" style="background-color: #FFFFFF !important;">
         <span class="leaf"></span>
        <span class="vector-bg">
            <svg width="1267" height="645" viewBox="0 0 1267 645" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M1267 350.197L1192.56 75.1561L978.347 263.787L1079.14 259.8C1047.89 321.325 980.9 410.004 837.125 502.463C837.125 502.463 837.125 502.463 836.987 502.463C725.914 555.945 595.593 588.049 452.37 566.67C-80.5754 507.344 -322.936 -152.934 26.4966 -551.369C252.3 -820.842 665.341 -873.018 953.856 -673.044L957.926 -678.75C945.37 -687.411 927.157 -700.541 914.256 -708.172C711.081 -838.027 443.953 -851.776 226.498 -748.868C161.992 -718.621 101.143 -677.993 48.2283 -630.354C-170.193 -436.361 -249.531 -110.794 -145.978 161.635C15.3893 593.754 511.632 752.344 891.627 571.344C891.627 571.344 891.765 571.344 892.041 571.206C892.386 571.069 892.731 570.863 893.076 570.725C893.559 570.588 894.042 570.313 894.663 569.969C899.423 567.632 904.252 565.294 908.944 562.82C910.254 562.201 911.634 561.445 913.083 560.689C966.895 532.091 1108.39 445.406 1184.07 290.597L1267 349.991V350.197Z"
                    fill="#D5E03A" fill-opacity="0.3" />
            </svg>
        </span>

        <div class="container my-5">
            <div class="accordion_heading my-5">
                <h1 class="text-center a_heading">FAQ – Frequently Asked Questions</h1>
            </div>
            <!-- Accordion -->
            <div class="accordion custom-accordion" id="faqAccordion">
                <!-- Accordion Item -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            Conference
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <div class="accordion" id="faqAccordion1">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwoS">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseThreeS" aria-expanded="false"
                                            aria-controls="collapseTwoS">
                                            1. Will I receive a certificate of participation?
                                        </button>
                                    </h2>
                                    <div id="collapseThreeS" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwoS" data-bs-parent="#faqAccordion1">
                                        <div class="accordion-body">
                                            Yes, all participants will receive a certificate of participation upon
                                            attending the conference.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwoF">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapsefourF" aria-expanded="false"
                                            aria-controls="collapseTwoF">
                                            2. What is the deadline for registration?
                                        </button>
                                    </h2>
                                    <div id="collapsefourF" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwoF" data-bs-parent="#faqAccordion1">
                                        <div class="accordion-body">
                                            As seats are limited, all applications will undergo a brief screening process.
                                            We strongly encourage early registration to secure your spot. Deadline for
                                            registration is 10th July 2025.
                                            If you are applying from abroad with a non-Bangladeshi passport, we recommend
                                            early submission to allow sufficient time for visa processing and travel
                                            arrangements.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwoF">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapsefourG" aria-expanded="false"
                                            aria-controls="collapseTwoF">
                                            3. What kind of support will BRAC provide?
                                        </button>
                                    </h2>
                                    <div id="collapsefourG" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwoF" data-bs-parent="#faqAccordion1">
                                        <div class="accordion-body">
                                            BRAC is pleased to offer a range of logistical support options. Each
                                            participation package includes different levels of support. Please refer to the
                                            participation packages under the ‘Apply Now’ section for detailed
                                            information.<br />
                                            Additionally, all registered participants will receive an official invitation
                                            letter from BRAC to assist with visa applications.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwoF">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapsefourH" aria-expanded="false"
                                            aria-controls="collapseTwoF">
                                            4. Will BRAC assist with the visa application process?
                                        </button>
                                    </h2>
                                    <div id="collapsefourH" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwoF" data-bs-parent="#faqAccordion1">
                                        <div class="accordion-body">
                                            BRAC will not directly intervene in visa processing. However, we will provide an
                                            official invitation letter to support your visa application upon request.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwoF">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapsefourI" aria-expanded="false"
                                            aria-controls="collapseTwoF">
                                            5. What documents should I prepare for a smooth visa application process?
                                        </button>
                                    </h2>
                                    <div id="collapsefourI" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwoF" data-bs-parent="#faqAccordion1">
                                        <div class="accordion-body">
                                            As advised by BRAC’s visa and protocol team, the following documents are
                                            recommended when applying for a visit visa:
                                            <ul>
                                                <li>● Official invitation letter from BRAC </li>
                                                <li> ● Photocopy of your passport</li>
                                                <li>● Return flight ticket </li>
                                                <li>● Hotel reservation confirmation </li>
                                                <li> ● Proof of funds (e.g., a valid credit card)</li>
                                                <li> ● USD 52 in cash for visa fee (as per embassy requirements).</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwoF">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapsefourJ"
                                            aria-expanded="false" aria-controls="collapseTwoF">
                                            6. What is the emergency contact information during the conference?
                                        </button>
                                    </h2>
                                    <div id="collapsefourJ" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwoF" data-bs-parent="#faqAccordion1">
                                        <div class="accordion-body">
                                            For any inquiries or emergencies, please contact us at: <br />
                                            📧 Email: frugalinnovation@brac.net <br />
                                            📞 Phone: +880-1332550461
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwoF">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapsefourk"
                                            aria-expanded="false" aria-controls="collapseTwoF">
                                            7. Is the registration fee refundable if I can not attend?
                                        </button>
                                    </h2>
                                    <div id="collapsefourk" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwoF" data-bs-parent="#faqAccordion1">
                                        <div class="accordion-body">
                                            Unfortunately, the registration fee is non-refundable in the event of
                                            cancellation. We appreciate your understanding, as this policy aligns with
                                            Bangladeshi banking regulations.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwoF">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapsefourL"
                                            aria-expanded="false" aria-controls="collapseTwoF">
                                            8. Can I transfer my registration to someone else if I cannot attend?
                                        </button>
                                    </h2>
                                    <div id="collapsefourL" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwoF" data-bs-parent="#faqAccordion1">
                                        <div class="accordion-body">
                                            Yes, you may transfer your registration to another individual. Please notify us
                                            in advance to ensure a smooth transition.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwoF">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapsefourM"
                                            aria-expanded="false" aria-controls="collapseTwoF">
                                            9. Can I pay the registration fee on-site at the conference?
                                        </button>
                                    </h2>
                                    <div id="collapsefourM" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwoF" data-bs-parent="#faqAccordion1">
                                        <div class="accordion-body">
                                            No, on-site payments will not be accepted. All participation fees must be paid
                                            in advance to confirm your registration and facilitate planning.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwoF">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapsefourN"
                                            aria-expanded="false" aria-controls="collapseTwoF">
                                            10. What are the recommended check-in and check-out times for travel planning?
                                        </button>
                                    </h2>
                                    <div id="collapsefourN" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwoF" data-bs-parent="#faqAccordion1">
                                        <div class="accordion-body">
                                            To ensure you don’t miss any part of the event, we recommend arriving by the
                                            afternoon of 24th July 2025 if you are attending the forum only. Detailed agenda
                                            and accommodations information will be shared with confirmed participants.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwoF">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapsefourO"
                                            aria-expanded="false" aria-controls="collapseTwoF">
                                            11. Will medical support be available during the conference?
                                        </button>
                                    </h2>
                                    <div id="collapsefourO" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwoF" data-bs-parent="#faqAccordion1">
                                        <div class="accordion-body">
                                            Basic medical support, including access to an on-call doctor and emergency
                                            transportation, will be available throughout the conference to ensure
                                            participants' health and safety.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Duplicate this block for more items -->
                <!-- Field Visit Accordion Item -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFieldVisit">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFieldVisit" aria-expanded="false"
                            aria-controls="collapseFieldVisit">
                            Field Visit
                        </button>
                    </h2>
                    <div id="collapseFieldVisit" class="accordion-collapse collapse" aria-labelledby="headingFieldVisit"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <div class="accordion" id="faqAccordionFieldVisit">
                                <!-- Question 1 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFV1">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFV1" aria-expanded="false"
                                            aria-controls="collapseFV1">
                                            1. What is included in the participation fee for the field visit?
                                        </button>
                                    </h2>
                                    <div id="collapseFV1" class="accordion-collapse collapse"
                                        aria-labelledby="headingFV1" data-bs-parent="#faqAccordionFieldVisit">
                                        <div class="accordion-body">
                                            BRAC is pleased to offer a range of logistical support options. Each
                                            participation
                                            package includes different levels of support. Please refer to the participation
                                            packages
                                            under the ‘Apply Now’ section for detailed information.
                                            Additionally, all registered participants will receive an official invitation
                                            letter from BRAC
                                            to assist with visa applications.

                                        </div>
                                    </div>
                                </div>

                                <!-- Question 2 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFV2">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFV2" aria-expanded="false"
                                            aria-controls="collapseFV2">
                                            2. When should I arrive if I am attending the field visit?

                                        </button>
                                    </h2>
                                    <div id="collapseFV2" class="accordion-collapse collapse"
                                        aria-labelledby="headingFV2" data-bs-parent="#faqAccordionFieldVisit">
                                        <div class="accordion-body">
                                            If you are participating in the field visit, please plan to arrive in Dhaka by
                                            22nd July 2025
                                            to ensure timely departure and full engagement in scheduled activities. Detailed
                                            agenda
                                            and accommodations information will be shared with confirmed participants.
                                        </div>
                                    </div>
                                </div>

                                <!-- Question 3 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFV3">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFV3" aria-expanded="false"
                                            aria-controls="collapseFV3">
                                            3. Will medical support be available during the field visit?
                                        </button>
                                    </h2>
                                    <div id="collapseFV3" class="accordion-collapse collapse"
                                        aria-labelledby="headingFV3" data-bs-parent="#faqAccordionFieldVisit">
                                        <div class="accordion-body">
                                            Yes, basic medical support will be available throughout the field visit to
                                            ensure the safety
                                            and well-being of all participants.
                                        </div>
                                    </div>
                                </div>

                                <!-- Question 4 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFV4">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFV4" aria-expanded="false"
                                            aria-controls="collapseFV4">
                                            4. Will I receive security guidance during my visit?
                                        </button>
                                    </h2>
                                    <div id="collapseFV4" class="accordion-collapse collapse"
                                        aria-labelledby="headingFV4" data-bs-parent="#faqAccordionFieldVisit">
                                        <div class="accordion-body">
                                            Yes. BRAC will provide local security guidance to all participants prior to
                                            arrival. This will
                                            help you stay informed and safe during your visit.

                                        </div>
                                    </div>
                                </div>

                                <!-- Question 5 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFV5">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFV5" aria-expanded="false"
                                            aria-controls="collapseFV5">
                                            5. Is the field visit accessible for individuals with disabilities?

                                        </button>
                                    </h2>
                                    <div id="collapseFV5" class="accordion-collapse collapse"
                                        aria-labelledby="headingFV5" data-bs-parent="#faqAccordionFieldVisit">
                                        <div class="accordion-body">
                                            Yes, BRAC is committed to ensuring the field visit is inclusive and accessible
                                            to all
                                            participants. If you have any specific accessibility needs, please inform us in
                                            advance so
                                            appropriate arrangements can be made.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Exhibition Accordion Item -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingExhibition">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseExhibition" aria-expanded="false"
                                aria-controls="collapseExhibition">
                            Exhibition
                        </button>
                    </h2>
                    <div id="collapseExhibition" class="accordion-collapse collapse" aria-labelledby="headingExhibition"
                         data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            <div class="accordion" id="faqAccordionExhibition">
                                <!-- Question 1 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFV1">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseEV1" aria-expanded="false"
                                                aria-controls="collapseFV1">
                                            1. What are the benefits of exhibiting at FIF 2025?
                                        </button>
                                    </h2>
                                    <div id="collapseEV1" class="accordion-collapse collapse"
                                         aria-labelledby="headingFV1" data-bs-parent="#faqAccordionExhibition">
                                        <div class="accordion-body">
                                            Exhibitors will gain national and international visibility, connect with donors and
                                            policymakers, explore opportunities for collaboration and scaling, and participate in
                                            cross-sector peer learning.
                                        </div>
                                    </div>
                                </div>

                                <!-- Question 2 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFV2">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseFV2" aria-expanded="false"
                                                aria-controls="collapseFV2">
                                            2. What logistical support will be provided in the exhibition booth?

                                        </button>
                                    </h2>
                                    <div id="collapseFV2" class="accordion-collapse collapse"
                                         aria-labelledby="headingFV2" data-bs-parent="#faqAccordionFieldVisit">
                                        <div class="accordion-body">
                                            Each booth will be equipped with basic logistics, including electricity, internet access,
                                            and a standard booth structure. Please note that custom materials, printing, and staffing
                                            are not included.
                                        </div>
                                    </div>
                                </div>

                                <!-- Question 3 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFV3">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseFV3" aria-expanded="false"
                                                aria-controls="collapseFV3">
                                            3. Will assistance be available for booth setup?
                                        </button>
                                    </h2>
                                    <div id="collapseFV3" class="accordion-collapse collapse"
                                         aria-labelledby="headingFV3" data-bs-parent="#faqAccordionFieldVisit">
                                        <div class="accordion-body">
                                            Limited support will be available for booth setup. However, each exhibiting team is
                                            responsible for arranging and managing its own setup and display materials.
                                        </div>
                                    </div>
                                </div>

                                <!-- Question 4 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFV4">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseFV4" aria-expanded="false"
                                                aria-controls="collapseFV4">
                                            4. Can I request additional equipment or support for my booth?
                                        </button>
                                    </h2>
                                    <div id="collapseFV4" class="accordion-collapse collapse"
                                         aria-labelledby="headingFV4" data-bs-parent="#faqAccordionFieldVisit">
                                        <div class="accordion-body">
                                            Yes. Any specific requirements should be clearly stated in the Exhibitor Application
                                            Form. <mark>Please note that BRAC will not provide custom materials, printing, or staffing for
                                            the exhibition booth<mark>.

                                        </div>
                                    </div>
                                </div>

                                <!-- Question 5 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFV5">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseFV5" aria-expanded="false"
                                                aria-controls="collapseFV5">
                                            5. What kind of materials are recommended for display?

                                        </button>
                                    </h2>
                                    <div id="collapseFV5" class="accordion-collapse collapse"
                                         aria-labelledby="headingFV5" data-bs-parent="#faqAccordionFieldVisit">
                                        <div class="accordion-body">
                                            We encourage the use of eco-friendly, recyclable, and climate-conscious materials for
                                            all display elements. Please refer to the <a style="color: #F99B1C" target="_blank" href="https://innovation.brac.net/fif2025/frontend/Overview_FIF_2025_Exhibitor_Guide.pdf">Exhibitor Guide</a> for more information.

                                        </div>
                                    </div>
                                </div>
                                <!-- Question 6 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFV6">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseFV6" aria-expanded="false"
                                                aria-controls="collapseFV6">
                                            6. Can we use digital displays or videos?

                                        </button>
                                    </h2>
                                    <div id="collapseFV6" class="accordion-collapse collapse"
                                         aria-labelledby="headingFV6" data-bs-parent="#faqAccordionFieldVisit">
                                        <div class="accordion-body">
                                            Yes. Exhibitors are welcome to incorporate digital elements such as videos, tablets, or
                                            other multimedia tools. Please ensure that all devices are self-sufficient, or indicate your
                                            power requirements in advance.

                                        </div>
                                    </div>
                                </div>
                                <!-- Question 7 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFV7">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseFV7" aria-expanded="false"
                                                aria-controls="collapseFV7">
                                            7. Are there any restrictions on what can be displayed?

                                        </button>
                                    </h2>
                                    <div id="collapseFV7" class="accordion-collapse collapse"
                                         aria-labelledby="headingFV7" data-bs-parent="#faqAccordionFieldVisit">
                                        <div class="accordion-body">
                                            Yes. All content must be respectful, non-political, and aligned with BRAC’s values and
                                            the forum’s theme. Promotional, offensive, or inappropriate content is not permitted.
                                        </div>
                                    </div>
                                </div>
                                <!-- Question 8 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFV8">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseFV8" aria-expanded="false"
                                                aria-controls="collapseFV8">
                                            8. What are the preferred modes of exhibition?

                                        </button>
                                    </h2>
                                    <div id="collapseFV8" class="accordion-collapse collapse"
                                         aria-labelledby="headingFV8" data-bs-parent="#faqAccordionFieldVisit">
                                        <div class="accordion-body">
                                            The exhibition encourages innovative and experiential formats to foster an interactive,
                                            immersive, and accessible environment. For inspiration and ideas, please review the
                                            Exhibit Details.
                                        </div>
                                    </div>
                                </div>
                                <!-- Question 9 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFV9">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseFV9" aria-expanded="false"
                                                aria-controls="collapseFV9">
                                            9. Can colleagues who are not registered exhibitors visit the exhibition?

                                        </button>
                                    </h2>
                                    <div id="collapseFV9" class="accordion-collapse collapse"
                                         aria-labelledby="headingFV9" data-bs-parent="#faqAccordionFieldVisit">
                                        <div class="accordion-body">
                                            Yes. Colleagues may visit the exhibition area; however, they must be registered as
                                            forum participants to access the venue.
                                        </div>
                                    </div>
                                </div>
                                <!-- Question 10 -->
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingFV10">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseFV10" aria-expanded="false"
                                                aria-controls="collapseFV10">
                                            10. Can I attend the forum if I register as an exhibitor?

                                        </button>
                                    </h2>
                                    <div id="collapseFV10" class="accordion-collapse collapse"
                                         aria-labelledby="headingFV10" data-bs-parent="#faqAccordionFieldVisit">
                                        <div class="accordion-body">
                                            Yes. Registered exhibitors are permitted to attend the main forum sessions, provided
                                            that their exhibition booth remains adequately staffed. Access to the forum is subject to
                                            crowd management considerations, particularly when foot traffic in the exhibition area is
                                            light.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




                <!-- Add more items as needed -->
                <div class="accordion-item d-none">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseTwo">
                            How can I register to attend the Frugal Innovation Forum?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            How can I register to attend the Frugal Innovation Forum?
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>






@endsection
