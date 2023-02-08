$('#sendmail').on("click", function () {
    var name = $("#name").val();
    var email = $("#email").val();
    var seminar = $("#seminar").val();

    function validateEmail(email) {
        var re = /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;
        return re.test(String(email).toLowerCase());
    }

    if (name ==''){
        $("#error").text("Введите имя");
        return false;
    }
    else if (name.length <2){
        $("#error").text("Введенное имя короче двух символов");
        return false;
    }
    else if (email ==''){
        $("#error").text("Введите почту");
        return false;
    }
    else if (!validateEmail(email)){
        $("#error").text("Введите почту корректно");
        return false;
    }
    else if (seminar ==''){
        $("#error").text("Выберите семинар");
        return false;
    }
    $("error").text("");
    $.ajax({
        url:'sendmail.php',
        type: 'POST',
        cache: false,
        data: {'name': name, 'email': email, 'seminar': seminar},
        dataType: 'html',
        beforeSend: function() {
            $("$sendmail").prop("disabled", true);
        },
        success: function(data) {
            if(!data){
                alert("Ошибка");
            }else {
                $("#form").trigger("reset");
                $("#success").text("Ваша заявка успешно отправлена и находится в обработке. Ожидайте email с подтверждением бронирования.");
            }
            $("$sendmail").prop("disabled", false);
        }
    });
    $("success").text("");
});