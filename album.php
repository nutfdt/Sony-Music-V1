<h3>Gestion des albums</h3>

<?php
    $lAlbum=null;
    if(isset($_GET['action']) && isset($_GET['idalbum'])){
        $action=$_GET['action'];
        $idalbum=$_GET['idalbum'];

        switch($action){
            case 'sup':
                $unControleur->deleteAlbum($idalbum);
            break;
            case 'edit':
                $lAlbum=$unControleur->selectWhereAlbum($idalbum);
            break;
        }
    }
    //Pour pouvoir sélectionner les artiste
    $lesArtistes=$unControleur->selectAllArtistes();

    //Visualiser et insérer des artistes
    require_once("vue/vue_insert_album.php");
    if (isset($_POST['Valider'])){
        $unControleur->insertAlbum($_POST);
    }
    if (isset($_POST['Modifier'])){
        $unControleur->updateAlbum($_POST);
        header("Location: index.php?page=5");
    }
    
    $lesAlbums=$unControleur->selectAllAlbums();
    require_once("vue/vue_les_albums.php");
?>
