<h2>Liste des Partenaires</h2>

<table border="1">
    <tr>
        <td>Id Partenaire φ</td>
        <td>Entreprise</td>
        <td>Adresse Siège Social</td>
        <td>Nb Magasins</td>
        <td>Opérations</td>
    </tr>
    <?php
        foreach($lesPartenairesP as $unPartenaireP){
            echo "<tr>
            <td>".$unPartenaireP['idpartenairep']."</td>
            <td>".$unPartenaireP['entreprise']."</td>
            <td>".$unPartenaireP['adresseSiegeSocial']."</td>
            <td>".$unPartenaireP['nbMagasins']."</td>";
            //Opération supprimer et modifier
            echo "<td>";
            echo "<a href='index.php?page=7&action=sup&idpartenairep=".$unPartenaireP['idpartenairep']."'>";
            echo "<img src='images/sup.jpg' height='30' width='30'";
            echo "</a>";
            echo "<a href='index.php?page=7&action=edit&idpartenairep=".$unPartenaireP['idpartenairep']."'>";
            echo "<img src='images/edit.png' height='30' width='30'";
            echo "</a>";
            echo "</td>";
            echo "</tr>";
        }
    ?>
</table>