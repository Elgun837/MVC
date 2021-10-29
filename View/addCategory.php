<h1> Add Category</h1>

<center>
    <form action="postCategory" method="POST">
        <input type="text" name="category_name">
		<button type="submit">Add category</button>
    </form>

</center>
<br><br><br>

<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Category</th>
      <th scope="col">Update</th>
      <th scope="col">Delete</th>
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
            <td><?php echo $pr['category_name'] ?></td>
            <td><a href="edit/<?= $pr['id'] ?>">Update</a></td>
            <td><a href="delete/<?= $pr['id'] ?>">Delete</a></td>
          </tr>
        <?php } ?>
   
  </tbody>
</table>
