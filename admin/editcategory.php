<?php 
 session_start();
require "include/functions.php"; ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Edit categuory</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/hover.css" rel="stylesheet" media="all"> <!-- Hover.CSS File -->
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
    <body> 
               <nav class="navbar navbar-inverse">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-nav" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Panel</a>
        </div>
        <div class="collapse navbar-collapse" id="app-nav">
          <ul class="nav navbar-nav">
            <li><a href="Cources prevuew.php">Cources</a></li>
            <li><a href="Articles prevuew.php">Articles</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="../admin-profile.php" ><?php echo $_SESSION["logged_name"]; ?> Profile</a>
                <li><a href="../massges.php">Massegs</a></li>
                <li><a href="logout.php">Log Out</a></li>
            </li>
          </ul>
        </div>
      </div>
    </nav>

      <ul class="nav nav-tabs">
          <li role="presentation" ><a href="category.php" style="color: chocolate;">Add Category</a></li>
          <li role="presentation" class="active"><a href="editcategory.php" style="color: #7aabf2;">Edit Category</a></li>
      </ul>
        <div class="admin">
            <div class="container">
            <div class="form_container">
        <form method="post" action=" <?PHP echo $_SERVER['PHP_SELF']?> " class="formValidation" >
        
  
         <h2>select category to delet or edit</h2>
         <select name="Category" class="in inputValidation form-control">  
               <option value="0">--SELECT CATEGORY--</option>
							<?PHP getCategory(); // => include folder => functions file ?>
             </select>
       
       <input type="submit" name="show" value="show" class="btn btn-primary inn btn-block">
							<?php editCat();  // => include folder => functions file ?>
                      <div class="errorMessage"></div>
                        
            <input type="submit" name="edit" value="Edit" class="btn btn-info inn btn-block" >
            <input type="submit" name="delete" value="Delete" class="btn btn-danger inn btn-block" onClick='return confirm("are you sure you wnt to delete this artical ?");' style="margin-bottom:300px;">
        </form>

        </div>

                 </div>
                </div>
        </div>
         <?php include "include/templates/footer.php"; ?>
            <script src="js/jquery.min.js"></script> <!-- Jquery Mini file -->
            <script src="js/bootstrap.min.js"></script> <!-- Latest compiled and minified JavaScript -->
            <script src="js/script.js"></script> <!-- Externa Js File file - My File -->
    </body>