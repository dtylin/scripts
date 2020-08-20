<?php
if ((isset($_POST['name'])) && (isset($_POST['tel'])) &&) {
  $name = $_POST['name'];
  $tel = $_POST['tel'];
  $headers= "MIME-Version: 1.0\r\n";
  $headers .= "Content-type: text/html; charset=utf-8\r\n";
  $headers .= "From: <no-replay@yoursite.com>\r\n";
  $subHeader = "Новая заявка на обогреватель с лендинга: ".$name;
  $text = '<strong>Телефон: </strong>'.$tel.'<br>';
  mail('test1@gmail.com, test2@mail.ru', $subHeader, $text, $headers);
  echo json_encode(array('success' => 1));
} else {
  echo json_encode(array('success' => 0));
}
?>
