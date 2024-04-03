<?php
const BR = '<br />';

ini_set('display_errors', 1);
error_reporting(E_ALL);

$nameErr = $firstnameErr = $emailErr = $phoneErr = $subjectErr = $messageErr = "";
$name = $firstname = $email = $phone = $subject = $message = "";

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty($_POST['user_name'])) {
        $nameErr = "T'as pas mis le nom ! ";
    } else {
        $name = test_input($_POST['user_name']);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $nameErr = "Seulement les lettres et les espaces sont acceptés ma biche ! ";
        }
    }

    if (empty($_POST['user_firstname'])) {
        $firstnameErr = "T'as pas mis le prénom ! ";
    } else {
        $firstname = test_input($_POST['user_firstname']);
        if (!preg_match("/^[a-zA-Z-' ]*$/", $firstname)) {
            $firstnameErr = "Seulement les lettres et les espaces sont acceptés ma biche ! ";
        }
    }

    if (empty($_POST['user_email'])) {
        $emailErr = "Ton E-mail est requis";
    } else {
        $email = test_input($_POST['user_email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Format du mail non valide !";
        }
    }

    if (empty($_POST['user_phone_number'])) {
        $phoneErr = "Ton numéro de téléphone est requis";
    } else {
        $phone = test_input($_POST['user_phone_number']);
        if (!preg_match("/^[0-9]{10}$/", $phone)) {
            $phoneErr = "Ton téléphone ne fonctionne pas";
        }
    }

    if (empty($_POST['user_subject'])) {
        $subjectErr = 'Le sujet du message est requis';
    } else {
        $subject = test_input($_POST['user_subject']);
    }

    if (empty($_POST['user_message'])) {
        $messageErr = 'Un message est requis, parle moi enfin !';
    } else {
        $message = test_input($_POST['user_message']);
    }

    if (empty($nameErr) && empty($firstnameErr) && empty($emailErr) && empty($phoneErr) && empty($subjectErr) && empty($messageErr)) {
        echo "Merci $firstname $name de nous avoir contacté à propos de \"$subject\"." . BR . BR;
        echo "Un de nos conseillers vous contactera soit à l'adresse $email ou par téléphone au $phone dans les plus brefs délais pour traiter votre demande :" . BR . BR;
        echo "$message\n";
    } else {
        echo $nameErr . $firstnameErr . $emailErr . $phoneErr . $subjectErr . $messageErr;
    }
}
