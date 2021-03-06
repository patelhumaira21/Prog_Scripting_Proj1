<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">

    <title>ArtztecA Studios Cooperative</title>

    <link href="bootstrap-3.3.6/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap-3.3.6/docs/examples/starter-template/starter-template.css" rel="stylesheet">
    <link href="bootstrap-3.3.6/docs/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <script src="bootstrap-3.3.6/docs/assets/js/ie-emulation-modes-warning.js"></script>
  </head>

  <body style="background-color:#989898">
  <header class="header">
     <h2><center>ArtztecA Studios Cooperative</center></h2>
      <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">ArtztecA Studios Cooperative</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav"> <!-- adding the class="active" dynamically based on the page that is currently active -->
            <li class="<?= ($activePage == 'index') ? 'active':''; ?>"><a href="index.php"><span class="glyphicon glyphicon-home"></span>Home</a></li>
            <li class="<?= ($activePage == 'about') ? 'active':''; ?>"><a href="about.php"><span class="glyphicon glyphicon-asterisk"></span> About</a></li>
            <li class="<?= ($activePage == 'registration') ? 'active':''; ?>"><a href="registration.php"><span class="glyphicon glyphicon-pencil"></span> Registration</a></li>
            <li class="<?= ($activePage == 'aztec_event') ? 'active':''; ?>"><a href="aztec_event.php"><span class="glyphicon glyphicon-picture"></span> Artist Event</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li class="<?= ($activePage == 'login') ? 'active':''; ?>"><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
  </header>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery-1.12.1.min.js"></script>
    <script>window.jQuery || document.write('<script src="bootstrap-3.3.6/docs/assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="bootstrap-3.3.6/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap-3.3.6/docs/assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>