<?php include('inc/header.php');  ?>



<div class="container">
    <div class="row">
        <div class="col-12 ">
            <h1 class="text-center display-4 border my-5 p-2"> All User</h1>
        </div>
        <div class="col-sm-10 mx-auto">
            <div class="border my-3">
            <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
      <?php include "classes/user.php"; $i=1; ?>
      <?php foreach(user::data() as $row): ?>

    <tr>
      <th scope="row"><?php echo$i++; ?></th>
      <td><?php echo $row->name; ?></td>
      <td><?php echo $row->email; ?></td>
      <td><?php echo $row->mobile; ?></td>

    </tr>
    <?php endforeach;?>
  </tbody>
</table>


            </div>

        </div>
    </div>
</div>




<?php  include('inc/footer.php');  ?> 


















<?php include('inc/footer.php');  ?>