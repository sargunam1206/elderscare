<!--<!DOCTYPE html>
<html>
<head>
    <title>Razorpay Payment</title>
</head>
<body>
    <form action="<?= base_url('verify'); ?>" method="POST">
        <script 
            src="https://checkout.razorpay.com/v1/checkout.js"
            data-key="<?= isset($key) ? $key : '' ?>"
            data-amount="<?= isset($amount) ? $amount : '' ?>"
            data-currency="INR"
            data-order_id="<?= isset($order_id) ? $order_id : '' ?>"
            data-buttontext="Pay Now"
            data-name="My Store"
            data-description="Test Transaction"
            data-theme.color="#F37254">
        </script>
    </form>
</body>
</html> -->

<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    var options = {
        "key": "<?= $key ?>",
        "amount": "<?= $amount ?>",
        "currency": "INR",
        "name": "My Store",
        "description": "Test Transaction",
        "order_id": "<?= $order_id ?>",
        "theme": {
            "color": "#F37254"
        },
        "handler": function (response){
            // Auto-submit payment response to verify controller
            var form = document.createElement('form');
            form.method = 'POST';
            form.action = "<?= base_url('verify') ?>";

            var fields = {
                razorpay_payment_id: response.razorpay_payment_id,
                razorpay_order_id: response.razorpay_order_id,
                razorpay_signature: response.razorpay_signature,
                amount:"<?= $amount ?>",
            };

            for (var key in fields) {
                var input = document.createElement('input');
                input.type = 'hidden';
                input.name = key;
                input.value = fields[key];
                form.appendChild(input);
            }

            document.body.appendChild(form);
            form.submit();
        }
    };

    // Automatically open Razorpay on page load
    window.onload = function() {
        var rzp1 = new Razorpay(options);
        rzp1.open();
    }
</script>

