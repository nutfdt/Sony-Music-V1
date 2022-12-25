<h3>Gestion des partenaires digitaux </h3>

<?php
    $lePartenaireD=null;
    if(isset($_GET['action']) && isset($_GET['idpartenaired'])){
        $action=$_GET['action'];
        $idpartenaired=$_GET['idpartenaired'];

        switch($action){
            case 'sup':
                $unControleur->deletePDigit($idpartenaired);
            break;
            case 'edit':
                $lePartenaireD=$unControleur->selectWherePDigit($idpartenaired);
            break;
        }
    }
    if($_SESSION['role']!='market'&& $_SESSION['role']!='partenaireD'){
    //Visualiser et insérer des partenaires digitaux
    require_once("vue/vue_insert_partenaireD.php");
    if (isset($_POST['Valider'])){
        $unControleur->insertPDigit($_POST);
    }
    if (isset($_POST['Modifier'])){
        $unControleur->updatePDigit($_POST);
        header("Location: index.php?page=8");
    }
    }
    $lesPartenairesD=$unControleur->selectAllPDigit();
    require_once("vue/vue_les_partenairesD.php");
?>
