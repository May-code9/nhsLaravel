$(document).ready(function () {
    $('#pay').on('click', function () {
        $.ajax({
            type: 'get',
            url: "/getAmount",

            success: function (price) {
                payWithPaystack(price);
            },
            error: function () {

            }
        });
    });
});

 jQuery.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
        }
    });

function payWithPaystack(price){
    var getEmail = $('#email').val();
    var getFirstName =$('#first_name').val();
    var getLastName =$('#last_name').val();
    var phone = $('#phone').val();
    var cash = price;
    var getAmount = cash * 100;

    var handler = PaystackPop.setup({
        key: 'pk_test_d1b1485478ee4bcaccb7f2638041bc884cc4da52',
        email: getEmail,
        amount: getAmount,
        firstname: getFirstName,
        lastname: getLastName,
        ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you

        metadata: {
            custom_fields: [
                {
                    phone_number: phone,
                }
            ]
        },

        // Using Ajax to verify the transaction
        callback: function (response) {
            //after the transaction have been completed
            //make post call  to the server with to verify payment
            //using transaction reference as post data
            $.post("userPayment",
                {
                    '_token': $('meta[name=csrf-token]').attr('content'),
                    reference:response.reference
                },
                function(response){
                    if(response.success) {
                        //successful transaction
                        alert("Success: Transaction completed successfully");

                        window.location.href = "/";
                    }

                    else {
                        //transaction failed
                        alert("Failure: Transaction failed");
                    }

                });
        },
        onClose: function () {
            //when the user close the payment modal

        }
    });
    handler.openIframe(); //open the paystack's payment modal
}
