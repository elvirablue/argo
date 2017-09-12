<?php

if(!empty($_POST["phone"])) {
	$name = $_POST["user-name"];
	$phone = $_POST["user-phone"];
	$city = $_POST["user-city"];	
	$text = $_POST["user-area"];
	$mail = $_POST["user-mail"];
	$ip = $_SERVER["REMOTE_ADDR"];
	
	
	$to = "olga_tretyakova@mail.ru, banksfera@yandex.ru"; //

	$titleMail = 'Форма обратной связи с сайта agrocargo.ru';
	$message = '
		<table style="font-family: arial ;">
		
			<tr style="border: 1px solid black;">
				<td style="padding: 10px; font-weight: bold; font-size: 16px;">Имя:</td>
				<td style="padding: 10px; font-size: 12px;">'.$name.'</td>
			</tr>
			<tr style="border: 1px solid black;">
				<td style="padding: 10px; font-weight: bold; font-size: 16px;">Город:</td>
				<td style="padding: 10px; font-size: 12px;">'.$city.'</td>
			</tr>
			<tr style="border: 1px solid black;">
				<td style="padding: 10px; font-weight: bold; font-size: 16px;">Телефон:</td>
				<td style="padding: 10px; font-size: 12px;">'.$phone.'</td>
			</tr>
			<tr style="border: 1px solid black;">
				<td style="padding: 10px; font-weight: bold; font-size: 16px;">E-mail:</td>
				<td style="padding: 10px; font-size: 12px;">'.$mail.'</td>
			</tr>
			<tr style="border: 1px solid black;">
				<td style="padding: 10px; font-weight: bold; font-size: 16px;">Текст сообщения:</td>
				<td style="padding: 10px; font-size: 12px;">'.$text.'</td>
			</tr>
			<tr style="border: 1px solid black;">
				<td style="padding: 10px; font-weight: bold; font-size: 16px;">IP:</td>
				<td style="padding: 10px; font-size: 12px;">'.$ip.'</td>
			</tr>
			
		</table>
	';

	$EOL = "\r\n"; // ограничитель строк, некоторые почтовые сервера требуют \n - подобрать опытным путём
    $boundary   = "--".md5(uniqid(time()));  // любая строка, которой не будет ниже в потоке данных.  
    $headers    = "MIME-Version: 1.0;$EOL";
    $headers   .= "Content-Type: multipart/mixed; boundary=\"$boundary\"$EOL";  
    $headers   .= "From: example@email.com";
    
    $multipart  = "--$boundary$EOL";
    $multipart .= "Content-Type: text/html; charset=UTF-8$EOL";   
    $multipart .= "Content-Transfer-Encoding: base64$EOL";   
    $multipart .= $EOL; // раздел между заголовками и телом html-части 
    $multipart .= chunk_split(base64_encode($message)); 

	//mail($to, $titleMail, $message, "MIME-Version: 1.0\nContent-type: text/html; charset=utf-8\nFrom: nsk-sk.ru - заполнена форма!");
	mail($to, $titleMail, $multipart, $headers);
	
	/**/
	
	
    

} else return false;

?>


