<?php
require_once '../../model/modelProduit.php';
include "../../../header.php";
$produits = getAllProduits();
?>
    <div class="content">
    <div class="container">
    <div class="row">
        <div class="col-md-12 mb-4 page-header">
            <h2 class="page-title">GESTION PRODUITS</h2>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">Ajout de produit</div>
            <div class="card-body">
                <?php
                if (isset($_GET['ok'])) {
                    if ($_GET['ok'] == 1) {
                        echo '<div class="alert alert-success" role="alert">Ajouté avec succes!</div>';
                    } else {
                        echo '<div class="alert alert-danger" role="alert">Echec d\'ajout !</div>';
                    }
                }
                ?>
                <form class="needs-validation" novalidate method="POST" action="/suivistock/controller/produit"
                      accept-charset="utf-8">
                    <div class="form-group">
                        <label for="ref">Reference du produit</label>
                        <input type="text" class="form-control" name="ref" value="<?= genererRefPr() ?>" readonly>
                    </div>
                    <div class="form-row">

                        <div class="form-group col-md-7">
                            <label for="nom">Nom du produit</label>
                            <input type="text" class="form-control" name="nom" placeholder="Nom du produit" required>
                            <div class="valid-feedback">Looks good!</div>
                            <div class="invalid-feedback">Please enter the name.</div>
                        </div>
                        <div class="form-group col-md-5">
                            <label for="qte">Quantite Stock</label>
                            <input type="number" class="form-control" name="qte" placeholder="Qte stock du produit"
                                   required>
                            <div class="valid-feedback">Looks good!</div>
                            <div class="invalid-feedback">Please enter the quantity!</div>
                        </div>
                    </div>
                    <button type="submit" name="saveProdiut" class="btn btn-primary"><i class="fas fa-save"></i> Ajouter
                        produit
                    </button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-12 mt-4">
    <div class="card">
    <div class="card-header">Liste des produits</div>
    <div class="card-body">
    <p class="card-title"></p>
    <table class="table table-hover" id="dataTables-example" width="100%">
    <thead>
    <tr>
        <th>Reference</th>
        <th>nom</th>
        <th>Quantite Stock</th>
        <th>Id User</th>
    </tr>
    </thead>
    <tbody>
<?php
foreach ($produits as $p) {
    ?>
    <tr>
        <td><?= $p['ref'] ?></td>
        <td><?= $p['nom'] ?></td>
        <td><?= $p['qteStock'] ?></td>
        <td><?= $p['idUser'] ?></td>
    </tr>
    <?php
}
    ?>
    </tbody>
    </table>
    </div>
    </div>
    </div>
    </div>
    </div>
    <?php include "../../../footer.php"; ?>