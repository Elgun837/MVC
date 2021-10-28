<h1>Home page</h1>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Product name</th>
      <th scope="col">Category</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php 
    $count = 0;
      foreach ($sub as $pr) {
        $count = $count + 1;
        ?>

          <th scope="row"><?php echo $count ?></th>
            <td><?php echo $pr['pr_name'] ?></td>
            <td><?php echo $pr['category'] ?></td>
            <td><?php echo $pr['price'] ?></td>
            <td><a href="">edit</a></td>
          </tr>
        <?php } ?>
   
  </tbody>
</table>
