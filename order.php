<?php include('header.php'); ?>
<?php include('api.php'); ?>

<h2 class="product-list">Beställningar</h2>
<div class="titles-product">
    <h2>Order id</h2>
    <h2>Status</h2>
    <h2>Totalbelopp</h2>
    <h2>Datum</h2>
</div>

<?php 
//GET request som hämtar orders från woocommerce
    $orders = $woocommerce->get('orders', ['per_page' => 2]);
    foreach ($orders as $order) {
        echo '<div class="order">';
        echo '<h2>' . $order->id . '</h2>';
        echo '<h2>' . $order->status . '</h2>';
        echo '<p>' . $order->total . ' kr</p>';
        echo '<p>' . $order->date_created . '</p>';
        echo '</div>';
    }
?>