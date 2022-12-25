<h2>Liste des Partenaires</h2>

<table border="1">
    <tr>
        <td>Id Partenaire δ</td>
        <td>Entreprise</td>
        <td>Adresse Maison Mere</td>
        <td>Nb Site Streaming</td>
        <?php
        if($_SESSION['role']!='market'){
            //Si role==market alors cette partie ne sera pas visible
            echo '<td>Opérations</td>';
        }
        
        ?>
    </tr>
    <?php
        foreach($lesPartenairesD as $unPartenaireD){
            echo "<tr>
            <td>".$unPartenaireD['idpartenaired']."</td>
            <td>".$unPartenaireD['entreprise']."</td>
            <td>".$unPartenaireD['adresseMaisonMere']."</td>
            <td>".$unPartenaireD['nbSiteStreaming']."</td>";
            //Opération supprimer et modifier
            if($_SESSION['role']!='market'){
                //Si role==market alors cette partie ne sera pas visible
                echo "<td>";
                echo "<a href='index.php?page=8&action=sup&idpartenaired=".$unPartenaireD['idpartenaired']."'>";
                echo "<img src='images/sup.jpg' height='30' width='30'";
                echo "</a>";
                echo "<a href='index.php?page=8&action=edit&idpartenaired=".$unPartenaireD['idpartenaired']."'>";
                echo "<img src='images/edit.png' height='30' width='30'";
                echo "</a>";
                echo "</td>";
            }
            echo "</tr>";
        }
    ?>
</table>