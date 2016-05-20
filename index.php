<!DOCTYPE html>
<html lang="en">
  <head>  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">
    <title>Home</title>
  </head>

  <body> 
    <header>  
      <?php 

        //get the name of current page to make that page active in navbar.
        $activePage = basename($_SERVER['REQUEST_URI'], ".php");

        //includes the header 
        include_once('includes/header.php');  
      ?> 
    </header>

    <main>
      <div class="container">
          <h2><center>Welcome to <i>ArtztecA Studios</i></center></h2>      
        <div class="row">
          <div class="col-md-4 thumbnail">
              <p>Scenery</p>    
              <img src="images/fine_art1.jpg" alt="Nature" style="width:150px;height:150px">
          </div>
          <div class="col-md-4 thumbnail">
              <p>An example of Fine Art</p>
              <img src="images/fine_art2.jpeg" alt="Fine Art" style="width:150px;height:150px">
          </div>
          <div class="col-md-4 thumbnail">
              <p>Monalisa</p>      
              <img src="images/fine_art3.jpg" alt="Monalisa" style="width:150px;height:150px">
          </div>
        </div>
        <p align="center">New Artztec Event coming up soon. Visit the Artist Event page to get more details.</p>
      </div>
    </main>

    <footer>
      <?php 
        //includes the footer 
        include_once ('includes/footer.php'); 
      ?>
    </footer>
  </body>
</html> 