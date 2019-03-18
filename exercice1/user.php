<?php
$pattern = '/^[a-zA-Z]+$/';
$text = $_GET['name'].$_GET['firstname'];
if(preg_match($pattern, $text)){
    echo 'Regex accepted | Nom : '.$_GET['name'].' Prenom : '.$_GET['firstname'];
} else{
    echo 'Regex refused !';
}
?>
