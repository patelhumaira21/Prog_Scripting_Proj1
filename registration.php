<!DOCTYPE html>
<html lang="en">
  <head>  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">
    <title>Registration</title>
    <style type="text/css">



    </style>
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
        <form class="form-horizontal" id="register_form" method="post" role="form">
          <h5>Please enter the following information to register:</h5>
            <div class="form-group">
              <label class="control-label col-sm-2" for="last_name">Last Name : </label>
              <div class="col-sm-4">
                <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Enter Last Name"/>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-2" for="first_name">Last Name : </label>
              <div class="col-sm-4">
                <input type="text" id="first_name" name="first_name" class="form-control" placeholder="Enter First Name"/>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-2" for="date_of_birth">Date of Birth : </label>
              <div class="col-sm-4">
                <input type="date" id="date_of_birth" name="date_of_birth" class="form-control"/>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-2" for="user_name">User Name : </label>
              <div class="col-sm-4">
                <input type="text" id="user_name" name="user_name" class="form-control" placeholder="Enter User Name"/>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-2" for="fav_color">Favorite Color : </label>
              <div class="col-sm-4">
                <input type="text" id="fav_color" name="fav_color" class="form-control" placeholder="Enter Favorite Color"/>
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-offset-3 col-sm-9">
                <input type="submit" name="register_submit" id="register_submit" value="Submit" class="btn btn-default"/>
              </div>
            </div>
          </form>
          <?php  

            //check if form was submitted  
            if(isset($_POST['register_submit'])) 
            { 
              $first_name = $_POST['first_name']; //get first name
              $last_name = $_POST['last_name']; //get last name
              $fav_color = $_POST['fav_color']; //get first name
              echo ('<h3 align=center>
                      Welcome '.$first_name.' '.$last_name.' !!! 
                      Your favourite color is 
                      <strong><span style="color:'.$fav_color.';">'.$fav_color.'</span></strong>.</h3>');
            }    
          ?>
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