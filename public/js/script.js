/**
 * Created by Manson on 11/29/2017.
 */
$(document).ready(function () {
    $('#changePassword').on('click', function () {
        $('#newPassword').toggle();
    });

    $('.card').mouseenter(function () {
        $(this).animate({
            bottom: 3,
            opacity: 1
        });
    });

    $('.card').mouseleave(function () {
        $(this).animate({
            bottom: 0,
            opacity: 0.9
        });
    });

    $('.token-generator').on('click', function () {
        var userId = $('input[name="user_id"]').val();
        $.ajax({
            type: "POST",
            headers: {
                'X-CSRF-TOKEN': $('input[name="_token"]').val()
            },
            data: {
                user: userId
            },
            url : "generateToken",
            success : function (data) {
                $('.token-value').html(data);
            }
        });
    });
});