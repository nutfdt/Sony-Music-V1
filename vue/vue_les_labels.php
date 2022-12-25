<h2>Liste des labels</h2>

<table border="1">
    <tr>
        <td>Id Label</td>
        <td>Nom</td>
        <td>Adresse</td>
        <td>Téléphone</td>
        <td>Email</td>
        <td>Nombre Employés</td>
        <td>Opérations</td>
    </tr>
    <?php
        foreach($lesLabels as $unLabel){
            echo "<tr>
            <td>".$unLabel['idlabel']."</td>
            <td>".$unLabel['nom']."</td>
            <td>".$unLabel['adresse']."</td>
            <td>".$unLabel['telephone']."</td>
            <td>".$unLabel['email']."</td>
            <td>".$unLabel['nbEmployes']."</td>";
            //Opération supprimer et modifier
            echo "<td>";
            echo "<a href='index.php?page=2&action=sup&idlabel=".$unLabel['idlabel']."'>";
            echo "<img src='images/sup.jpg' height='30' width='30'";
            echo "</a>";
            echo "<a href='index.php?page=2&action=edit&idlabel=".$unLabel['idlabel']."'>";
            echo "<img src='images/edit.png' height='30' width='30'";
            echo "</a>";
            echo "</td>";
            echo "</tr>";
        }
    ?>
</table>