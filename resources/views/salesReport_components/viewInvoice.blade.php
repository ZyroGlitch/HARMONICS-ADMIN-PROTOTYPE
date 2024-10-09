<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Invoice</title>

    <style>
        html,
        body {
            margin: 10px;
            padding: 10px;
            font-family: sans-serif;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p,
        span,
        label {
            font-family: sans-serif;
            font-weight: bold;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 0px !important;
        }

        table thead th {
            height: 28px;
            text-align: left;
            font-size: 16px;
            font-family: sans-serif;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            font-size: 14px;
        }

        .heading {
            font-size: 24px;
            margin-top: 12px;
            margin-bottom: 12px;
            font-family: sans-serif;
        }

        .small-heading {
            font-size: 18px;
            font-family: sans-serif;
        }

        .total-heading {
            font-size: 18px;
            font-weight: 700;
            font-family: sans-serif;
        }

        .order-details tbody tr td:nth-child(1) {
            width: 20%;
        }

        .order-details tbody tr td:nth-child(3) {
            width: 20%;
        }

        .text-start {
            text-align: left;
        }

        .text-end {
            text-align: right;
        }

        .text-center {
            text-align: center;
        }

        .company-data span {
            margin-bottom: 4px;
            display: inline-block;
            font-family: sans-serif;
            font-size: 14px;
            font-weight: 400;
        }

        .no-border {
            border: 1px solid #fff !important;
        }

        .bg-blue {
            background-color: #414ab1;
            color: white;
            width: 200px;
            border-radius: 15px;
            box-shadow:
        }
    </style>
</head>

<body>
    <table class="order-details">
        <thead>
            <tr>
                <th width="50%" colspan="2">
                    <h2 class="text-start">Harmonics</h2>
                </th>
                <th width="50%" colspan="2" class="text-end company-data">
                    <span style="font-weight:bold;">Invoice Id: #112</span> <br>
                    <span style="font-weight:bold;">Date: 10 / 09 / 2024</span> <br>
                    <span style="font-weight:bold;">Address: Gravahan Matina Davao City</span>
                    <br>
                </th>
            </tr>
            <tr class="bg-blue">
                <th width="50%" colspan="2">Order Details</th>
                <th width="50%" colspan="2">User Details</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="font-weight:bold;">Tracking Id/No :</td>
                <td>ZAB22-BIE32</td>

                <td style="font-weight:bold;">Full Name :</td>
                <td>John Ford Buliag</td>
            </tr>
            <tr>
                <td style="font-weight:bold;">Ordered Date :</td>
                <td>10-09-2024 10:54 AM</td>

                <td style="font-weight:bold;">Email Id :</td>
                <td>john@gmail.com</td>
            </tr>
            <tr>
                <td style="font-weight:bold;">Payment Mode :</td>
                <td>Cash on Delivery</td>

                <td style="font-weight:bold;">Phone :</td>
                <td>09615607681</td>
            </tr>
            <tr>
                <td style="font-weight:bold;">Order Status :</td>
                <td>Completed</td>

                <td style="font-weight:bold;">Address :</td>
                <td>Gravahan Matina Davao City</td>
            </tr>
        </tbody>
    </table>

    <table style="margin-top:1rem;">
        <thead>
            <tr>
                <th class="no-border text-start heading" colspan="5">
                    Order Items
                </th>
            </tr>
            <tr class="bg-blue">
                <th>ID</th>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td width="10%">1</td>
                <td>
                    Electric Guitar
                </td>
                <td width="20%">P7000</td>
                <td width="10%">2</td>
                <td width="20%" class="fw-bold">P14000</td>
            </tr>
            <tr>
                <td width="10%">2</td>
                <td>
                    Acoustic Guitar
                </td>
                <td width="20%">P3000</td>
                <td width="10%">2</td>
                <td width="20%" class="fw-bold">P6000</td>
            </tr>
            <tr>
                <td width="10%">3</td>
                <td>
                    Drum
                </td>
                <td width="20%">P10000</td>
                <td width="10%">2</td>
                <td width="20%" class="fw-bold">P20000</td>
            </tr>

            <tr>
                <td colspan="4" class="total-heading">Total Amount</td>
                <td colspan="1" class="total-heading">P40000</td>
            </tr>
        </tbody>
    </table>

    <br>
    <p class="text-center" style="font-weight:bold;">
        Thank your for shopping with Harmonics.
    </p>

    {{-- <script>
        var download = document.getElementById('download');

        // Handle the button click
        download.addEventListener('click', function() {
            // Redirect to another Laravel route
            window.location.href = "{{ route('view.download') }}";
        });
    </script> --}}


</body>

</html>
