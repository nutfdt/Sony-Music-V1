<h2>Liste des albums</h2>

<table border="1">
    <tr>
        <td>Id Album</td>
        <td>Nom</td>
        <td>Année de Sortie</td>
        <td>Id Artiste</td>
        <td>Opérations</td>
    </tr>
    <?php
        foreach($lesAlbums as $unAlbum){
            echo "<tr>
            <td>".$unAlbum['idalbum']."</td>
            <td>".$unAlbum['nom']."</td>
            <td>".$unAlbum['anneeSortie']."</td>
            <td>".$unAlbum['idartiste']."</td>";
            //Opération supprimer et modifier
            echo "<td>";
            echo "<a href='index.php?page=5&action=sup&idalbum=".$unAlbum['idalbum']."'>";
            echo "<img src='images/sup.jpg' height='30' width='30'";
            echo "</a>";
            echo "<a href='index.php?page=5&action=edit&idalbum=".$unAlbum['idalbum']."'>";
            echo "<img src='images/edit.png' height='30' width='30'";
            echo "</a>";
            echo "</td>";
            echo "</tr>";
        }
    ?>
</table>