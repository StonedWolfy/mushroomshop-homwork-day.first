 <?php
  require_once 'parts/header.php';

$products = $connect->query("SELECT * FROM `products`");
$products = $products->fetchAll(PDO::FETCH_ASSOC);
 ?>
<div class="main">
<?php foreach ($products as $product ) { ?>
<div class="card">
    <a href="index.php?product=<?= $product['name']; ?>">
        <img src="img/<?= $product['img'];?>" alt="<?= $product['rus_name'];?>">
    </a>
    <div class="label"><?= $product['rus_name'] ?><br><?= $product['price']?> рублей</div>
    <button type="submit">Добавить в корзину</button>
</div>
<? } ?>
</div>
</body>
</html>