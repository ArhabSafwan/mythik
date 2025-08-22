<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Frugal Innovation Forum 2025 Invitation</title>
    <style>
        body {
            font-family: 'Helvetica Neue', Helvetica, sans-serif;
            font-size: 15px;
            color: #000000;
            line-height: 1.1;
            margin: 0;
            padding: 0 30px;
        }

        .header {
            text-align: center;
            margin-bottom: 0;
        }

        .header img {
            height: 100px;
        }

        .header h2 {
            color: #007160;
            margin-top: 0;
        }

        .highlight {
            color: #007160;
            font-weight: bold;
        }

        .content {
            max-width: 700px;
            margin: 0 auto;
        }

        ul {
            padding-left: 45px;
        }

        ul li {
            margin-bottom: 0;
        }

        .footer {
            margin-top: 0;
        }

        .footer img.social-icon {
            height: 18px;
            margin-right: 5px;
        }

        .logo-footer {
            margin-top: 0;
            text-align: start;
        }

        .logo-footer img {
            height: 100px;
        }

        .justified {
            text-align: justify;
        }
    </style>
</head>

<body>
    <div class="content">


        <table class="no-border">
            <tr>
                <td class="no-border">
                    <img src="{{ public_path('frontend/img/email_images/email_logo.png') }}" alt="Logo"
                        width="100"><br>
                </td>
                <td class="no-border" style="padding-left: 20px;">
                    <h2 class="highlight">Adaptation from the South. For the World.</h2>
                </td>
            </tr>
        </table>

        <div class="justified">
            <p>Dear {{ $data->full_name }},</p>

            <p>Thank you for confirming your registration for the <strong class="highlight">Frugal Innovation Forum 2025
                    Field Visit</strong>.
                We are pleased to inform you that your participation has been successfully confirmed.</p>

            <p>On behalf of BRAC and the Frugal Innovation Forum Team, it is our pleasure to formally invite you to join
                us for an immersive field visit to the most vulnerable communities of <span class="highlight">Northern
                    Bangladesh</span>. These are
                communities living closest to the climate crisis of the dry regions, where adaptation is not a concept,
                but a daily act of survival..</p>

            <p>
                <span class="highlight">Event Details:</span><br>
                <strong>Date:</strong> 23rd and 24th July, 2025<br>
                <strong>Venue:</strong> Barind, Rajshahi, Bangladesh<br>
                <strong>Visit us:</strong> <a href="https://innovation.brac.net/fif2025">innovation.brac.net/fif2025</a>
            </p>

            <p class="highlight">Your Experience at a Glance:</p>
            <ul>
                <li>See the <span class="highlight">on-ground realities</span> up close. <span
                        class="highlight">Communicate with the frontlines</span> of the climate crisis.
                </li>
                <li><span class="highlight">Witness adaptation</span> efforts firsthand.</li>
                <li>Engage with the conversations at the forum driven by <span class="highlight">real stories</span> and
                    <span class="highlight">real insights</span>.</li>
            </ul>

            <p>In the coming weeks, we will share a detailed Participant Brief, including venue information, travel
                recommendations, and other logistical guidance to help you prepare for the event.</p>

            <p><span class="highlight">Please keep a digital or printed copy of your official invitation card with you
                    while
                    traveling. This may be required for immigration, airport transit, or verification purposes at
                    event entry points.</span></p>

            <p>We look forward to welcoming you.</p>
        </div>

        <p>Warm regards,</p>

        <p style="font-weight: bold;color: #333;">
            On behalf of BRAC Bangladesh<br>
            Organising Team,<br>
            Frugal Innovation Forum, BRAC<br>
        </p>

        <div class="footer">
            <a href="https://www.linkedin.com/company/frugal-innovation-forum/"><img class="social-icon"
                    src="{{ public_path('frontend/img/email_images/linkedin.png') }}" alt="LinkedIn"></a>
            <a href="https://www.youtube.com/@BRACworld"><img class="social-icon"
                    src="{{ public_path('frontend/img/email_images/youtube.png') }}" alt="LinkedIn"></a>
            <a href="https://x.com/innovate_frugal"><img class="social-icon"
                    src="{{ public_path('frontend/img/email_images/twitter.png') }}" alt="Twitter"></a>
            <a href="https://www.instagram.com/innovate_frugal"><img class="social-icon"
                    src="{{ public_path('frontend/img/email_images/instagram.png') }}" alt="Instagram"></a>
            <a href="https://www.facebook.com/FIForum"><img class="social-icon"
                    src="{{ public_path('frontend/img/email_images/facebook.png') }}" alt="Facebook"></a>
            <br>
            <div class="contact" style="margin-top: 5px;">
                <a href="https://wa.me/8801332550461" target="_blank" style="text-decoration: none; color: #333;">
                    <img class="social-icon" src="{{ public_path('frontend/img/email_images/whatsapp.png') }}"
                        alt="WhatsApp">
                    : +880-1332550461
                </a>
            </div>
        </div>

        <div class="logo-footer">
            <img src="{{ public_path('frontend/img/email_images/email_logo.png') }}" alt="Frugal Innovation Forum Logo">
        </div>
    </div>
</body>

</html>
