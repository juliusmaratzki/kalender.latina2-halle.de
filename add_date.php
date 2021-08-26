<?php

if (isset($_POST['submit'])) {
    $vorname = $_POST['vorname'];
    $nachname = $_POST['nachname'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $date = $_POST['date'];
    $termin = $_POST['termin'];
    $class = $_POST['class'];
    
    $mailTo = "noreply@nomail.com";
    $headers = "From: ".$mailFrom;
    $txt = "EIN TERMIN WURDE ZUR ERGÄNZUNG VORGESCHLAGEN \n\n Absender: ".$vorname." ".$nachname."\n\n" . "Ergänzter Termin: ".$termin."\n\n " . "Datum: ".$date."\n\n" . "Klasse bzw. Kurs: ".$class."";
     
    mail($mailTo, $subject, $txt, $headers);
    header("Location: add_date_mail_send.html");
     
    }

?>