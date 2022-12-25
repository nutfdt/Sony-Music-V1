
<h2>Insertion d'un agent</h2>
<form method="post" action="">
    <table>
        <tr>
            <td>Nom :</td>
            <td>
                <input type="text" name="nom" value="<?= ($lAgent!=null)?$lAgent['nom']: '' ?>">
            </td>
        </tr>
        <tr>
            <td>Prénom :</td>
            <td>
                <input type="text" name="prenom" value="<?= ($lAgent!=null)?$lAgent['prenom']: '' ?>">
            </td>
        </tr>
        <tr>
            <td>Email :</td>
            <td>
                <input type="text" name="email" value="<?= ($lAgent!=null)?$lAgent['email']: '' ?>">
            </td>
        </tr>
        <tr>
            <td>Téléphone :</td>
            <td>
                <input type="text" name="telephone" value="<?= ($lAgent!=null)?$lAgent['telephone']: '' ?>">
            </td>
        </tr>
        <tr>
            <td>Label :</td>
            <td>
                <select name="idlabel">
                    <?php
                        foreach($lesLabels as $unLabel){
                            echo"<option value='".$unLabel['idlabel']."'>";
                            echo $unLabel['nom']." ".$unLabel['adresse'];
                            echo "</option>";
                        }
                    ?>
                </select>
            </td>
        </tr>
        <?php
            if($lAgent!=null){
                echo "<input type='hidden' name='idagent' value=".$lAgent['idagent'].">";
            }
        ?>
        <tr>
            <td><input type="reset" name="Annuler"></td>
            <td><input type="submit" <?php 
                if($lAgent!=null){
                    echo 'name ="Modifier" value="Modifier"';
                }
                else{
                    echo 'name="Valider" value="Valider"';
                }?>>
            </td>
        </tr>
    </table>