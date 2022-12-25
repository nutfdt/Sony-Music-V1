<h3>Gestion des ventes </h3>

<?php
    $laVenteD=null;
    if(isset($_GET['action']) && isset($_GET['idvented'])){
        $action=$_GET['action'];
        $idvented=$_GET['idvented'];

        switch($action){
            case 'sup':
                $unControleur->deleteVenteD($idvented);
            break;
            case 'edit':
                $laVenteD=$unControleur->selectWhereVenteD($idvented);
            break;
        }
    }
    //Insertion des partnaires digitaux et des artistes et les chansons
    $lesPartenairesD=$unControleur->selectAllPDigit();
    $lesArtistes=$unControleur->selectAllArtistes();
    $lesChansons=$unControleur->selectAllChansons();


    //Visualiser et insérer des vente digitales
    require_once("vue/vue_insert_venteD.php");
    if (isset($_POST['Valider'])){
        $unControleur->insertVenteD($_POST);
    }
    if (isset($_POST['Modifier'])){
        $unControleur->updateVenteD($_POST);
        header("Location: index.php?page=10");
    }
    $lesVentesD=$unControleur->selectAllVentesD();
    require_once("vue/vue_les_ventesD.php");
?>
