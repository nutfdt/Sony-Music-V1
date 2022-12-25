
<h2>Insertion d'une vente</h2>
<form method="post" action="">
    <table>
        <tr>
            <td>Nombre de Vente :</td>
            <td>
                <input type="text" name="nbVente" value="<?= ($laVenteD!=null)?$laVenteD['nbVente']: '' ?>">
            </td>
        </tr>
        <tr>
            <td>Prix par Vente :</td>
            <td>
                <input type="text" name="prixParVente" value="<?= ($laVenteD!=null)?$laVenteD['prixParVente']: '' ?>">
            </td>
        </tr>
        <tr>
            <td>Date :</td>
            <td>
                <input type="date" name="date" value="<?= ($laVenteD!=null)?$laVenteD['date']: '' ?>">
            </td>
        </tr>
        <tr>
            <td>Partenaire Digital :</td>
            <td>
                <select name="idpartenaired">
                    <?php
                        foreach($lesPartenairesD as $unPartenaireD){
                            echo "<option value='".$unPartenaireD['idpartenaired']."'>";
                            echo $unPartenaireD['entreprise']." - ".$unPartenaireD['adresseMaisonMere'];
                            echo "</option>";
                        }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Artiste :</td>
            <td>
                <select name="idartiste">
                    <?php
                        foreach($lesArtistes as $unArtiste){
                            echo "<option value='".$unArtiste['idartiste']."'>";
                            echo $unArtiste['nomDeScene'];
                            echo "</option>";
                        }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Chanson :</td>
            <td>
                <select name="idchanson">
                    <?php
                        foreach($lesChansons as $uneChanson){
                            echo "<option value='".$uneChanson['idchanson']."'>";
                            echo $uneChanson['titre'];
                            echo "</option>";
                        }
                    ?>
                </select>
            </td>
        </tr>

        <?php
            if($laVenteD!=null){
                echo "<input type='hidden' name='idvented' value=".$laVenteD['idvented'].">";
            }
        ?>
        <tr>
            <td><input type="reset" name="Annuler"></td>
            <td><input type="submit" <?php 
                if($laVenteD!=null){
                    echo 'name ="Modifier" value="Modifier"';
                }
                else{
                    echo 'name="Valider" value="Valider"';
                }?>>
            </td>
        </tr>
    </table>