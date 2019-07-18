<?php
    $to = 'marcos.ditommaso@hotmail.com';
    $nome = $_POST["nome"];
    $email= $_POST["email"];
    $text= $_POST["mensagem"];
    $assunto= $_POST["assunto"];
    


    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= "From: " . $email . "\r\n"; // Sender's E-mail
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $mensagem ='<table style="width:100%">
        <tr>
            <td>'.$nome.'  '.$assunto.'</td>
        </tr>
        <tr><td>Email: '.$email.'</td></tr>
        <tr><td>Assunto: '.$assunto.'</td></tr>
        <tr><td>Mensagem: '.$text.'</td></tr>
        
    </table>';

    if (@mail($to, $email, $mensagem, $headers))
    {
        echo 'Sua mensagem foi enviada.';
    }else{
        echo 'Houve um erro no envio. Tente novamente';
    }

?>
