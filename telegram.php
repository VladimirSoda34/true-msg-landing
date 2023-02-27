<?php

/* https://api.telegram.org/bot5750875556:AAFhhGdNdBOlio90NRFOUbAJnCVeaUVmE14/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['name'];
$phone = $_POST['phone'];

$token = "5275804750:AAENPNqtdXPlmWqoGNfpX9M8PByQ3-ibges";
$chat_id = "-776665350";
$arr = array(
  'Имя: ' => $name,
  'Телефон: ' => $phone,
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

// $sendToTelegram2 = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram /*&& $sendToTelegram2*/) {
  header('Location: https://xn----7sbabhm8eiy2c.xn--p1ai/');
} else {
  echo "Error";
}
?>