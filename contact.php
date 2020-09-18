<?php
$result="Gracias por tu atención!";
if(isset($_POST['submit'])){
    require './PHPMailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host='smtp.gmail.com';
    $mail->Port=587;
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='tls';
    $mail->Username="ingridlow.music@gmail.com";
    $mail->Password='HolaBola99@';

    $mail->setFrom($_POST['email'],$_POST['name'],$_POST['subject'],$_POST['message']);
    $mail->addAddress('ingridlow.music@gmail.com');
    $mail->addReplyTo($_POST['email'],$_POST['name'],$_POST['subject'],$_POST['message']);

    $mail->isHTML(true);
    $mail->Subject='Enviado por '.$_POST['name'];
    $mail->Body='<h1 align=center>Nombre: '.$_POST['name'].'<br>E-mail: '.$_POST['email'].'<br>Tema: '.$_POST['subject'].'<br>Mensaje: '.$_POST['message'].'</h1>';

    if(!$mail->send()) {
        $result="¡Algo sucedió de manera extraña! Inténtelo nuevamente.";
    } else {
        $result="Gracias por tu atención ".$_POST['name'].". ¡Espera una respuesta pronto!";
    }
    

}

?>