<?php 
include '../config.php';

$sql="SELECT * from users";
$result=$conn->query($sql);


 ?>

  <div class="licontainer">
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>

    </tr>
  </thead>
   <?php foreach ($result as $value) { ?>
  <tbody>
    <tr id="<?php echo $value['id']; ?>">
      <td data-target="name"><?php echo $value['name'] ?></td>
      <td data-target="address"><?php echo $value['address'] ?></td>
      <td data-target="email"><?php echo $value['email'] ?></td>
      <td data-target="password"><?php echo $value['password'] ?></td>
      <td>
        <i class="fa fa-trash" id="deleleBtn" data-id="<?php echo $value['id']; ?>"></i>
        <i class="fas fa-edit" id="editBtn" data-id="<?php echo $value['id']; ?>" data-bs-toggle="modal" data-bs-target="#editstatic"></i>
      </td>

    </tr>
  </tbody>
<?php } ?>
</table>

    
  </div>

