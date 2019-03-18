<?php
$pattern = '/^[a-zA-Z]+$/';
$text = $_POST['name'].$_POST['firstname'];
if(preg_match($pattern, $text)){
    echo 'Regex accepted | Nom : '.$_POST['name'].' Prenom : '.$_POST['firstname'];
} else{
    echo 'Regex refused !';
}
?>
