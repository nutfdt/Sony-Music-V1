<h2>Liste des chansons</h2>

<table border="1">
    <tr>
        <td>Id Chanson</td>
        <td>Titre</td>
        <td>Sortie</td>
        <td>Durée</td>
        <td>Id Artiste</td>
        <td>Id Album</td>
        <td>Id Catégorie</td>
        <td>Opérations</td>
    </tr>
    <?php
        foreach($lesChansons as $uneChanson){
            echo "<tr>
            <td>".$uneChanson['idchanson']."</td>
            <td>".$uneChanson['titre']."</td>
            <td>".$uneChanson['sortie']."</td>
            <td>".$uneChanson['duree']."</td>
            <td>".$uneChanson['idartiste']."</td>
            <td>".$uneChanson['idalbum']."</td>
            <td>".$uneChanson['idcategorie']."</td>";
            //Opération supprimer et modifier
            echo "<td>";
            echo "<a href='index.php?page=6&action=sup&idchanson=".$uneChanson['idchanson']."'>";
            echo "<img src='images/sup.jpg' height='30' width='30'";
            echo "</a>";
            echo "<a href='index.php?page=6&action=edit&idchanson=".$uneChanson['idchanson']."'>";
            echo "<img src='images/edit.png' height='30' width='30'";
            echo "</a>";
            echo "</td>";
            echo "</tr>";
        }
    ?>
</table>