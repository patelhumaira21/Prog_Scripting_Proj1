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
        <form class="form-horizontal" id="login_form" method="post" role="form">
          <h4><center>Log In</center></h4>
            <div class="form-group">
              <label class="control-label col-sm-4" for="user_name">User Name : </label>
              <div class="col-sm-4">
                <input type="text" id="login_user_name" name="user_name" class="form-control" placeholder="Enter User Name"/>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-4" for="password">Password : </label>
              <div class="col-sm-4">
                <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password"/>
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-offset-4 col-sm-8">
                <div class="checkbox">
                  <label><input type="checkbox" id="login_checkbox"> Remember me</label>
                </div>
              </div>
            </div>

            <div class="form-group">
              <div class="col-sm-offset-4 col-sm-8">
                <input type="submit" id="login_submit" name="login_submit" value="Log In" class="btn btn-default"/>
              </div>
            </div>

        </form>

           <?php  

            //check if form was submitted  
            if(isset($_POST['login_submit'])) 
            { 
              $username = $_POST['user_name']; //get username
              $password = $_POST['password']; //get password
              echo ('<h3 align=center>
                      Hello '.$username.' !!! You have logged in successfully. </h3>');
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