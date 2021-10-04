<?php 
$keyword = '';
if(isset($_POST['keyword'])){
    $keyword = $_POST['keyword'];
    
}

?>



<nav class="navbar navbar-expand-sm bg-light navbar-light text-primary" >
  <!-- Navbar content -->
  <div class="container">
        <a class="navbar-brand" href="#"> <span class="text-primary">LAUN</span>DARY</a>
        <button
         class="navbar-toggler" 
         type="button" 
         data-bs-toggle="collapse" 
         data-bs-target="#navbar"
         >
        <span class="navbar-toggler-icon"></span>
        </button>
  
    <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
            </ul>
  </div>
  </div>
</nav>
<form action="<?php ?>" method="post">
<section class="bg-light text-primary p-3">
    <div class="input-group search-input">
        
            <input type="text" class="form-control" name="keyword" placeholder="search" value="<?php echo $keyword; ?>" >
            <div class="input-group-append">
                <button class="btn btn-primary btn-lg" type="submit" id="button-addon2">Search</button>
            </div>
        
    </div>
</section>
</form>