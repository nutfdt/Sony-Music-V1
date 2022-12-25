<h3>Gestion des artistes</h3>

<?php
    $lArtiste=null;
    if(isset($_GET['action']) && isset($_GET['idartiste'])){
        $action=$_GET['action'];
        $idartiste=$_GET['idartiste'];

        switch($action){
            case 'sup':
                $unControleur->deleteArtiste($idartiste);
            break;
            case 'edit':
                $lArtiste=$unControleur->selectWhereArtiste($idartiste);
            break;
        }
    }
    //Pour pouvoir sélectionner les labels
    $lesLabels=$unControleur->selectAllLabels();

    //Visualiser et insérer des artistes
    require_once("vue/vue_insert_artiste.php");
    if (isset($_POST['Valider'])){
        require_once("Upload.php");
        $_POST['fichier'] = $targetfile;
        $unControleur->insertArtiste($_POST);
    }
    if (isset($_POST['Modifier'])){
        $unControleur->updateArtiste($_POST);
        header("Location: index.php?page=4");
    }
    
    $lesArtistes=$unControleur->selectAllArtistes();
    require_once("vue/vue_les_artistes.php");
?>
