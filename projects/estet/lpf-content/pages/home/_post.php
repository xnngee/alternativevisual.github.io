<?php if (!defined('BASEPATH')) exit('No direct script access allowed');


if ($post = mso_check_post('Name', 'Mobile', 'Email','Text')) 
{
	$to = 'rublgleb@gmail.com'; // адрес получателя
	$subject = 'ESTET - Вызов менеджера'; // тема письма
    
    $Name = trim($post['field']['Name']); // поле имя
	$Mobile = trim($post['field']['Mobile']); // поле сообщения
	$Email = $post['field']['Email']; // поле Email
	$Text = trim($post['field']['Text']); // поле сообщения
	
	// проверка email и прочего
	if (!filter_var($Email, FILTER_VALIDATE_Email))
	{
		echo 'Неверный Email! Обновите страницу (F5) и укажите правильный адрес';
		exit;
	}
	
	if (!$Name)
	{
		echo 'Не указано имя! Обновите страницу (F5) и укажите своё имя';
		exit;
	}
	
    if (!$Mobile)
    {
        echo 'Не указан номер телефона! Обновите страницу (F5) и введите номер';
        exit;
    }	

    if (!$Text)
	{
		echo 'Не указан текст сообщения! Обновите страницу (F5) и введите текст';
		exit;
	}	
	
	// формируем headers для письма
	$headers = 'From: '. $Email . "\r\n"; // от кого

	// формируем тело сообщения
	$Text = 'Имя: ' . $Name . NR . 'Email: ' . $Email . NR . NR . NR . $Text; 
	 
	// кодируем заголовок в UTF-8
	$subject = preg_replace("/(\r\n)|(\r)|(\n)/", "", $subject);
	$subject = preg_replace("/(\t)/", " ", $subject);
	$subject = '=?UTF-8?B?' . base64_encode($subject) . '?=';

	// отправка
	@mail($to, $subject, $Text, $Mobile, $headers);

	echo 'Спасибо, ваше сообщение отправлено!';
}

# end of file