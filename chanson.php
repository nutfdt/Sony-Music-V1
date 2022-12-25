<h3>Gestion des chansons</h3>

<?php
    $laChanson=null;
    if(isset($_GET['action']) && isset($_GET['idchanson'])){
        $action=$_GET['action'];
        $idchanson=$_GET['idchanson'];

        switch($action){
            case 'sup':
                $unControleur->deleteChanson($idchanson);
            break;
            case 'edit':
                $laChanson=$unControleur->selectWhereChanson($idchanson);
            break;
        }
    }
    //Pour pouvoir sélectionner les artistes, les albums et les catégories
    $lesArtistes=$unControleur->selectAllArtistes();
    $lesAlbums=$unControleur->selectAllAlbums();
    $lesCategories=$unControleur->selectAllCategories();
    

    //Visualiser et insérer des artistes
    require_once("vue/vue_insert_chanson.php");
    if (isset($_POST['Valider'])){
        $unControleur->insertChanson($_POST);
    }
    if (isset($_POST['Modifier'])){
        $unControleur->updateChanson($_POST);
        header("Location: index.php?page=6");
    }
    
    $lesChansons=$unControleur->selectAllChansons();
    require_once("vue/vue_les_chansons.php");
?>
