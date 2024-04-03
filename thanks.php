<?php
const BR = '<br />';
if (
    !empty($_POST['user_name'])
    && !empty($_POST['user_firstname'])
    && !empty($_POST['user_email'])
    && !empty($_POST['user_phone_number'])
    && !empty($_POST['user_subject'])
    && !empty($_POST['user_message'])
) {
    if (filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)) {
        $name = $_POST['user_name'];
        $firstName = $_POST['user_firstname'];
        $email = $_POST['user_email'];
        $phone = $_POST['user_phone_number'];
        $subject = $_POST['user_subject'];
        $message = $_POST['user_message'];
        echo "Merci $firstName $name de nous avoir contacté à propos de \"$subject\".\n" . BR . BR;
        echo "Un de nos conseillers vous contactera soit à l'adresse $email ou par téléphone au $phone dans les plus brefs délais pour traiter votre demande :\n" . BR . BR;
        echo "$message\n";
    } else {
        echo "Erreur : T'as essayé d'utiliser un faux mail ? HEIN ? AAHHHHHHH !";
    }
} else {
    echo "Erreur : Alors on a pas remplis tout les champs ? HEIN ?";
}
