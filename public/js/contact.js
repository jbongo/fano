$(document).ready(function () {
    console.log('salut');
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('body').on('click', '#edit_contact a', function (e) {
        contact_id = $(this).attr("data-id");


        console.log(contact_id);

        $("#postForm" + contact_id).on("submit", function (e) {
            e.preventDefault();
            console.log('hello');
            var form = this;

            $.ajax({
                url: '/update_contact/' + contact_id,
                type: "POST",
                data: new FormData(form),
                processData: false,
                dataType: 'json',
                contentType: false,
                success: function (response) {
                    if (response != '') {
                        if ($("#update").val() == "update") {
                            console.log("response");
                            location.reload();





                        } else {



                            console.log(response);

                        }

                    }

                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });


        });


    });
    $('body').on('click', '#delete a', function (e) {
        contact_id = $(this).attr("data-id");
        console.log(contact_id);

        $("#postFormDelete").on("submit", function (e) {
            e.preventDefault();
            console.log('hello');
            var form = this;

            $.ajax({
                type: "POST",
                url: '/delete_contact/' + contact_id,
                data: new FormData(form),
                processData: false,
                dataType: 'json',
                contentType: false,
                success: function (response) {
                    if (response != '') {
                        if ($("#destroy").val() == "delete") {
                            console.log(response);
                            location.reload();





                        } else {



                            console.log(response);

                        }

                    }

                },
                error: function (data) {
                    console.log('Error:', data);
                }
            });


        });


    });
});

