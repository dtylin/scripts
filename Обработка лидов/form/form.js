$('form').submit(function () {
  var name = $(this).find('input[name=name]').val();
  var tel = $(this).find('input[name=tel]').val();
  $.ajax({
    url: '/sendmail.php',
    type: 'post',
    data: {
      'name': name,
      'tel': tel
    },
    success: function (response) {
      var jsonData = JSON.parse(response);
      console.log(jsonData);
      console.log(jsonData.success)
      if (jsonData.success == '1'){
        alert('Сообщение отправлено');
      } else if (jsonData.success == '0') {
        alert('Заполните все поля');
      } else {
        alert('Unknow error');
      }
    }
  });
  return false;
})
