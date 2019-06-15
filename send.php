<?php

 if ( (isset($_POST['hidden'])) && (isset($_POST['name'])) && (isset($_POST['phone']) && $_POST['phone'] != '') && (isset($_POST['message'])) )
 {
    $form =  $_POST['hidden'];
    $name =  $_POST['name'];
    $phone =  $_POST['phone'];
    $comment =  $_POST['message'];

    $to = '26emic73@gmail.com';
    $subject = 'Сообщение с сайта pro-ant.ru';
    $message = '
                <html>
                    <head>
                        <title>' . $subject . '</title>
                    </head>
                    <body>
                        <p>Поступило сообщение из формы ' . $form . '</p>
                        <p>Имя: ' . $name . '</p>
                        <p>Телефон: ' . $phone . '</p>
                        <p>Комментарий к заказу: ' . $comment . '</p>
                    </body>
                </html>
    ';
    $headers = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: Отправитель <pro-ant@site.com>\r\n";
    mail($to, $subject, $message, $headers);
 }
 else {
     echo "Ваше сообщение не отправлено!";
     print_r($_POST);
 }
 ?>
