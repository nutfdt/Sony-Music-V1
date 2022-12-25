<h3>Gestion des labels</h3>

<?php
    $leLabel=null;
    if(isset($_GET['action']) && isset($_GET['idlabel'])){
        $action=$_GET['action'];
        $idlabel=$_GET['idlabel'];

        switch($action){
            case 'sup':
                $unControleur->deleteLabel($idlabel);
            break;
            case 'edit':
                $leLabel=$unControleur->selectWhereLabel($idlabel);
            break;
        }
    }


    require_once("vue/vue_insert_label.php");
    if (isset($_POST['Valider'])){
        $unControleur->insertLabel($_POST);
    }
    if (isset($_POST['Modifier'])){
        $unControleur->updateLabel($_POST);
        header("Location: index.php?page=2");
    }
    
    $lesLabels=$unControleur->selectAllLabels();
    require_once("vue/vue_les_labels.php");
?>
