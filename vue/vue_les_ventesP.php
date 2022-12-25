<h2>Liste des Ventes</h2>

<table border="1">
    <tr>
        <td>Id Vente φ</td>
        <td>Nb Vente</td>
        <td>Prix par Vente</td>
        <td>Date</td>
        <td>Id Partenaire φ</td>
        <td>Id Artiste</td>
        <td>Id Album</td>
        <?php
            if($_SESSION['role']!='partenaireP'){
                //Si role==partenaireP alors cette partie ne sera pas visible
                echo '<td>Opérations</td>';
            }
        ?>
        
    </tr>
    <?php
        foreach($lesVentesP as $uneVenteP){
            echo "<tr>
            <td>".$uneVenteP['idventep']."</td>
            <td>".$uneVenteP['nbVente']."</td>
            <td>".$uneVenteP['prixParVente']."</td>
            <td>".$uneVenteP['date']."</td>
            <td>".$uneVenteP['idpartenairep']."</td>
            <td>".$uneVenteP['idartiste']."</td>
            <td>".$uneVenteP['idalbum']."</td>";
            //Opération supprimer et modifier
            if($_SESSION['role']!='partenaireP'){
                //Si role==partenaireP alors cette partie ne sera pas visible
                echo "<td>";
                echo "<a href='index.php?page=9&action=sup&idventep=".$uneVenteP['idventep']."'>";
                echo "<img src='images/sup.jpg' height='30' width='30'";
                echo "</a>";
                echo "<a href='index.php?page=9&action=edit&idventep=".$uneVenteP['idventep']."'>";
                echo "<img src='images/edit.png' height='30' width='30'";
                echo "</a>";
                echo "</td>";
            }
            echo "</tr>";
        }
    ?>
</table>