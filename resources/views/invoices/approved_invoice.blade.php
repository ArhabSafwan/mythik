<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Invoice</title>
    <style>
        body {
            font-family: DejaVu Sans, sans-serif;
            font-size: 12px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th,
        td {
            border: 1px solid #000000;
            padding: 8px;
            text-align: left;
        }

        .header,
        .footer {
            text-align: center;
        }

        .no-border {
            border: none !important;
        }

        .right {
            text-align: right;
        }

        .bold {
            font-weight: bold;
        }

        .background-green {
            background-color: #0b6d65;
            color: #D5E03A;
        }
    </style>
</head>

<body>
    <div class="header">

    </div>
    <table class="no-border">
        <tr>
            <td class="no-border">
                <img src="{{ public_path('frontend/img/logo_white.png') }}" alt="Logo" width="120"><br>

            </td>
            <td class="no-border right">
                <h2>{{ $categoryType }}</h2>
                <p><strong>Invoice #:</strong> {{ $data->order_id }}<br>
                    <strong>Invoice Date:</strong> {{ $invoiceDate }}
                </p>
            </td>
        </tr>
    </table>

    <table class="no-border">
        <tr>
            <td class="no-border">
                <strong>BRAC Centre</strong><br>
                75 Mohakhali, Dhaka-1212<br>
                P: +880-1332550461<br>
                frugalinnovation@brac.net
            </td>
            <td class="no-border right">
                <strong>Bill To:</strong><br>
                {{ $data->full_name }}<br>
                {{-- Farmer Lifeline Technologies<br>
                Kenya<br> --}}
                Phone: {{ $data->phone ?? 'N/A' }}<br>
                Email: {{ $data->email }}
            </td>
        </tr>
    </table>

    <table>
        <thead>
            <tr class="background-green">
                <th>Serial</th>
                <th>Description</th>
                <th>Unit Price</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>{{ $categoryType }}</td>
                <td>{{ $data->main_currency }} {{ $data->main_amount }}</td>
                <td>1</td>
                <td>{{ $data->main_currency }} {{ $data->main_amount }}</td>
            </tr>
        </tbody>
        @php
            $currency = $data->main_currency;
            $currencyLabel = $currency === 'USD' ? 'US Dollar (USD)' : 'Bangladeshi Taka (BDT)';
        @endphp
        <tfoot>
            <tr>
                <td colspan="3" class="left bold">In words: {{ $inWords }} {{ $currencyLabel }}</td>
                <td>
                    <p class="right bold">TOTAL:</p>
                </td>
                <td>{{ $currency }} {{ $data->main_amount }}</td>
            </tr>
        </tfoot>
    </table>

    <p><strong>Notes:</strong><br>
        1. This invoice serves as an official receipt of payment<br>
        2. No refunds will be issued after confirmation.<br>
        3. For any queries, contact us at helpdesk.fif25@gmail.com or WhatsApp +880-1332550461</p>

    <div class="footer">
        <p><strong>Thanks for participating in FIF 2025.<br>
                <span style="color: #0b6d65"> Adaptation from the South. For the World.</span></strong></p>
    </div>
</body>

</html>
