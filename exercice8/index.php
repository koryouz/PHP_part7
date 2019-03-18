<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>PHP P7E8</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <?php
      if (isset($_POST['name']) && isset($_POST['firstname']) && isset($_FILES['monfichier']) && $_FILES['monfichier']['error'] == 0){
        $infosfichier = pathinfo($_FILES['monfichier']['name']);
        $extension_upload = $infosfichier['extension'];
        $extensions_autorisees = array('jpg');
        if (in_array($extension_upload, $extensions_autorisees))
        {
          $pattern = '/^[a-zA-Z]+$/';
          $text = $_POST['name'].$_POST['firstname'];
          if(preg_match($pattern, $text)){
            echo 'Regex accepted | '.$_POST['gender'].' '.$_POST['name'].', '.$_POST['firstname'].' est-il bien votre prénom ?';
            echo ' | Nom du fichier : '.$_FILES['monfichier']['name'].' | Extension du fichier '.$_FILES['monfichier']['type'];
          } else{
            echo 'Regex refused !';
          }
        }else{
          echo 'Bad file extension';
         }  ?>
    <?php  }else{ ?>
        <form method="post" action="index.php" enctype="multipart/form-data">
          <select name="gender">
            <option>Monsieur</option>
            <option>Madame</option>
          </select>
          <div>
            <label>Nom</label>
            <input type="text" name="name" pattern="^[a-zA-Z]+$">
          </div>
          <div>
            <label>Prénom</label>
            <input type="text" name="firstname">
            <input type="submit" value="Submit" pattern="^[a-zA-Z]+$">
          </div>
          <div>
            <label>Formulaire d'envoi de fichier : (uniquement JPG)</label>
            <input type="file" name="monfichier" />
          </div>
        </form>
      <?php }  ?>
    </div>
  </div>
</body>
</html>
