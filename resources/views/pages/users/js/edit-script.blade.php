<script src="{{asset('assets')}}/libs/jquery/dist/jquery.min.js"></script>
<script >
    var user = @json($users);
    $(document).ready(function () {
        initialInputUser(user)
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

    function showLoading() {
        $('.ajaxloading-widget-background').show();
    }

    function hideLoading() {
        $('.ajaxloading-widget-background').hide();
    }

    function closeAlert(type) {
        if(type == 'alert-success') {
            $('#alert-success').children('p').text('');
            $('#alert-success').hide();
        } else if (type == 'alert-error') {
            $('#alert-error').children('p').text('');
            $('#alert-error').hide();
        } else if  (type == 'alert-warning') {
            $('#alert-warning').children('p').text('');
            $('#alert-warning').hide();
        }
    }

    function initialInputUser(user) {
        var idInput = $("input[name='id']")
        var nameInput = $("input[name='name']")
        var lastNameInput = $('input[name="last_name"]')
        var nickNameInput = $('input[name="nick_name"]')
        var emailInput = $("input[name='email']")
        var mobileInput = $('input[name="mobile"]')
        var typeInput = $('select[name="type"]')
        var birthdayInput = $('input[name="birthday"]')
        var genderInput = $('select[name="gender"]')
        var statusInput = $('select[name="status"]')

        var usernameInput = $("input[name='username']")
        var passwordInput = $('input[name="password"]')
        var confirmInput = $('input[name="confirm"]')

        idInput.val(user.id);
        usernameInput.val(user.username);
        passwordInput.removeAttr('required');
        confirmInput.removeAttr('required');

        nameInput.val(user.name);
        lastNameInput.val(user.last_name)
        nickNameInput.val(user.nick_name)
        emailInput.val(user.email)
        mobileInput.val(user.mobile)
        typeInput.val(user.type).trigger('change')
        birthdayInput.val(user.birthday).trigger('change')
        genderInput.val(user.gender).trigger('change')
        statusInput.val(user.status).trigger("change");
    }

</script>
