
<h2>Insertion d'un album</h2>
<form method="post" action="">
    <table>
        <tr>
            <td>Nom :</td>
            <td>
                <input type="text" name="nom" value="<?= ($lAlbum!=null)?$lAlbum['nom']: '' ?>">
            </td>
        </tr>
        <tr>
            <td>Année de Sortie :</td>
            <td>
                <input type="text" name="anneeSortie" value="<?= ($lAlbum!=null)?$lAlbum['anneeSortie']: '' ?>">
            </td>
        </tr>
        <tr>
            <td>Artiste :</td>
            <td>
                <select name="idartiste">
                    <?php
                        foreach($lesArtistes as $unArtiste){
                            echo"<option value='".$unArtiste['idartiste']."'>";
                            echo $unArtiste['nom']." ".$unArtiste['prenom']." -- ".$unArtiste['nomDeScene'];
                            echo "</option>";
                        }
                    ?>
                </select>
            </td>
        </tr>
        <?php
            if($lAlbum!=null){
                echo "<input type='hidden' name='idalbum' value=".$lAlbum['idalbum'].">";
            }
        ?>
        <tr>
            <td><input type="reset" name="Annuler"></td>
            <td><input type="submit" <?php 
                if($lAlbum!=null){
                    echo 'name ="Modifier" value="Modifier"';
                }
                else{
                    echo 'name="Valider" value="Valider"';
                }?>>
            </td>
        </tr>
    </table>