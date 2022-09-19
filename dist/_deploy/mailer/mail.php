<?php
header("Content-Type: text/html; charset=utf-8");
require 'phpMailer/PHPMailerAutoload.php';

$mail = new PHPMailer();
$mail->CharSet = 'UTF-8';
$mail->setLanguage('ru', 'phpmailer/language/');


$phone = trim($_POST['phone']);
$from = trim($_POST['from']);
$email = trim($_POST['mail']);

$quest1 = implode(',',$_POST['question-1']);
$quest2 = implode(',',$_POST['question-2']);
$quest3 = $_POST['question-3'];
$quest4 = $_POST['question-4'];
/*
$utm_source = $_COOKIE['utm_source'];
$utm_medium = $_COOKIE['utm_medium'];
$utm_campaign = $_COOKIE['utm_campaign'];
$utm_content = $_COOKIE['utm_content'];
$utm_term = $_COOKIE['utm_term'];

$bitrix_message = "Телефон: $phone".PHP_EOL;
$bitrix_message .= "Почта: $email".PHP_EOL.PHP_EOL;
$bitrix_message .= "Заявка с формы: $from".PHP_EOL.PHP_EOL;

if ($quest1) {$bitrix_message .= "<b>01. Где необходимо нанести покрытие?    </b> $quest1<br>";}
if ($quest2) {$bitrix_message .= "<b>02. Вы хотите приобрести только систему материалов или материалы + нанесение «под ключ»?</b> $quest2<br>";}
if ($quest3) {$bitrix_message .= "<b>03. Какой тип декоративного покрытия вас интересует?   </b> $quest3<br>";}
if ($quest4) {$bitrix_message .= "<b>04. Укажите примерную площадь поверхности    $quest4<br>";}
*/
/*$bitrix_message .= "Имя: $name".PHP_EOL;
$bitrix_message .= "Улица: $street".PHP_EOL.PHP_EOL;
$bitrix_message .= "Количество: $quantity".PHP_EOL.PHP_EOL;
$bitrix_message .= "Доставка: $dostavka".PHP_EOL.PHP_EOL;
$bitrix_message .= "Оплата: $oplata".PHP_EOL.PHP_EOL;
$bitrix_message .= "ФИО: $fio".PHP_EOL.PHP_EOL;
$bitrix_message .= "Сообщение: $soob".PHP_EOL.PHP_EOL;
$bitrix_message .= "Цена: $price".PHP_EOL.PHP_EOL;*/

/*$Send = new Send($phone, $from, $email, $bitrix_message, $utm_source, $utm_content, $utm_medium, $utm_term, $utm_campaign);
$Send->start();*/

$mail->setFrom('test.dmgug.ru', 'irtaka');
$mail->addAddress("avocode.web01@yandex.ru");

if ($_POST['phone']) {
    $title = "Заявка с сайта Irtaka";
    $body = " Заявка с сайта Irtaka<br>
    --------------------------------------------------<br><br>";

    if ($from) {$body .= "$from<br>";}
    if ($quest1) {$body .= "<b>01. Какую мебель необходимо восстановить?</b> $quest1<br>";}
    if ($quest2) {$body .= "<b>02. Какой вид ремонта требуется?</b> $quest2<br>";}
    if ($quest3) {$body .= "<b>03. В какой области вы проживаете?</b> $quest3<br>";}
    if ($quest4) {$body .= "<b>04. Как срочно вы хотите	произвести ремонт мебели?</b> $quest4<br>";}
    if ($phone) {$body .= "Телефон: $phone<br>";}
    if ($email) {$body .= "Почта: $email<br>";}

    $body .="<br>--------------------------------------------------\n";

if (!empty($file['name'][0])) {
  for ($ct = 0; $ct < count($file['tmp_name']); $ct++) {
      $uploadfile = tempnam(sys_get_temp_dir(), sha1($file['name'][$ct]));
      $filename = $file['name'][$ct];
      if (move_uploaded_file($file['tmp_name'][$ct], $uploadfile)) {
          $mail->addAttachment($uploadfile, $filename);
          $rfile[] = "Файл $filename прикреплён";
      } else {
          $rfile[] = "Не удалось прикрепить файл $filename";
      }
  }
}

$mail->isHTML(true);
$mail->Subject = $title;
$mail->Body = $body;


    if(!$mail->send()) {
        echo 'Ошибка отправки.';
        //echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Сообщение отправлено';
    }
}