<?php

require_once __DIR__.'/functions.php';


$length = isset($_GET['length']) ? $_GET['length'] : null ;
var_dump($length);

if($length !== null && is_numeric($length)){

  $length = intval($length);
  $password = generaPassword($length);

}

?>
<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP STRONG PASS GENERATOR</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="./css/app.css">
</head>


<body>

  <header>

    <h1>psw generator</h1>

  </header>

  <main>

  <section>
    <div class="container">
      <form action="" method="GET">
        <input type="number" name="length" placeholder="0" min="6" max="32">
        <input type="submit" value="Genera">
      </form>
    </div>

    <div>
      <h1>
        <?php echo isset($password) ? $password : 'nessuna password'; ?>
      </h1>
    </div>

  </section>

  </main>


</body>


</html>