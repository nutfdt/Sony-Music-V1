<h3>Gestion des partenaires physiques </h3>

<?php
    $lePartenaireP=null;
    if(isset($_GET['action']) && isset($_GET['idpartenairep'])){
        $action=$_GET['action'];
        $idpartenairep=$_GET['idpartenairep'];

        switch($action){
            case 'sup':
                $unControleur->deletePPhy($idpartenairep);
            break;
            case 'edit':
                $lePartenaireP=$unControleur->selectWherePPhy($idpartenairep);
            break;
        }
    }
    if($_SESSION['role']!='market' && $_SESSION['role']!='partenaireP'){
         //Visualiser et insérer des partenaire physique
        require_once("vue/vue_insert_partenaireP.php");
        if (isset($_POST['Valider'])){
            $unControleur->insertPPhy($_POST);
        }
        if (isset($_POST['Modifier'])){
            $unControleur->updatePPhy($_POST);
            header("Location: index.php?page=7");
        }
    }
   
    $lesPartenairesP=$unControleur->selectAllPPhys();
    require_once("vue/vue_les_partenairesP.php");
?>
