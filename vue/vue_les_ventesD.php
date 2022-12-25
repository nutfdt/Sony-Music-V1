<h2>Liste des Ventes</h2>

<table border="1">
    <tr>
        <td>Id Vente δ</td>
        <td>Nb Vente</td>
        <td>Prix par Vente</td>
        <td>Date</td>
        <td>Id Partenaire δ</td>
        <td>Id Artiste</td>
        <td>Id Chanson</td>
        <?php
            if($_SESSION['role']!='partenaireD'){
                //Si role==partenaireD alors cette partie ne sera pas visible
                echo '<td>Opérations</td>';
            }
        ?>
        
    </tr>
    <?php
        foreach($lesVentesD as $uneVenteD){
            echo "<tr>
            <td>".$uneVenteD['idvented']."</td>
            <td>".$uneVenteD['nbVente']."</td>
            <td>".$uneVenteD['prixParVente']."</td>
            <td>".$uneVenteD['date']."</td>
            <td>".$uneVenteD['idpartenaired']."</td>
            <td>".$uneVenteD['idartiste']."</td>
            <td>".$uneVenteD['idchanson']."</td>";
            //Opération supprimer et modifier
            if($_SESSION['role']!='partenaireD'){
                //Si role==partenaireD alors cette partie ne sera pas visible
                echo "<td>";
                echo "<a href='index.php?page=10&action=sup&idvented=".$uneVenteD['idvented']."'>";
                echo "<img src='images/sup.jpg' height='30' width='30'";
                echo "</a>";
                echo "<a href='index.php?page=10&action=edit&idvented=".$uneVenteD['idvented']."'>";
                echo "<img src='images/edit.png' height='30' width='30'";
                echo "</a>";
                echo "</td>";
            }
            echo "</tr>";
        }
    ?>
</table>