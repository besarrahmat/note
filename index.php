<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <link rel="stylesheet" href="css/styles.css">

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&family=Roboto&display=swap" rel="stylesheet">

  <title>TUGAS KELOMPOK PEMWEBLAN</title>
</head>

<body>
  <header>
    <nav id="nav" class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <h1>Note Project</h1>
        </div>
        <button class="open-login" onclick="openLogin()">Login</button>
      </div><!-- .container -->
    </nav><!-- #nav -->

    <div class="login-popup" id="login">
      <form action="index.php" method="post" class="form-container">
        <h2>Login</h2>
        <button class="close-login" onclick="closeLogin()">Close</button>
      </form>
    </div>
  </header>

  <div id="main-note" class="container">
    <section class="row">
      <div class="col-md-3">
        <a href="index.php">
          <div class="note-tile">
            <span>Lunch</span>
          </div>
        </a>
      </div>
    </section>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  <script src="js/script.js"></script>
</body>

</html>