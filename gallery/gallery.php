<section class="products">
    <div class="container">
        <h3>Produkter til salg</h3>
        <?php
        require '../assets/incl/dbInfo.php';
        $query = "SELECT * FROM category";
        $result = $conn->query($query);
        ?>

        <ul class="categories">
            <li>
                <button type="button" href="#" class="filter-category active-category" value="*">Show all</button>
            </li>
            <?php while ($row = $result->fetch_assoc()) : ?>
                <li>
                    <button type="button" href="#" class="filter-category" value="<?= $row['id'] ?>"><?= $row['category_name'] ?></button>
                </li>
            <?php endwhile; ?>
        </ul>

        <div class="row products-content">
            <?php
            require 'assets/php/src/connection.php';
            $count = "SELECT count(*) FROM information_schema.columns WHERE table_name = 'products';";
            $count = $conn->query($count)->fetch_assoc();
            $query = "SELECT * FROM products LIMIT 5";
            $result = $conn->query($query);
            ?>
            <?php while ($row = $result->fetch_assoc()) : ?>
                <article class="col-lg-3 col-sm-6 col-xs-12">
                    <div class="p-card">
                        <div class="p-card-image">
                            <img src="assets/uploads/products/<?= $row['id'] ?>.<?= $row['product_filetype'] ?>"
                                 alt="">
                        </div>
                        <div class="p-card-content">
                            <h5><?= $row['product_name'] ?></h5>
                            <span><?= $row['product_price'] ?> DKK</span>
                            <?php if ($row['product_amount'] > 0) : ?>
                                <p><?= $row['product_amount'] ?> På Lager</p>
                            <?php else: ?>
                                <p class="sold">Udsolgt</p>
                            <?php endif; ?>
                        </div>
                        <a href="<?= $row['product_link'] ?>">
                            <div class="p-card-more">
                                Se mere
                            </div>
                        </a>
                    </div>
                </article>


            <?php endwhile; ?>
            <?php if($count['count(*)'] > 5) : ?>
                <input name="category" class="show-category" type="hidden" value="*">
                <button name="showmore" class="btn showmore" value="4">Vis flere <i style="vertical-align: middle;" class="material-icons">keyboard_arrow_down</i></button>
            <?php endif; ?>
        </div>
    </div>
</section>