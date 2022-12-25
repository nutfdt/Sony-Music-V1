
<h2>Insertion d'une vente</h2>
<form method="post" action="">
    <table>
        <tr>
            <td>Nombre de Vente :</td>
            <td>
                <input type="text" name="nbVente" value="<?= ($laVenteP!=null)?$laVenteP['nbVente']: '' ?>">
            </td>
        </tr>
        <tr>
            <td>Prix par Vente :</td>
            <td>
                <input type="text" name="prixParVente" value="<?= ($laVenteP!=null)?$laVenteP['prixParVente']: '' ?>">
            </td>
        </tr>
        <tr>
            <td>Date :</td>
            <td>
                <input type="date" name="date" value="<?= ($laVenteP!=null)?$laVenteP['date']: '' ?>">
            </td>
        </tr>
        <tr>
            <td>Partenaire Physique :</td>
            <td>
                <select name="idpartenairep">
                    <?php
                        foreach($lesPartenairesP as $unPartenaireP){
                            echo "<option value='".$unPartenaireP['idpartenairep']."'>";
                            echo $unPartenaireP['entreprise']." - ".$unPartenaireP['adresseSiegeSocial'];
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
            <td>Album :</td>
            <td>
                <select name="idalbum">
                    <?php
                        foreach($lesAlbums as $unAlbum){
                            echo "<option value='".$unAlbum['idalbum']."'>";
                            echo $unArtiste['nom'];
                            echo "</option>";
                        }
                    ?>
                </select>
            </td>
        </tr>

        <?php
            if($laVenteP!=null){
                echo "<input type='hidden' name='idventep' value=".$laVenteP['idventep'].">";
            }
        ?>
        <tr>
            <td><input type="reset" name="Annuler"></td>
            <td><input type="submit" <?php 
                if($laVenteP!=null){
                    echo 'name ="Modifier" value="Modifier"';
                }
                else{
                    echo 'name="Valider" value="Valider"';
                }?>>
            </td>
        </tr>
    </table>