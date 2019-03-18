<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>PHP P7E7</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <?php
        if (isset($_POST['name']) && isset($_POST['firstname'])){
          $pattern = '/^[a-zA-Z]+$/';
          $text = $_POST['name'].$_POST['firstname'];
          if(preg_match($pattern, $text)){
            echo 'Regex accepted | '.$_POST['gender'].' '.$_POST['name'].', '.$_POST['firstname'].' est-il bien votre prénom ?';
            echo ' | Nom du fichier : '.$_FILES['monfichier']['name'].' | Extension du fichier '.$_FILES['monfichier']['type'];
          } else{
            echo 'Regex refused !';
          }
        }else{ ?>
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
              <label>Formulaire d'envoi de fichier :</label>
              <input type="file" name="monfichier" /><br />
              <input type="submit" value="Envoyer le fichier" />
            </div>
          </form><br>
      <?php }  ?>
      </div>
    </div>
  </body>
</html>
