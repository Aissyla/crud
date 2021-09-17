<?php

require('model.php');

function viewProducts()
{
    $products = products();
    require('view.php');
}

function createProduct()
{
    $create = create();
    require('add.php');
}

function readProduct()
{
    $product = read();
    require('details.php');
}

function updateProduct()
{
    $product = update();
    require('edit.php');
}

function deleteProduct()
{
    $delete = delete();
}
