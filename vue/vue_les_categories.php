<h2>Liste des catégories</h2>



<table border="1">
    <tr>
        <td>Id Catégorie</td>
        <td>Type</td>
        <td>Opérations</td>
    </tr>
    <?php
        foreach($lesCategories as $uneCategorie){
            echo "<tr>
            <td>".$uneCategorie['idcategorie']."</td>
            <td>".$uneCategorie['type']."</td>";
            //Opération supprimer et modifier
            echo "<td>";
            echo "<a href='index.php?page=1&action=sup&idcategorie=".$uneCategorie['idcategorie']."'>";
            echo "<img src='images/sup.jpg' height='30' width='30'";
            echo "</a>";
            echo "<a href='index.php?page=1&action=edit&idcategorie=".$uneCategorie['idcategorie']."'>";
            echo "<img src='images/edit.png' height='30' width='30'";
            echo "</a>";
            echo "</td>";
            echo "</tr>";
        }
    ?>
</table>