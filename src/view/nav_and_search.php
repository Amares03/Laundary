<?php
        include_once 'includes/dbh.inc.php';
        include_once 'includes/user.inc.php';
        include_once 'includes/viewUser.inc.php';
        include_once 'includes/dbas.inc.php';

        $key = '';
        if(isset($_POST['search'])){
        $key = $_POST['keyword'];
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
            <input type="text" class="form-control" name="keyword" placeholder="search" value="<?php echo $key; ?>" >
            <div class="input-group-append">
                <button class="btn btn-primary btn-lg" type="submit" id="button-addon2" name= "search" >Search</button>
            </div>
    </div>
    <?php
      if(isset($_POST['search']) && $key != ''){ 
        $keyword = $_POST['keyword'];
        $persons = new Search();      
        $datas = $persons->searchUsers($keyword);
    
     ?>
    <div class="input-group" name="searchResult">
        <?php if($datas != "not found"): ?>
    <?php foreach($datas as $data ): ?>

      <table class="table table-striped">
         <tbody>
              <tr>
                    <th scope="row"><?php echo $data['id']; ?></th>
                    <td><?php echo $data['name']; ?></td>
                    <td><?php echo $data['phone']; ?></td>
                    <td><?php echo $data['aynet']; ?></td>
                    <td><?php echo $data['bzat']; ?></td>
                    <td>
                    <button type="button" class="btn btn-outline-danger">delete</button>
                    </td>
              </tr>
        </tbody>
      </table>
  
    <?php endforeach; ?>
    <?php endif; ?>
    </div>
    <?php }//end of if statement ?>
</section>
</form>