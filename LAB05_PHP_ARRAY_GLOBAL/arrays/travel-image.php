<?php

include 'travel-data.php';   

asort($continents);
asort($countries);

// retrieve form data 
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
   if ( isset($_GET['id']) ) {
	  // TODO 3: complete the code here so that 
	  //         the following code works properly
      $image = $images[$_GET['id']];
   }
}   

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta http-equiv="Content-Type" content="text/html; 
   charset=UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="description" content="">
   <meta name="author" content="">
   <title>Travel Template</title>

   <link rel="shortcut icon" href="../../assets/ico/favicon.png">

   <!-- Google fonts used in this theme  -->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:700' rel='stylesheet' type='text/css'>
   <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,800,600,700,300' rel='stylesheet' type='text/css'>  

   <!-- Bootstrap core CSS -->
   <link href="bootstrap3_travelTheme/dist/css/bootstrap.min.css" rel="stylesheet">
   <!-- Custom styles for this template -->
   <link href="bootstrap3_travelTheme/theme.css" rel="stylesheet">  

   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!--[if lt IE 9]>
   <script src="bootstrap3_travelTheme/assets/js/html5shiv.js"></script>
   <script src="bootstrap3_travelTheme/assets/js/respond.min.js"></script>
   <![endif]-->
</head>

<body>

<?php include 'travel-header.php'; ?>
   
<div class="container">  <!-- start main content container -->
   <div class="row">  <!-- start main content row -->
      <div class="col-md-3">  <!-- start left navigation rail column -->
         <?php include 'travel-left-rail.php'; ?>
      </div>  <!-- end left navigation rail --> 
      
      <div class="col-md-9">  <!-- start main content column -->
         <ol class="breadcrumb">
           <li><a href="#">Home</a></li>
           <li><a href="Chapter09-project02.php">Favorites</a></li>
           <li class="active"><?php echo $image['title']; ?></li>
         </ol> 

         <h1><?php echo $image['title']; ?></h1>
         <div class="row">
            <div class="col-md-8">
                       
               <img src="images/travel/medium/<?php echo $image['path']; ?>" class="img-responsive" alt="Responsive image">
               
            </div>
            <div class="col-md-4">
               <div class="panel panel-primary">
                  <div class="panel-body">
                      <p>By <a href="#"><?php echo utf8_encode($image['user']); ?></a></p>
                  <p>Taken in <a href="#"><?php echo $image['country']; ?></a></p>
                  <p><?php echo $image['description']; ?></p>
                   </div>
               </div>
            </div>
         </div>


       

      </div>  <!-- end main content column -->
   </div>  <!-- end main content row -->
</div>   <!-- end main content container -->
   
<?php include 'travel-footer.php'; ?>   

   
   
 <!-- Bootstrap core JavaScript
 ================================================== -->
 <!-- Placed at the end of the document so the pages load faster -->
 <script src="bootstrap3_travelTheme/assets/js/jquery.js"></script>
 <script src="bootstrap3_travelTheme/dist/js/bootstrap.min.js"></script>
 <script src="bootstrap3_travelTheme/assets/js/holder.js"></script>
</body>
</html>