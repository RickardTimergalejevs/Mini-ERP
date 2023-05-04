<?php

require __DIR__ . '/vendor/autoload.php';

use Automattic\WooCommerce\Client;

//Registrerar WooCommerce API med webbshop länk och 2 nycklar
$woocommerce = new Client(
    'http://localhost/grupp-projekt',
    'ck_177069fd60f39143600b38199f79a22636ada669',
    'cs_3c9977c61bf28100fa9714af220f231ff30a09ce',
    [
        'wp_api' => true,
        'version' => 'wc/v3',
        'query_string_auth' => true // Force Basic Authentication as query string true and using under HTTPS
    ]
);


?>