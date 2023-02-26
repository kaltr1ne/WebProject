<?php
if (!isset($_SESSION)) {
    session_start();
}

require('../adminFunctions/controlAccess.php');
require('../crud/productCrud.php');

if (isset($_SESSION['skeAksesAdmin']) == true) {
    echo '<script>document.location="../admin/product.php"</script>';
} else {
    $productCrud = new productCrud();

    $productCrud->setProducts_ID($_GET['products_ID']);
    $productCrud->fshijProduktinSipasID();
}
?>