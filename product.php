<?php include('header.php'); ?>
<?php include('api.php'); ?>

<h2 class="product-list">Produktlista</h2>
<div class="titles-product">
    <h2>Bild</h2>
    <h2>Namn</h2>
    <h2>Kategori</h2>
    <h2>Pris</h2>
</div>

<?php 
//GET request som hämtar products från woocommerce
    $products = $woocommerce->get('products', ['per_page' => 5]);
    foreach ($products as $product) {
        echo '<div class="product">';
        foreach ($product->images as $index => $image) {
            if ($index === 0) {
                echo '<img src="' . $image->src . '" alt="' . $image->alt . '">';
            }
        }
        echo '<h2>' . $product->name . '</h2>';
        foreach ($product->categories as $category) {
        echo $category->name . ' ';
        }
        echo '<p>' . $product->price . ' kr</p>';
        echo '</div>';
    }
?>
