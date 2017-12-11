<?php
if(empty($_POST['category']) && empty($_POST['showmore'])) {
    return;
}
require 'dbInfo.php';
$limit = $_POST['showmore']+10;
if($_POST['category'] == "*") {
    $query = "SELECT * FROM products LIMIT $limit";
    $count = "SELECT count(*) FROM products;";
    $count = $dbConnect->query($count)->fetch_assoc();
}else{
    $query = "SELECT * FROM `products` WHERE category = '".$_POST['category']."' LIMIT $limit";
    $count = "SELECT count(*) FROM products WHERE category = '".$_POST['category']."'";
    $count = $dbConnect->query($count)->fetch_assoc();
}
$result = $dbConnect->query($query);
?>

<?php while ($row = $result->fetch_assoc()) : ?>
    <div class="card products">
        <img class="card-img-top" src="assets/img/products/<?=$row['product_id']?>.<?=$row['img_path']?>" alt="produkt-billede">
        <div class="card-block">
            <h4 class="card-title products__name"><?=$row['name']?></h4>
            <p class="card-text products__description"><?=$row['description']?></p>
            <a href="#" class="products__price"><?=$row['price']?> kr</a>
        </div>
    </div>
<?php endwhile; ?>

<?php if($count['count(*)'] > $limit) : ?>
    <input name="category" class="show-category" type="hidden" value="<?=$_POST['category']?>">
    <button name="showmore" class="btn showmore" value="<?=$limit?>">Vis flere <i style="vertical-align: middle;" class="material-icons">keyboard_arrow_down</i></button>
<?php endif;
?>


