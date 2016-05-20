<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/favicon.ico">
    <title>About</title>

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
          <div class="page-header" align="center">
            <h2>About Me</h2>
            <p>A brief introduction about myself</p>
          </div>

          <div class="row thumbnail"> 
             <div class="col-sm-4">
              <h3>Personal Details <span class="glyphicon glyphicon-user" aria-hidden="true"></h3>
              <label class="label-default">Name : </label>
              <label class="control-label">Humaira Patel</label><br/>
              <label class="label-default">Email id : </label>
              <label class="control-label">patelhumaira21@gamil.com</label><br/>
              <label class="label-default">RedID : </label>
              <label class="control-label">819819033</label>
            </div>

            <div class="col-sm-4">
              <h3>Technical Skills <span class="glyphicon glyphicon-education" aria-hidden="true"></span></h3>
              <ul>
                <li>Java</li>
                <li>Informatica</li>
                <li>PL/SQL</li>
                <li>Data Warehousing</li>
                <li>HTML5 & CSS</li>
                <li>Javascript</li>
                <li>PHP</li>
              </ul>
            </div>

            <div class="col-sm-4">
              <h3>Work Experience <span class="glyphicon glyphicon-road" aria-hidden="true"></h3>        
              <p>I have 2.5 years of corporate experience working as a Software Engineer at Accenture 
                where my domain of work was mainly Data Warehousing and Business Intelligence.</p>
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