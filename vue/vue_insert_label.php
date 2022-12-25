
<h2>Insertion d'un label</h2>
<form method="post" action="">
    <table>
        <tr>
            <td>Nom :</td>
            <td>
                <input type="text" name="nom" value="<?= ($leLabel!=null)?$leLabel['nom']: '' ?>">
            </td>
        </tr>
        <tr>
            <td>Adresse :</td>
            <td>
                <input type="text" name="adresse" value="<?= ($leLabel!=null)?$leLabel['adresse']: '' ?>">
            </td>
        </tr>
        <tr>
            <td>Téléphone :</td>
            <td>
                <input type="text" name="telephone" value="<?= ($leLabel!=null)?$leLabel['telephone']: '' ?>">
            </td>
        </tr>
        <tr>
            <td>Email :</td>
            <td>
                <input type="text" name="email" value="<?= ($leLabel!=null)?$leLabel['email']: '' ?>">
            </td>
        </tr>
        <tr>
            <td>Nombre d'Employés :</td>
            <td>
                <input type="text" name="nbEmployes" value="<?= ($leLabel!=null)?$leLabel['nbEmployes']: '' ?>">
            </td>
        </tr>
        <?php
            if($leLabel!=null){
                echo "<input type='hidden' name='idlabel' value=".$leLabel['idlabel'].">";
            }
        ?>
        <tr>
            <td><input type="reset" name="Annuler"></td>
            <td><input type="submit" <?php 
                if($leLabel!=null){
                    echo 'name ="Modifier" value="Modifier"';
                }
                else{
                    echo 'name="Valider" value="Valider"';
                }?>>
            </td>
        </tr>
    </table>