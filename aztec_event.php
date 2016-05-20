<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">
    <title>Aztec Event</title>
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
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-3" align="center">
            <img class="img-responsive" src="images/mfhussain1.jpg" alt="M. F. Hussain"/><br/><br/>
            <img class="img-responsive" src="images/mfhussain2.jpg" alt="M. F. Hussain"/>
          </div>
          <div class="col-sm-9 "style="text-align:center; color:purple">
            <h3>ArtztecA Next BIG ART Event is on 24th February.</h3> <br/>
              <?php 
                  date_default_timezone_set('America/Los_Angeles'); 
                  $eventDate = new DateTime('2016-02-24 17:30:00');

                  $today = date("Y-m-d H:i:s"); 
                  $startDate = date_create($today);            
                  $interval = $startDate->diff($eventDate) ;  //calculates the date difference
                  $interval = $interval->format('%d days %h hours %i minutes');  //sets the format to be displayed

                  echo ("<h2> Only <strong>$interval</strong> to go...</h2>
                        <h3> Hurry Up!!!!</h3>
                        <h4>Please Register to be a part of the event.<h4>");
              ?>
          </div>
        </div>
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