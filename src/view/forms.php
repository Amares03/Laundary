<?php
        $name = '';
        $phone = '';
        $type = '';
        $bezat = '';
        $nech = false;
        

      if($_SERVER['REQUEST_METHOD'] === 'POST'){
          $name = $_POST['name'];
          $phone = $_POST['phone'];
          $type = $_POST['type'];
          $bezat = $_POST['bezat'];
          if(isset($_POST['nech'])){
            $nech = true;
          }
            if(file_exists('data.json')){
              $data = file_get_contents('data.json');
              $dataArray = json_decode('data.json', true);
            }else{
              $dataArray = [];
            }
            $dataArray[$name] = [
              'phone' => $phone, 
              'type' => $type, 
              'bezat' => $bezat,
              'nech' => $nech
            ];
            file_put_contents('data.json', json_encode($dataArray, JSON_PRETTY_PRINT));    
      }
      
?>

<form action="<?php ?>" method="post">
    <label for="name">ስም</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="ስም" required>

    <label for="phone">ስልክ ቁጥር</label>
    <input type="number" class="form-control" id="phone" name="phone" placeholder="ስልክ ቁጥር" required>

    <label for="type">የልብስ አይነት</label>
      <select id="type" name="type" class="form-control">
        <option selected>ሱፍ</option>
        <option>ኮት</option>
        <option>ሱሪ</option>        
        <option>ሸሚዝ</option>        
        <option>ሹራብ</option>        
      </select>

      <label for="bezat">ብዛት</label>
      <input type="number" class="form-control" id="bezat" name="bezat" placeholder="ብዛት">

     
        <label class="form-check-label" for="nech">ነጭ</label>
        <input type="checkbox" class="form-check-input" id="nech" name="nech">
     
        <div class="container my-3">
            <button type="submit" class="btn btn-primary btn-lg">Sign in</button>
        </div>      
</form>