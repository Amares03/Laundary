<?php 
  include_once 'includes/dbh.inc.php';
  include_once 'includes/user.inc.php';
  include_once 'includes/viewUser.inc.php';



$person = new User();

$datas = $person->getAllUsers();



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
    <?php foreach($datas as $data ): ?>
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
    <?php endforeach; ?>
      
  </tbody>
</table>