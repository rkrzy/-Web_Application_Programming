<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Chapter 8</title>
   <?php include 'book-data.php'; ?>
   <!-- Bootstrap core CSS -->
   <link href="bootstrap3_defaultTheme/dist/css/bootstrap.css" rel="stylesheet">

   <!-- Custom styles for this template -->
   <link href="chapter08-project01.css" rel="stylesheet">

   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!--[if lt IE 9]>
   <script src="bootstrap3_defaultTheme/assets/js/html5shiv.js"></script>
   <script src="bootstrap3_defaultTheme/assets/js/respond.min.js"></script>
   <![endif]-->
</head>

<body>

<div class="container">
   <div class="row">
      <div class="col-md-3">
      </div>
      <div cl
      ass="col-md-6">
         <div id="login">
            <div class="page-header">
               <h2>Login</h2> 
            </div>
            <form role="form">
              <div class="form-group has-error">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" value="<?php echo htmlspecialchars($email); ?>">
                <!-- <p class="help-block">Enter an email</p> -->
				<p class="help-block"></p>
              </div>
              <div class="form-group has-error">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password" value="<?php echo htmlspecialchars($password); ?>">
                <!-- <p class="help-block">Email and password not found</p> -->
				<p class="help-block"></p>
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Server</label>
                <select name="server" class="form-control">
                <?php
                  $dayOfWeek = date("w");
                  for ($i = 0; $i <= 6; $i++) {
                      $selected = ($i == $dayOfWeek) ? "selected" : "";
                      echo "<option $selected>Server $i</option>";
                  }
                  ?>
                </select>             
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>  
         </div>
      </div>
      <div class="col-md-3">
      </div>
   </div>  
</div>  <!-- end container -->

 <!-- Bootstrap core JavaScript
 ================================================== -->
 <!-- Placed at the end of the document so the pages load faster -->
 <script src="bootstrap3_defaultTheme/assets/js/jquery.js"></script>
 <script src="bootstrap3_defaultTheme/dist/js/bootstrap.min.js"></script>    
</body>
</html>
