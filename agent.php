<h3>Gestion des agents</h3>

<?php
    $lAgent=null;
    if(isset($_GET['action']) && isset($_GET['idagent'])){
        $action=$_GET['action'];
        $idagent=$_GET['idagent'];

        switch($action){
            case 'sup':
                $unControleur->deleteAgent($idagent);
            break;
            case 'edit':
                $lAgent=$unControleur->selectWhereAgent($idagent);
            break;
        }
    }
    //Pour pouvoir sélectionner les labels
    $lesLabels=$unControleur->selectAllLabels();

    //Visualiser et insérer des agents
    require_once("vue/vue_insert_agent.php");
    if (isset($_POST['Valider'])){
        $unControleur->insertAgent($_POST);
    }
    if (isset($_POST['Modifier'])){
        $unControleur->updateAgent($_POST);
        header("Location: index.php?page=3");
    }
    
    $lesAgents=$unControleur->selectAllAgents();
    require_once("vue/vue_les_agents.php");
?>
