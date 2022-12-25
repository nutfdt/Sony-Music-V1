<h3>Gestion des catégories</h3>

<?php
    $laCategorie=null;
    if(isset($_GET['action']) && isset($_GET['idcategorie'])){
        $action=$_GET['action'];
        $idcategorie=$_GET['idcategorie'];

        switch($action){
            case 'sup':
                $unControleur->deleteCategorie($idcategorie);
            break;
            case 'edit':
                $laCategorie=$unControleur->selectWhereCategorie($idcategorie);
            break;
        }
    }


    require_once("vue/vue_insert_categorie.php");
    if (isset($_POST['Valider'])){
        $unControleur->insertCategorie($_POST);
    }
    if (isset($_POST['Modifier'])){
        $unControleur->updateCategorie($_POST);
        header("Location: index.php?page=1");
    }
    
    $lesCategories=$unControleur->selectAllCategories();
    require_once("vue/vue_les_categories.php");
?>
