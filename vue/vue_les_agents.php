<h2>Liste des agents</h2>

<table border="1">
    <tr>
        <td>Id Agent</td>
        <td>Nom</td>
        <td>Prénom</td>
        <td>Email</td>
        <td>Téléphone</td>
        <td>Id Label</td>
        <td>Opérations</td>
    </tr>
    <?php
       foreach($lesAgents as $unAgent){
            echo "<tr>
            <td>".$unAgent['idagent']."</td>
            <td>".$unAgent['nom']."</td>
            <td>".$unAgent['prenom']."</td>
            <td>".$unAgent['email']."</td>
            <td>".$unAgent['telephone']."</td>
            <td>".$unAgent['idlabel']."</td>";
            //Opération supprimer et modifier
        if(isset($_SESSION['email']) and $_SESSION['role']=="admin")
       { 
            echo "<td>";
            echo "<a href='index.php?page=3&action=sup&idagent=".$unAgent['idagent']."'>";
            echo "<img src='images/sup.jpg' height='30' width='30'";
            echo "</a>";
            echo "<a href='index.php?page=3&action=edit&idagent=".$unAgent['idagent']."'>";
            echo "<img src='images/edit.png' height='30' width='30'";
            echo "</a>";
            echo "</td>";
            echo "</tr>";
        }
    }
    ?>
</table>