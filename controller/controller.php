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
    require('./view/add.php');
}

function readProduct()
{
    $model = new Product;
    $product = $model->read();
    require('./view/details.php');
}

function updateProduct()
{
    $model = new Product;
    $product = $model->update();
    require('./view/edit.php');
}

function deleteProduct()
{
    $model = new Product;
    $delete = $model->delete();
}
