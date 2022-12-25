
<h2>Insertion d'une chanson</h2>
<form method="post" action="">
    <table>
        <tr>
            <td>Titre :</td>
            <td>
                <input type="text" name="titre" value="<?= ($laChanson!=null)?$laChanson['titre']: '' ?>">
            </td>
        </tr>
        <tr>
            <td>Sortie :</td>
            <td>
                <input type="date" name="sortie" value="<?= ($laChanson!=null)?$laChanson['sortie']: '' ?>">
            </td>
        </tr>
        <tr>
            <td>Durée :</td>
            <td>
                <input type="text" name="duree" value="<?= ($laChanson!=null)?$laChanson['duree']: '' ?>">
            </td>
        </tr>
        <tr>
            <td>Artiste :</td>
            <td>
                <select name="idartiste">
                    <?php
                        foreach($lesArtistes as $unArtiste){
                            echo "<option value='".$unArtiste['idartiste']."'>";
                            echo $unArtiste['nomDeScene']." - ".$unArtiste['typePrincipal'];
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
                            echo $unAlbum['nom'];
                            echo "</option>";
                        }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Catégorie :</td>
            <td>
                <select name="idcategorie">
                    <?php
                        foreach($lesCategories as $uneCategorie){
                            echo"<option value='".$uneCategorie['idcategorie']."'>";
                            echo $uneCategorie['type'];
                            echo "</option>";
                        }
                    ?>
                </select>
            </td>
        </tr>
        <?php
            if($laChanson!=null){
                echo "<input type='hidden' name='idchanson' value=".$laChanson['idchanson'].">";
            }
        ?>
        <tr>
            <td><input type="reset" name="Annuler"></td>
            <td><input type="submit" <?php 
                if($laChanson!=null){
                    echo 'name ="Modifier" value="Modifier"';
                }
                else{
                    echo 'name="Valider" value="Valider"';
                }?>>
            </td>
        </tr>
    </table>