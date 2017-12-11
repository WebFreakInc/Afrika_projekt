<!-- Header  -->
<?php require ("assets/incl/head.php") ?>

<section class="products">
    <div class="container">
        <h3>Produkter til salg</h3>
        <?php
        require 'assets/incl/dbInfo.php';
        $query = "SELECT * FROM categories";
        $result = $dbConnect->query($query);
        ?>

        <ul class="categories">
            <li>
                <button type="button" href="#" class="filter-category active-category" value="*">Vis Alle</button>
            </li>
            <?php while ($row = $result->fetch_assoc()) : ?>
                <li>
                    <button type="button" href="#" class="filter-category" value="<?= $row['category'] ?>"><?= $row['category'] ?></button>
                </li>
            <?php endwhile; ?>
        </ul>
        <section class="container products__main">
        <div class="products__container">
            <?php
            $count = "SELECT count(*) FROM information_schema.columns WHERE table_name = 'products';";
            $count = $dbConnect->query($count)->fetch_assoc();
            $query = "SELECT * FROM products LIMIT 10";
            $result = $dbConnect->query($query);

            while ($row = $result->fetch_assoc()) : ?>

                <div class="card products">
                    <img class="card-img-top" src="assets/img/products/<?=$row['product_id']?>.<?=$row['img_path']?>" alt="produkt-billede">
                    <div class="card-block">
                        <h4 class="card-title products__name"><?=$row['name']?></h4>
                        <p class="card-text products__description"><?=$row['description']?></p>
                        <a href="#" class="products__price"><?=$row['price']?> kr</a>
                    </div>
                </div>

            <?php endwhile;

            if($count['count(*)'] > 10) : ?>
                <input name="categories" class="show-category" type="hidden" value="*">
                <button name="showmore" class="btn showmore" value="4">Vis flere<i style="vertical-align: middle;" class="material-icons">keyboard_arrow_down</i></button>
            <?php endif; ?>
        </div>
        </section>
    </div>
    </div>
</section>

<?php require ("assets/incl/footer.php")?>