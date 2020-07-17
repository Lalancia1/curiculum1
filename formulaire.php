<?php
require 'index.php';
  $mail=$_POST['mail'];
  $text=$_POST['message'];
$destinataire= "michelebonnet59550@gmail.com";
$msg_erreur="vous avez dépassé le nombre de caractères requis";
$info="votre mail a bien été envoyé";


$entete="From:{$_POST['text']} " ."<{$_POST['mail']}>\r\n";

$message="MAIL:".$mail."\n"."TEXT:"."$text";
$to = $mail;
$subject = "formulaire";


if (strlen($_POST['text'])>500){
    echo $msg_erreur;
}
if($_POST['submit']){
    $mail=$_POST['mail'];
    $text=$_POST['message'];
if(isset($mail) && isset( $text) && !empty($mail) && !empty( $text))
{
    mail($to, $subject, $message, $entete);

}
    echo $info;
}
else
{
  echo "votre message n'est pas envoyé";
}