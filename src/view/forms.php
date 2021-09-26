<?php 
  $day = date(' D-d-M-Y ');  

?>



<!DOCTYPE html>
<html lang="eng">
    <head>
        <meta charset="utf-8">
        <meta name="insert" content="width=device-width, inital-scale=1.0">
        <title>መጫን</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    </head>
    <?php include('header1.php'); ?>
        <h1 class="h1">customer form <br> </h1>
        <form action="form_store.php" method="POST">
        <div class="row">
                <div class="form-group col-md-4">
                    <label class="col-form-label">ቀን <br><?php echo date(' D-d-M-Y ');  ?></label>
                </div>   
                <div class="form-group col-md-4">
                    <label for="role">ተራ ቁጥር</label>
                    <input type="number" class="form-control" id="role" name="id" aria-describedby="help" placeholder="ተራ ቁጥር አስገባ">
                    <small id="help" class="form-text text-muted">እባክዎ ይህን ቁጥር ድጋሚ አያስገቡ።</small>
                </div>
                <div class="form-group col-md-4">
                    <label for="name">ስም</label>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="help" placeholder="ስም">
                    <small id="help" class="form-text text-muted">ስልክ ቁጥርዎን ያስገቡ</small>
                </div>
                <div class="form-group col-md-4">
                    <label for="phone">ስልክ</label>
                    <input type="number" class="form-control" id="phone" name="phone" aria-describedby="help" aria-placeholder="+251">
                    <small id="help" class="form-text text-muted">ስልክ ቁጥርዎን ያስገቡ</small>
                </div>
        </div>
        <div class="row">
          <div class="form-group col-md-4">
              <label for="inputState">የልብስ አይነት</label>
              <select id="inputState" name="lebs" class="form-control">
                <option >suf</option>
                <option>jeans</option>
                <option>kuta</option>
                <option>bird libs</option>
              </select>
          </div>
          <div class="form-group col-md-4">
              <label for="bezat">ብዛት</label>
              <select class="form-control" id="bezat" name="bezat">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
              </select>
          </div>
        </div><br>
                <button type="submit" class="btn btn-primary">Submit</button> 
        </form>
        <script src="js/bootstrap.js"></script>
    </body>

</html>