
<h2>Insertion d'un partenaire</h2>
<form method="post" action="">
    <table>
        <tr>
            <td>Entreprise :</td>
            <td>
                <input type="text" name="entreprise" value="<?= ($lePartenaireP!=null)?$lePartenaireP['entreprise']: '' ?>">
            </td>
        </tr>
        <tr>
            <td>Adresse Siège Social :</td>
            <td>
                <input type="text" name="adresseSiegeSocial" value="<?= ($lePartenaireP!=null)?$lePartenaireP['adresseSiegeSocial']: '' ?>">
            </td>
        </tr>
        <tr>
            <td>Nombre de Magasins :</td>
            <td>
                <input type="text" name="nbMagasins" value="<?= ($lePartenaireP!=null)?$lePartenaireP['nbMagasins']: '' ?>">
            </td>
        </tr>
        <?php
            if($lePartenaireP!=null){
                echo "<input type='hidden' name='idpartenairep' value=".$lePartenaireP['idpartenairep'].">";
            }
        ?>
        <tr>
            <td><input type="reset" name="Annuler"></td>
            <td><input type="submit" <?php 
                if($lePartenaireP!=null){
                    echo 'name ="Modifier" value="Modifier"';
                }
                else{
                    echo 'name="Valider" value="Valider"';
                }?>>
            </td>
        </tr>
    </table>