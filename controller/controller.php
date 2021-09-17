<?php

require('./model/model.php');

function viewProducts()
{
    $model = new Product;
    $products = $model->products();
    require('./view/view.php');
}

function createProduct()
{
    $model = new Product;
    $create = $model->create();
    require('./add.php');
}

function readProduct()
{
    $model = new Product;
    $product = $model->read();
    require('./details.php');
}

function updateProduct()
{
    $model = new Product;
    $product = $model->update();
    require('./edit.php');
}

function deleteProduct()
{
    $model = new Product;
    $delete = $model->delete();
}
