<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <title>{{ $subject }}</title>
    <style>
        .fab {
            font-weight: 400
        }

        .fa-x-twitter:before {
            content: "\e61b"
        }
    </style>
</head>

<body>

    <div class="container">
        <p> Dear {{ $data->full_name }},</p>
        <p>
            Thank you for applying to the <span><strong>Frugal Innovation Forum 2025</strong></span>.<br>
            We are pleased to inform you that your application has been <span><strong>approved</strong></span>.
        </p>

        <p>
            Please use the link below to complete your registration and initiate payment. The link will expire
            72 hours from the time of this notification:
        </p>
        <a href="{{ $paymentLink }}" target="_blank"
            style="display: inline-block; background-color: #007160; color: #ffffff; padding: 12px 24px;
          text-decoration: none; border-radius: 5px; font-size: 16px; font-weight: bold;
          font-family: Arial, sans-serif; margin: 20px 0; text-align: center;">
            Complete Registration & Payment
        </a>
        <p> Your participation will be confirmed once payment is received. We look forward to your
            engagement in this year’s forum.</p>
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
