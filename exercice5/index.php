<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>PHP P7E5</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <form method="post" action="index.php">
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
        </form><br>
        <?php
        if (isset($_POST['name']) && isset($_POST['firstname'])){
          $pattern = '/^[a-zA-Z]+$/';
          $text = $_POST['name'].$_POST['firstname'];
          if(preg_match($pattern, $text)){
            echo 'Regex accepted | '.$_POST['gender'].' '.$_POST['name'].', '.$_POST['firstname'].' est-il bien votre prénom ?';
          } else{
            echo 'Regex refused !';
          }
        }
        ?>
      </div>
    </div>
  </body>
</html>
