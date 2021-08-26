<?php 

if (isset($_POST['submit'])) {
    $vorname = $_POST['vorname'];
    $nachname = $_POST['nachname'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];
    $subjectif = $_POST['subjectif'];

    $mailTo = "noreply@nomail.com";
    $headers = "From: ".$mailFrom;
    $txt = "Sie haben eine Mail von folgendem Absender erhalten: ".$vorname." ".$nachname.".\n\n" . "Betreff - individuell: ".$subjectif. " --- Nachricht: ".$message."";

    mail($mailTo, $subject, $txt, $headers);
    header("Location: mail_send.html");

}

$vorname = $_POST['vorname'];
$nachname = $_POST['nachname'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$respond_message = "Vielen Dank für Ihre Mail. 
Ihre Anfrage ist bei uns eingegangen und wird in den nächsten Tagen von uns bearbeitet werden. 
Wir freuen uns darauf, Ihnen zu helfen und Ihre E-Mail persönlich zu beantworten.

Diese Empfangsbestätigung ist eine automatisch generierte Nachricht. Bitte antworten Sie auf diese Mail nicht.

Im folgenden eine Kopie Ihrer Mail:

---
$message
---
";


?>