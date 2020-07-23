$( document ).ready(function() {
    $("#register").click(function () {
        var registerEmail = $("#registerEmail").val();
        var registerFullname = $("#registerFullName").val();
        var registerPassword = $("#registerPassword").val();
        var registerRepassword = $("#registerRepassword").val();


        if (registerFullname.trim().length == 0) {
            swal("İsim Alanını Doldurunuz", "", "warning");
            return false;
        }
        if (registerEmail.trim().length == 0) {
            swal("Mail Alanını Doldurunuz", "", "warning");
            return false;
        }
        if (registerPassword.trim().length == 0) {
            swal("Şifre Alanını Doldurunuz", "", "warning");
            return false;
        }
        if (registerRepassword.trim() != registerPassword.trim()) {
            swal("Şifreler Eşleşmiyor", "", "warning");
            return false;
        }

        $.ajax({
            url: "register_createAccount.php",
            method: "post",
            data: {"registerEmail": registerEmail, "registerFullname": registerFullname, "registerPassword": registerPassword},
            success: function (response) {

                if(response=="no"){
                    swal("Bu email ile kayıt olamazsınız", "", "warning");
                }else if(response == "ok"){
                    swal("Kaydınız gerçekleştirildi! Yönlendiriliyorsunuz", "", "success");
                    window.location.replace("home.php");
                }
                return false;
            },
            error : function(response){
                swal("Bir hata oldu!", "", "warning");
            }
        });

    })

    $("#login").click(function () {
        var loginEmail = $("#loginEmail").val();
        var loginPassword = $("#loginPassword").val();

        if (loginEmail.trim().length == 0) {
            swal("Mail Alanını Doldurunuz", "", "warning");
            return false;
        }
        if (loginPassword.trim().length == 0) {
            swal("Şifre Alanını Doldurunuz", "", "warning");
            return false;
        }

        $.ajax({
            url: "login_login.php",
            method: "post",
            data: {"loginEmail": loginEmail, "loginPassword": loginPassword},
            success: function (response) {

                if(response=="no"){
                    swal("Bilgilerinizi kontrol ediniz!", "", "warning");
                }else if(response == "ok"){
                    swal("Hoşgeldiniz! Yönlendiriliyorsunuz...", "", "success");
                    window.location.replace("home.php");
                }
                return false;
            },
            error : function(response){
                swal("Bir hata oldu!", "", "warning");
            }
        });

    })


});