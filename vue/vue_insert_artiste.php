 
<h2>Insertion d'un artiste</h2>
<form method="post" action="" enctype='multipart/form-data'>
    <table>
        <tr>
            <td>Nom :</td>
            <td>
                <input type="text" name="nom" value="<?= ($lArtiste!=null)?$lArtiste['nom']: '' ?>">
            </td>
        </tr>
        <tr>
            <td>Prénom :</td>
            <td>
                <input type="text" name="prenom" value="<?= ($lArtiste!=null)?$lArtiste['prenom']: '' ?>">
            </td>
        </tr>
        <tr>
            <td>Nom de Scène :</td>
            <td>
                <input type="text" name="nomDeScene" value="<?= ($lArtiste!=null)?$lArtiste['nomDeScene']: '' ?>">
            </td>
        </tr>
        <tr>
            <td>Type Principal :</td>
            <td>
                <input type="text" name="typePrincipal" value="<?= ($lArtiste!=null)?$lArtiste['typePrincipal']: '' ?>">
            </td>
        </tr>
        <tr>
            <td>Email :</td>
            <td>
                <input type="text" name="email" value="<?= ($lArtiste!=null)?$lArtiste['email']: '' ?>">
            </td>
        </tr>
        <tr>
            <td>Téléphone :</td>
            <td>
                <input type="text" name="telephone" value="<?= ($lArtiste!=null)?$lArtiste['telephone']: '' ?>">
            </td>
        </tr>
        <tr>
        
      
            <td>Label :</td>
            <td>
                <select name="idlabel">
                    <?php
                        foreach($lesLabels as $unLabel){
                            echo "<option value='".$unLabel['idlabel']."'>";
                            echo $unLabel['nom']." ".$unLabel['adresse'];
                            echo "</option>";
                        }
                    ?>
                </select>
            </td>
        </tr>
        <tr> 
            <td>
                Image : 
                
            </td>
            <td>
            <input type="file" name="image" accept=".jpg, .jpeg, .png">
            </td>
        </tr>
        <?php
            if($lArtiste!=null){
                echo "<input type='hidden' name='idartiste' value=".$lArtiste['idartiste'].">";
            }
        ?>
        <tr>
            <td><input type="reset" name="Annuler"></td>
            <td><input type="submit" <?php 
                if($lArtiste!=null){
                    echo 'name ="Modifier" value="Modifier"';
                }
                else{
                    echo 'name="Valider" value="Valider"';
                }?>>
            </td>
        </tr>
    </table>