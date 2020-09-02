# Добавление лидов AmoCRM

Создаем форму в амо

Закидываем её на сайт и вытаскиваем html код

Обрабатываем нашу форму и передаем все данные в форму амо

Делаем сабмит формы амо внутри обработки нашей формы

**Пример**
```js
$('.step_6 .lead-form__button').click(function(event) {
  if ($('.step_6 input').val() == '') {
    var step6 = $('.step_6 input').val();
    $('.a_name').val(step6)
    $("#amoforms_form").submit();
  }
  return false;
});
```
