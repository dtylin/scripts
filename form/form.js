$('form').submit(function () {
    var name = $(this).find('input[type=hidden]').val();
    var tel = $(this).find('input[type=tel]').val();
    $.ajax({
        url: "/sendmail.php",
        type: "post",
        dataType: "json",
        data: {
            "name": name,
            "tel": tel
        },
        success: function (data) {}
    });
    alert("Сообщение отправлено");
    return false;
})
