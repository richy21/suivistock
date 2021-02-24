<?php
require_once '../../src/model/modelProduit.php';
if(isset($_GET['action'])) {
    if($_GET['action'] == 'all') {
        $produits = getAllProduits();

        foreach ($produits as $p)
        {
            echo $p['nom'].':'.$p['qteStock'].'|';
        }
    }
}