<!-- <button id="rzp-button1">Pay</button> -->
<?php

    include '../connect.php';  
?>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    var options = {
        "key": "rzp_test_Nn47y52bQed0NF", // Enter the Key ID generated from the Dashboard   
        "amount": "100000", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise    
        "currency": "INR",
        "name": "Neighbouring Nurse",
        "description": "Registration Fee",
        "image": "https://github.com/Himani-Trivedi/NN/blob/main/nurse_logo.png",
        // "order_id": "order_9A33XWu170gUtm", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1    
        "handler": function(response) {
            alert(response.razorpay_payment_id);
            // alert(response.razorpay_order_id);
            // alert(response.razorpay_signature)
            console.log(response);
        },
        "prefill": {
            "name": "Gaurav Kumar",
            "email": "gaurav.kumar@example.com",
            "contact": "9999999999"
        },
        "notes": {
            "address": "Government Polytechnic Ahmedabad"
        },
        "theme": {
            "color": "#36c7c9"
        }
    };
    var rzp1 = new Razorpay(options);
    rzp1.on('payment.failed',
        function(response) {
            // alert(response.error.code);
            // alert(response.error.description);
            // alert(response.error.source);
            // alert(response.error.step);
            // alert(response.error.reason);
            // // alert(response.error.metadata.order_id);
            // alert(response.error.metadata.payment_id);
            console.log(response);
        });
    // document.getElementById('rzp-button1').onclick = function(e) {
    //     rzp1.open();
    //     e.preventDefault();
    // }

    $(function(){
        rzp1.open();
    });
</script>