<?php

require('modele.php');

function viewProducts()
{
    $produits = produits();
    require('affichage.php');
}

function createProduct()
{
    $create = create();
    require('add.php');
}

function readProduct()
{
    $produit = read();
    require('details.php');
}

function updateProduct()
{
    $produit = update();
    require('edit.php');
}

function deleteProduct()
{
    $delete = delete();
}
