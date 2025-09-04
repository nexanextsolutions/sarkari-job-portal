<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Success</title>
    <style>
        body {
            text-align: center;
            padding: 40px 0;
            background: #EBF0F5;
        }

        h1 {
            color: #88B04B;
            font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
            font-weight: 900;
            font-size: 40px;
            margin-bottom: 10px;
        }

        p {
            color: #404F5E;
            font-family: "Nunito Sans", "Helvetica Neue", sans-serif;
            font-size: 20px;
            margin: 0;
        }

        i {
            color: #9ABC66;
            font-size: 100px;
            line-height: 200px;
            margin-left: -15px;
        }

        .card {
            background: white;
            padding: 60px;
            border-radius: 4px;
            box-shadow: 0 2px 3px #C8D0D8;
            display: inline-block;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="card">
        <div style="border-radius:200px; height:200px; width:200px; background: #F8FAF5; margin:0 auto;">
            <i class="checkmark">✓</i>
        </div>
        <h1>Make Payment</h1>
        <p>Data Submitted! <br />Please Make Payment.</p>
        <button id="rzp-button1" hidden>Pay</button>
        <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
        <script>
            var options = {
                "key": "{{$response['key_id']}}", // Enter the Key ID generated from the Dashboard
                "amount": "{{$response['amount']}}", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
                "currency": "INR",
                "name": "Applying For Job",
                "description": "{{$response['description']}}",
                "order_id": "{{$response['orderId']}}", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
                "handler": function(response) {
                    window.location.href = "/success";
                    // document.getElementById('rzp_paymentid').value = response.razorpay_payment_id;
                    // document.getElementById('razorpay_order_id').value = response.razorpay_order_id;
                    // document.getElementById('razorpay_signature').value = response.razorpay_signature;
                    // document.getElementById('rzp-paymentresponse').click();
                },
                "prefill": {
                    "name": "{{$response['name']}}",
                    "email": "{{$response['email']}}",
                    "contact": "{{$response['contactNumber']}}"
                },
                "notes": {
                    "address": "{{$response['address']}}"
                },
                "theme": {
                    "color": "#F37254"
                }
            };
            var rzp1 = new Razorpay(options);
            window.onload = function(){
                document.getElementById('rzp-button1').click();
            };
            document.getElementById('rzp-button1').onclick = function(e) {
                rzp1.open();
                e.preventDefault();
            }
        </script>
    </div>

<form action="{{ route('pay-successful') }}" hidden method="POST" hidden>
            <input type="hidden" value="{{ csrf_token() }}" name="_token" />
            <input type="text" class="form_control" id="razorpay_payment_id" name="razorpay_payment_id" />
            <input type="text" class="form_control" id="razorpay_order_id" name="razorpay_order_id" />
            <input type="text" class="form_control" id="razorpay_signature" name="razorpay_signature" />
            <button type="submit" id="rzp-paymentresponse" class="btn btn-primary">Submit</button>
</form>

</body>
</html>
<!-- data-key="rzp_live_pHGV1YwA99xzpf" -->