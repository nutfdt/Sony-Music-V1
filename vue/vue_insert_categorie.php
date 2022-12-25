
<h2>Insertion d'une catégorie</h2>
<form method="post" action="">
    <table>
        <tr>
            <td>Type :</td>
            <td>
                <input type="text" name="type" value="<?= ($laCategorie!=null)?$laCategorie['type']: '' ?>">
            </td>
        </tr>
        <?php
            if($laCategorie!=null){
                echo "<input type='hidden' name='idcategorie' value=".$laCategorie['idcategorie'].">";
            }
        ?>
        <tr>
            <td><input type="reset" name="Annuler"></td>
            <td><input type="submit" <?php 
                if($laCategorie!=null){
                    echo 'name ="Modifier" value="Modifier"';
                }
                else{
                    echo 'name="Valider" value="Valider"';
                }?>>
            </td>
        </tr>
    </table>