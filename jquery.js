$(document).ready(function() {
    //Form Validation
    $("#form").validate({

        submitHandler: function(form) {
            form.submit();
        }
    });

    //Email Verification
    var email_ver = true;

    $(".email").keyup(function(e) {
        $.ajax({
            type: "POST",
            url: "email-check.php",
            data: {
                email: $(".email").val()
            },
            success: function(data) {
                if (data == true) {
                    $(".error_msg").html("This email is already Taken.");
                    $(".error_msg").css("color", "red");
                    $(".email").css("border", "2px solid red");
                    email_ver = false;
                } else {
                    $(".error_msg").html("");
                    $(".email").css("border", "1px solid #ced4da");
                    email_ver = true;
                }
            }
        });

    });

    //Confirm Password Verification

    $("#submit-btn").click(function(e) {
        var password = $(".password").val();
        var c_password = $(".c_password").val();

        if (password != c_password) {
            $("c_password").focus();
            $(".c_pass_error").html("Password Didn't Match!!");
            e.preventDefault();
        } else {
            $(".c_pass_error").html("");
        }
        return email_ver;
    });

    //Show Password Using Checkbox

    $("#show").click(function(e) {
        var checked = $("#show:checked").length;
        if (checked > 0) {
            $(".password,.c_password,.password_lg").attr("type", "text");
            console.log("checked");
        } else {
            $(".password,.c_password,.password_lg").attr("type", "password");
        }
    });

    //Login Check

    $("#login-btn").click(function(e) {
        $.ajax({
            type: "POST",
            url: "login-check.php",
            data: {
                email: $(".email_lg").val(),
                password: $(".password_lg").val()
            },
            success: function(data) {
                if (data == 0) { //Email Not Registered
                    $(".c_email_error").html("Email doesn't Exist");
                    $(".c_pass_error").html("");
                    e.preventDefault();
                } else {
                    $(".c_email_error").html("");
                    if (data == 2) { //Password Didn't Matched
                        $(".c_pass_error").html("Incorrect Password");
                        e.preventDefault();
                    } else if (data == 1) { // Password Is Correct
                        $(".c_pass_error").html("");
                        $(location).attr('href', "http://localhost/reg-login-form/welcome-page.php")
                    }
                }

            }
        });
    });

});