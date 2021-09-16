<?php
require('controller.php');

if (isset($_GET['action'])) {
    if ($_GET['action'] == 'viewProducts') {
        viewProducts();
    } elseif ($_GET['action'] == 'createProduct') {
        createProduct();
    } elseif ($_GET['action'] == 'readProduct') {
        readProduct();
    } elseif ($_GET['action'] == 'updateProduct') {
        updateProduct();
    } elseif ($_GET['action'] == 'deleteProduct') {
        deleteProduct();
    }
} else {
    viewProducts();
}
