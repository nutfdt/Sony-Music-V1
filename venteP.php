<h3>Gestion des ventes physiques</h3>

<?php
    $laVenteP=null;
    if(isset($_GET['action']) && isset($_GET['idventep'])){
        $action=$_GET['action'];
        $idventep=$_GET['idventep'];

        switch($action){
            case 'sup':
                $unControleur->deleteVenteP($idventep);
            break;
            case 'edit':
                $laVenteP=$unControleur->selectWhereVentesP($idventep);
            break;
        }
    }
    //Insertion des partnaires physiques et des artistes et les albums
    $lesAlbums=$unControleur->selectAllAlbums();
    $lesPartenairesP=$unControleur->selectAllPPhys();
    $lesArtistes=$unControleur->selectAllArtistes();


    //Visualiser et insérer des vente physiques
    require_once("vue/vue_insert_venteP.php");
    if (isset($_POST['Valider'])){
        $unControleur->insertVenteP($_POST);
    }
    if (isset($_POST['Modifier'])){
        $unControleur->updateVentesP($_POST);
        header("Location: index.php?page=9");
    }
    $lesVentesP=$unControleur->selectAllVentesP();
    require_once("vue/vue_les_ventesP.php");
?>
