<?php
  $name = $_POST['name']);
  $tel = $_POST['tel'];
  $form_name = $_POST['form_name'];

  $bitrix_lead = bitrix_lead($form_name, $tel, $name);

  function bitrix_lead($form_name=null,$tel=null,$name=null){

    $crmUrl = 'Ваш домен Bitrix24';
    $login = 'Логин';
    $password = 'Пароль';
    $site_url = $_SERVER['SERVER_NAME'];
    $mail = 'Емейл';

    $arParams = array(
      'LOGIN' => $login,
      'PASSWORD' => $password,
      'TITLE' => '#'.time(),
      'SOURCE_ID' => 'WEB'
    );

    $arParams['SOURCE_DESCRIPTION']='website='.$site_url;

    if($name) $arParams['NAME']=$name;
    if($tel) $arParams['PHONE_MOBILE']=$tel;
    $arParams['SOURCE_ID']='Название источника';
    $arParams['UF_CRM_1565163116']='доп поле';
    $arParams['UF_CRM_1583254921738']='доп поле';
    $arParams['TITLE'] = 'Название лида ' . time();

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$crmUrl.'crm/configs/import/lead.php');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($arParams));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $server_output = curl_exec ($ch);
    curl_close ($ch);

    $result = json_decode(str_replace('\'', '"', $server_output), true);
    var_dump($result);

    return $result;
  };
?>
