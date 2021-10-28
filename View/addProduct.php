<h1>Add Product</h1>


<form action="postProduct" method="POST">
    <input type="text" name="product_name"><br><br>
    <input type="text" name="price"><br><br>
   
    <select id="cat_select" name="cat-select">
    <?php 
    foreach ($sub as $cat) { ?>
          <option value="<?php echo $cat['category_name']; ?>"><?php echo $cat['category_name']; ?></option>
        <?php } ?>
    </select> <br><br>
    <button type="submit"> Add product</button>
</form>