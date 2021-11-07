<?php 
  require 'vendor/autoload.php';
  include_once 'includes/dbh.inc.php';
  include_once 'includes/user.inc.php';
  include_once 'includes/viewUser.inc.php';

  use Andegna\Converter\FromJdnConverter;
$person = new User();

$datas = $person->getAllUsers();

  
?>


<button type="button" class="btn btn-light" id="btn"><i class="fas fa-plus"></i></button>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">ስም</th>
      <th scope="col">ስልክ ቁጥር</th>
      <th scope="col">የልብስ አይነት</th>
      <th scope="col">ብዛት</th>
      <th scope="col">የሚመለስበት ቀን</th>
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
        <td><?php echo $data['return_date']; ?></td>
       
        <td>
        <button type="button" class="btn btn-light"><i class="fas fa-user-minus"></i>
</button>
        </td>
      </tr>
    <?php endforeach; ?>
      
  </tbody>
</table>