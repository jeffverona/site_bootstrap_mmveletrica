<?php
/*
    $to = "contato@mmveletrica.com.br";  // Your email here
    $from = $_REQUEST['contato@mmveletrica.com.br'];
    $name = $_REQUEST['name'];
	$phone = $_REQUEST['phone'];
	$message = $_REQUEST['message'];
    $headers = "From: $from";
	$subject = "Contato do site";
   
    $fields = array();
    $fields{"name"} = "First name";
    $fields{"email"} = "Email";
	$fields{"phone"} = "Phone";
    $fields{"message"} = "Message";
	

    $body = "Here is what was sent:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

    $send = mail($to, $subject, $body, $headers);
*/
?>


<?php
 
/* apenas dispara o envio do formulário caso exista $_POST['enviarFormulario']*/
 
/*** INÍCIO - DADOS A SEREM ALTERADOS DE ACORDO COM SUAS CONFIGURAÇÕES DE E-MAIL ***/
 
$enviaFormularioParaNome = 'Marcelo';
$enviaFormularioParaEmail = 'jefferson.verona@gmail.com';
 
$caixaPostalServidorNome = 'WebSite | Formulário';
$caixaPostalServidorEmail = 'jefferson.verona@gmail.com';
$caixaPostalServidorSenha = 'Je04071103@$';
 
/*** FIM - DADOS A SEREM ALTERADOS DE ACORDO COM SUAS CONFIGURAÇÕES DE E-MAIL ***/ 
 
 
/* abaixo as veriaveis principais, que devem conter em seu formulario*/
 
$remetenteNome  = $_POST['name'];
$remetenteEmail = $_POST['email'];
$mensagem = $_POST['mensage'];
 
$mensagemConcatenada = 'Formulário gerado via website'.'<br/>'; 
$mensagemConcatenada .= '-------------------------------<br/><br/>'; 
$mensagemConcatenada .= 'Nome: '.$remetenteNome.'<br/>'; 
$mensagemConcatenada .= 'E-mail: '.$remetenteEmail.'<br/>'; 
$mensagemConcatenada .= 'Mensagem: "'.$mensagem.'"<br/>';
 
 
/*********************************** A PARTIR DAQUI NAO ALTERAR ************************************/ 
 
require_once('PHPMailer-master/PHPMailerAutoload.php');
 
$mail = new PHPMailer();
 
$mail->IsSMTP();
$mail->SMTPAuth  = true;
$mail->Charset   = 'utf8_decode()';
$mail->Host  = 'smtp.'.substr(strstr($caixaPostalServidorEmail, '@'), 1);
$mail->Port  = '587';
$mail->Username  = $caixaPostalServidorEmail;
$mail->Password  = $caixaPostalServidorSenha;
$mail->From  = $caixaPostalServidorEmail;
$mail->FromName  = utf8_decode($caixaPostalServidorNome);
$mail->IsHTML(true);
$mail->Subject  = utf8_decode($assunto);
$mail->Body  = utf8_decode($mensagemConcatenada);
 
 
$mail->AddAddress($enviaFormularioParaEmail,utf8_decode($enviaFormularioParaNome));
 
if(!$mail->Send()){
$mensagemRetorno = 'Erro ao enviar formulário: '. print($mail->ErrorInfo);
}else{
$mensagemRetorno = 'Formulário enviado com sucesso!';
} 
 
 
?>