<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Frugal Innovation Forum 2025 – Payment Confirmed & Participation Secured</title>
</head>

<body>

    <div class="container">
        <p> Dear {{ $data->full_name }},</p>
        <p>
            We are pleased to confirm receipt of your payment and your successful registration for the Frugal Innovation
            Forum 2025.
        </p>

        <p>
            Please find your official invitation card and programme instructions attached. Kindly keep a digital or
            printed copy of the invitation card for travel and event access purposes.
        </p>
        <p>
            Help us spread the word — share that you're joining FIF 2025 on your social media and tag Frugal Innovation
            Forum in your post! (<a href="https://www.facebook.com/FIForum" target="_blank">Facebook</a>, <a
                href="https://www.linkedin.com/company/frugal-innovation-forum/" target="_blank">LinkedIn</a>, <a
                href="https://x.com/innovate_frugal" target="_blank">X</a>, <a
                href="https://www.instagram.com/innovate_frugal" target="_blank">Instagram</a>) Feel free to use the sample
            below to get started:
        </p>

        <p>
            “Excited to join #FIF2025 — an international forum for bold, frugal solutions to climate issues. See you in
            July!”
        </p>

        <p> Should you have any immediate queries or support needs, please feel free to reach out to us at </br>
            <a href="mailto:frugalinnovation@brac.net"
                style="font-weight: medium; font-size: 13px; color: #007160;">frugalinnovation@brac.net</a>or drop a
            text
            at <a href="https://wa.me/8801332550461" target="_blank"
                style="font-size: 13px; font-weight: 500; color: #007160;">+880-1332550461 on WhatsApp.</a>
        </p>

        <p>We look forward to welcoming you.</p>
        <p>Warm regards,<br>
            <span class="highlight">Organising Team,</span><br>
            Frugal Innovation Forum, BRAC
        </p>

        <div class="social-icons" style="margin-top: 20px;">
            <!-- YouTube -->
            <a href="https://www.youtube.com/@BRACworld" target="_blank" style="display: inline-block; margin-right: 20px; line-height: 0; font-size: 0;">
                <img src="{{ $message->embed(public_path('frontend/img/email_images/youtube.png')) }}" alt="YouTube"
                    width="20" height="20" style="vertical-align: middle;">
            </a>
            <!-- LinkedIn -->
            <a href="https://www.linkedin.com/company/frugal-innovation-forum/" target="_blank" style="display: inline-block; margin-right: 20px; line-height: 0; font-size: 0;">
                <img src="{{ $message->embed(public_path('frontend/img/email_images/linkedin.png')) }}" alt="LinkedIn"
                    width="20" height="20" style="vertical-align: middle;">
            </a>

            <!-- Twitter (X) -->
            <a href="https://x.com/innovate_frugal" target="_blank"
                style="display: inline-block; margin-right: 20px; line-height: 0; font-size: 0;">
                <img src="{{ $message->embed(public_path('frontend/img/email_images/twitter.png')) }}" alt="Twitter X"
                    width="20" height="20" style="vertical-align: middle;">
            </a>

            <!-- Instagram -->
            <a href="https://www.instagram.com/innovate_frugal" target="_blank" style="display: inline-block; margin-right: 20px; line-height: 0; font-size: 0;">
                <img src="{{ $message->embed(public_path('frontend/img/email_images/instagram.png')) }}" alt="Instagram"
                    width="20" height="20" style="vertical-align: middle;">
            </a>

            <!-- Facebook -->
            <a href="https://www.facebook.com/FIForum" target="_blank" style="display: inline-block; margin-right: 20px; line-height: 0; font-size: 0;">
                <img src="{{ $message->embed(public_path('frontend/img/email_images/facebook.png')) }}" alt="Facebook"
                    width="20" height="20" style="vertical-align: middle;">
            </a>
        </div>
        <div class="contact" style="margin-top: 20px;">
            <a href="https://wa.me/8801332550461" target="_blank" style="text-decoration: none; color: #000;">
                <img src="{{ $message->embed(public_path('frontend/img/email_images/whatsapp.png')) }}" alt="WhatsApp"
                    width="20" height="20" style="vertical-align: middle;">
                : +880-1332550461
            </a>
        </div>
        <div class="logo" style="margin-top: 20px;">
            <img src="{{ $message->embed(public_path('frontend/img/email_images/email_logo.png')) }}"
                alt="Frugal Innovation Forum" width="120">
        </div>
    </div>
</body>

</html>
