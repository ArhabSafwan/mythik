<!-- START: Footer Section -->
<footer class="footer-wrapper">
    <!-- Contact Info -->
    {{-- <section class="contact-info">
    <div class="container">
      <div class="row gy-4">
        <div class="col-md-6">
          <div class="row">
            <div class="col-md-12">
              <h6 class="contact-info-text">Contact Info</h6>
              <h4 class="contact-info-description">
                We are always happy to  assist you
              </h4>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="row ">
            <div class="col-md-12">
                     <div class="email-details mb-4">
                <p class="email-text">Email Address</p>
                <p class="email-address">
                  <a href="mailto:frugalinnovation@brac.net" style=" color: #000000 !important;
    font-size: 16px;
    line-height: auto;
    font-weight: 400;">frugalinnovation@brac.net</a>
                </p>

            </div>
            <div class="website">
                <p class="visit-text">Visit Website</p>
                <p class="visit-url">
        <a href="https://www.brac.net" target="_blank" rel="noopener noreferrer" style=" color: #000000 !important;
    font-size: 16px;
    line-height: auto;
    font-weight: 400;">www.brac.net</a>
    </p>
            </div>
            </div>
          </div>

        </div>
        <div class="col-md-3">
          <div class="row ">
              <div class="col-md-12">
                    <div class="phone mb-4">
            <p class="phone-text">Phone Number</p>
            <p class="phone-number">
              <a href="tel:+8801332550461" style=" color: #000000 !important;font-size: 16px;line-height: auto;font-weight: 400;">+880-1332550461</a>
            </p>
          </div>

           <div class="d-flex gap-5 fs-5 socail">
            <a href="https://www.facebook.com/FIForum/" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/bracworld/" target="_blank"><i class="fab fa-instagram"></i></a>
            <a href="https://www.linkedin.com/company/frugal-innovation-forum/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
            <a href="https://www.youtube.com/c/BRACWorld" target="_blank"><i class="fab fa-youtube"></i></a>
          </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}
    <div class="newsletter-footer-wrapper position-relative">
        <!-- Newsletter Section -->
        <section class="newsletter-section text-white justify-content-center">
            <span class="leaf">
                <svg width="292" height="485" viewBox="0 0 292 485" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <mask id="mask0_4_647" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="123" y="-1"
                        width="310" height="486">
                        <path
                            d="M123.227 484.641C123.227 484.641 438.291 348.461 432.523 -0.000283281C113.995 141.651 123.227 484.641 123.227 484.641Z"
                            fill="#C7C7C7" fill-opacity="0.3" />
                    </mask>
                    <g mask="url(#mask0_4_647)">
                        <rect x="-243" y="165" width="540" height="388" fill="#D9D9D9" />
                    </g>
                </svg>
            </span>
            <div class="container text-center">
                <h5 class="mb-4 newsletter-heading">Stay informed - subscribe to our newsletter</h5>
                <style>
                    .text-danger {
                        color: #F99B1C !important;
                    }
                </style>
                <form id="newsletterForm" class="d-flex justify-content-center flex-wrap">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="email" name="email" id="newsletter-email" placeholder="Enter your email"
                            class="form-control newsletter-input" required />
                        <button type="submit" class="btn btn-dark newsletter-button">Subscribe</button>
                    </div>
                </form>
                <p id="newsletterError" class="text-danger text-center mt-2"></p>
            </div>
        </section>


        <div class="scroll-top position-absolute top-o start-50 translate-middle" data-target="html">
            <div class="scroll-btn bg-white  rounded-circle d-flex justify-content-center align-items-center">
                <i class="fas fa-chevron-up text-dark"></i>
            </div>
        </div>

        <!-- Footer Main -->
        <section class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h4 style="font-size: 19px;margin-bottom: 5px;">An initiative by</h4>
                        <img src="{{ asset('/') }}frontend/img/Rectangle 5186.png" alt="BRAC Logo" height="68px"
                            class="img-fluid">
                        <p class="small contact-information">
                            <span class="address">BRAC Centre, 75 Mohakhali, Dhaka-1212.</span><br>
                            <span class="contact">
                                Tel: <a href="tel:+8801332550461"
                                    class="text-decoration-underline conteact-url">+8801332550461</a></br>
                                Email: <a href="mailto:frugalinnovation@brac.net"
                                    class="text-decoration-underline conteact-url">frugalinnovation@brac.net</a>
                            </span>
                        </p>
                        <div class="d-flex gap-3 fs-5 mt-1">
                            <a href="https://www.facebook.com/FIForum" class="text-white" target="_blank"><i
                                    class="fab fa-facebook"></i></a>
                            <a href="https://www.instagram.com/innovate_frugal" class="text-white" target="_blank"><i
                                    class="fab fa-instagram"></i></a>
                            <a href="https://x.com/innovate_frugal" target="_blank" style="">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16"
                                    height="16" fill="#ffffff" style="vertical-align: middle;">
                                    <path
                                        d="M14.7 10.1L23 0h-2.1l-7.2 8.5L7.7 0H0l8.8 12.6L0 24h2.1l7.6-9 6.4 9H24l-9.3-13.9zM3.5 1.7h3.2l13.8 20.6h-3.2L3.5 1.7z" />
                                </svg>
                            </a>
                            <a href="https://www.youtube.com/c/BRACWorld" class="text-white" target="_blank"><i
                                    class="fab fa-youtube"></i></a>

                            <a href="https://www.linkedin.com/company/frugal-innovation-forum/" class="text-white" target="_blank"><i
                                    class="fab fa-linkedin"></i></a>

                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <a href="{{ route('home') }}"> <img src="{{ asset('/') }}frontend/img/Group 18470.png"
                                alt="Frugal Innovation Forum" class="img-fluid"></a>
                    </div>
                    <div class="col-md-3 text-md-start external-url">
                        <ul class="list-unstyled small">
                            <li><a href="https://www.brac.net/privacy-policy/" target="_blank" class="text-decoration-none external-url-url">Privacy Policy</a></li>
                            <li><a href="https://www.brac.net/terms-of-use/" target="_blank" class="text-decoration-none">Terms of Use</a></li>
                            {{-- <li><a href="#" class="text-decoration-none">Copyright</a></li> --}}
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Bottom Bar -->
    <section class="footer-bottom  text-center py-2">
        &copy; 2025 <strong>BRAC</strong>. All rights reserved.
    </section>
</footer>
<!--End Main Footer -->
@push('script')
    <script>
        $('#newsletterForm').on('submit', function(e) {
            e.preventDefault();

            $('#newsletter-email').removeClass('is-invalid');
            $('#newsletterError').text('');

            const form = $(this);
            const formData = form.serialize();

            $.ajax({
                url: "{{ route('newsletter.subscribe') }}",
                method: "POST",
                data: formData,
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                success: function(response) {
                    $('#newsletterForm')[0].reset();

                    Swal.fire({
                        icon: 'success',
                        title: 'Thank you for subscribing to Innovation!',
                        text: response.message ??
                            'You’ve successfully subscribed to our newsletter.',
                        confirmButtonText: 'Close',
                        customClass: {
                            confirmButton: 'btn btn-success'
                        },
                        buttonsStyling: false
                    });
                },
                error: function(xhr) {
                    if (xhr.status === 422) {
                        const errors = xhr.responseJSON.errors;
                        if (errors.email) {
                            $('#newsletter-email').addClass('is-invalid');
                            $('#newsletterError').text(errors.email[0]);
                        }
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops!',
                            text: 'Something went wrong. Please try again later.',
                            confirmButtonText: 'Close',
                            customClass: {
                                confirmButton: 'btn btn-danger'
                            },
                            buttonsStyling: false
                        });
                    }
                }
            });
        });
    </script>
@endpush
