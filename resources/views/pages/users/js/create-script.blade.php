<script src="{{asset('assets')}}/libs/jquery/dist/jquery.min.js"></script>
<script >
    $(document).ready(function () {
        $("#users").addClass("selected");
        $("#users .collapse").addClass("in");
        $("#users").children('a').addClass('active');
        $("#btn-user-submit").click(function () {
            $('[required]').each(function (e) {
                var val = $(this).val()
                if (val === undefined || val == null || val.length <= 0) {
                    var focus_name = $(this).attr('data-name')
                    // tab menu
                    $('#group-user').children('li').removeClass('active')
                    $('li[name=\'' + focus_name + '\']').addClass('active')
                    //     // tab content
                    $('#group-content-user').children('div').removeClass('active')
                    $('div#' + focus_name).addClass('active')
                    return false;
                }
            })

        });

        $(".numeric").keydown(function (e) {
            // Allow: backspace, delete, tab, escape, enter and .
            if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190, 91, 86]) !== -1 ||
                // Allow: Ctrl+A, Command+A
                (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) ||
                // Allow: home, end, left, right, down, up
                (e.keyCode >= 35 && e.keyCode <= 40)) {
                // let it happen, don't do anything
                return;
            }
            // Ensure that it is a number and stop the keypress
            if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
                e.preventDefault();
            }
        });

        $("input[name='email']").on('keyup', function () {
            var email = $('#email').val();
            if (email.length > 6)
                showLoading();
                $.ajax({
                    url: '{{route("users.checkemail")}}',
                    type: 'GET',
                    data: 'email=' + email,
                    beforeSend: function () {
                        showLoading();
                    },
                    success: function (data) {
                        if (data != undefined && data.length > 0) {
                            $("#error_email").html("This email has been already!");
                            $("#error_email").show();
                            $("#email").css("border", "1px solid #F90A0A");
                            $(".bg-teal-400").prop("disabled", true);
                        } else {
                            $("#error_email").hide();
                            $("#email").css("border", "1px solid #009900");
                            $(".bg-teal-400").prop("disabled", false);
                            $("#icon-email").css("paddingTop", "10px");
                        }
                    },
                    complete: function () {
                        hideLoading();
                    }
                });
        });
    });

</script>
