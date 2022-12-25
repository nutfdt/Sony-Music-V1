<h2>Liste des artistes</h2>

<table border="1">
    <tr>
        <td>Id Artiste</td>
        <td>Nom</td>
        <td>Prénom</td>
        <td>Nom de Scène</td>
        <td>Type Principal</td>
        <td>Email</td>
        <td>Téléphone</td>
        <td>Id Label</td>
        <td>Opérations</td>
    </tr>
    <?php
        foreach($lesArtistes as $unArtiste){
            echo "<tr>
            <td>".$unArtiste['idartiste']."</td>
            <td>".$unArtiste['nom']."</td>
            <td>".$unArtiste['prenom']."</td>
            <td>".$unArtiste['nomDeScene']."</td>
            <td>".$unArtiste['typePrincipal']."</td>
            <td>".$unArtiste['email']."</td>
            <td>".$unArtiste['telephone']."</td>
            <td>".$unArtiste['idlabel']."</td>";
            //Opération supprimer et modifier
            echo "<td>";
            echo "<a href='index.php?page=4&action=sup&idartiste=".$unArtiste['idartiste']."'>";
            echo "<img src='images/sup.jpg' height='30' width='30'";
            echo "</a>";
            echo "<a href='index.php?page=4&action=edit&idartiste=".$unArtiste['idartiste']."'>";
            echo "<img src='images/edit.png' height='30' width='30'";
            echo "</a>";
            echo "</td>";
            echo "</tr>";
        }
    ?>
</table>