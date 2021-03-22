<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>Page Thanks </title>

</head>

<body>
    <h3 Vous etes arrivé>Thanks for your message </h3>
</body>
</html>
<?php

//var_dump($_POST);
echo 'Merci  '.$_POST['user_firstname'].' '.$_POST['user_name'].' de nous avoir contacté à propos de '.$_POST['my_html_select_box'];
echo 'Un de nos conseiller vous contactera soit à l’adresse '.$_POST['user_mail'];
echo '<br> ou par téléphone au '.$_POST['user_phone'].' dans les plus brefs délais pour traiter votre demande : ';
echo '<br> '.$_POST['user_message'];
?>

