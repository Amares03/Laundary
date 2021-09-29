
<!DOCTYPE html>
<html lang="eng">
<head>
	<meta charset="utf-8">
	<meta name="insert" content="width=device-width, inital-scale=1.0">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <!-- navigation and search -->
   <?php include('nav_and_search.php'); ?>
    
  <section class="p-5">
  <div class="container">
    <div class="row">
            <div class="col-md-6">
                <!-- forms -->
                <?php include('forms.php'); ?>
            </div>
            <div class="col-md-6">
                <?php include('table.php'); ?>
            </div>
        </div>
   </div>
  </section>
    
   

    <script src="js/bootstrap.js"></script>
</body>
</html>