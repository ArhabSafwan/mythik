{{-- filepath: resources/views/frontend/pages/error/index.blade.php --}}
@extends('frontend.fif_main')
@section('ftitle', 'Error')
@section('fif_content')
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css"
        crossorigin="anonymous" />

    <style>
        .error-section {
            position: relative;
            text-align: center;
            padding: 100px 20px;
            min-height: 70vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #f8fafc 60%, #e6f4ea 100%);
        }

        .error-box {
            background: #fff;
            border-radius: 18px;
            box-shadow: 0 8px 40px 0 rgba(0, 113, 96, 0.10);
            padding: 3rem 2.5rem;
            text-align: center;
            max-width: 420px;
            width: 100%;
            position: relative;
            z-index: 2;
        }

        .error-icon {
            font-size: 4rem;
            color: #FFA100;
            margin-bottom: 1rem;
            display: inline-block;
        }


        .error-message {
            font-size: 1rem;
            color: #555;
            margin-bottom: 1.5rem;
        }

        .error-btn {
            background: #007160;
            color: #fff;
            border: none;
            border-radius: 6px;
            padding: 0.7rem 2rem;
            font-size: 1rem;
            font-weight: 600;
            text-decoration: none;
            display: inline-block;
            transition: background 0.2s ease-in-out;
        }

        .error-btn:hover {
            background: #F99B1C;
            color: #fff;
        }

        .error-leaf {
            position: absolute;
            right: -20px;
            top: -30px;
            width: 100px;
            opacity: 0.1;
            z-index: 0;
        }

        @media (max-width: 768px) {
            .error-section {
                padding: 80px 20px;
            }

            .error-box {
                padding: 2rem 1.5rem;
            }

            .error-title {
                font-size: 1.6rem;
            }

            .error-icon {
                font-size: 3rem;
            }

            .error-message {
                font-size: 0.95rem;
            }

            .error-leaf {
                width: 80px;
                top: -20px;
                right: -10px;
            }
        }

        @media (max-width: 480px) {
            .error-title {
                font-size: 1.4rem;
            }

            .error-btn {
                font-size: 0.95rem;
                padding: 0.6rem 1.5rem;
            }
        }
    </style>

    <section class="registration-progress countdown">
        <span class="leaf"></span>
        <div class="container">
            <div class="row w-100 justify-content-start content">
                <div class="col-lg-12 mb-4 mb-lg-0">
                    <h2 class="highlight">Error</h2>
                </div>
            </div>
        </div>
    </section>
    <section class="error-section">
        <img src="{{ asset('frontend/images/leaf1.svg') }}" class="error-leaf" alt="Leaf Decoration">
        <div class="error-box">
            <span class="mdi {{ $icon ?? 'mdi-alert-circle' }} error-icon"></span>
            <div style="color: #ec167f; font-size: 200%;"><strong>{{ $message }}</strong></div>
            <div class="error-message mt-2">
                {{ $details }}<br>
                If you need to update any information, please don’t hesitate to contact us.
            </div>
            <a href="{{ url('/') }}" class="error-btn">Back to Home</a>
        </div>
    </section>
@endsection
