
<!DOCTYPE html>
<html lang="eng">
<head>
	<meta charset="utf-8">
	<meta name="insert" content="width=device-width, inital-scale=1.0">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/all.min.css">
	<link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="sticky-top">
    <!-- navigation and search -->
   <?php include('nav_and_search.php'); ?>
   
</div>
<section >
  <div class="container">
        <div class="row ">
            <div class="row justify-content-center" style="margin-bottom:-1000px; ">
                <div class="card w-50 p-3 invisible " id = "visiblity" style=" height:420px;" >
                    <!-- forms -->
                    <?php include('forms.php'); ?>
                </div>
            </div>
        
            <div class="w-75 p-3" id="table">
                <?php include('table.php'); ?>
            </div>
        </div>
  </div>
</section>
    
   

    <script src="js/bootstrap.js"></script>
    <script src="javaScript.js"></script>
</body>
</html>