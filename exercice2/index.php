<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>PHP P7E2</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <form method="post" action="user.php">
          <div>
            <label>Nom</label>
            <input type="text" name="name" pattern="^[a-zA-Z]+$">
          </div>
          <div>
            <label>Prénom</label>
            <input type="text" name="firstname">
            <input type="submit" value="Submit" pattern="^[a-zA-Z]+$">
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
