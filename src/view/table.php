<?php 

$persons = [];
if(file_exists('data.json')){
  $data = file_get_contents('data.json');
  $dataArray = json_decode('data.json');
}

?>



<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">ስም</th>
      <th scope="col">ስልክ ቁጥር</th>
      <th scope="col">የልብስ አይነት</th>
      <th scope="col">ብዛት</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($persons as $name => $person): ?>
      <tr>
        <th scope="row">1</th>
        <td><?php echo $name ?></td>
        <td><?php echo $name['phone'] ?></td>
        <td><?php echo $name['type'] ?></td>
        <td><?php echo $name['bezat'] ?></td>
        <td>
        <button type="button" class="btn btn-outline-danger">delete</button>
        </td>
      </tr>
    <?php endforeach; ?>
      
  </tbody>
</table>