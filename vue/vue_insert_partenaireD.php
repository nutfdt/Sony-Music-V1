
<h2>Insertion d'un partenaire</h2>
<form method="post" action="">
    <table>
        <tr>
            <td>Entreprise :</td>
            <td>
                <input type="text" name="entreprise" value="<?= ($lePartenaireD!=null)?$lePartenaireD['entreprise']: '' ?>">
            </td>
        </tr>
        <tr>
            <td>Adresse Maison Mère :</td>
            <td>
                <input type="text" name="adresseMaisonMere" value="<?= ($lePartenaireD!=null)?$lePartenaireD['adresseMaisonMere']: '' ?>">
            </td>
        </tr>
        <tr>
            <td>Nombre Site de Streaming :</td>
            <td>
                <input type="text" name="nbSiteStreaming" value="<?= ($lePartenaireD!=null)?$lePartenaireD['nbSiteStreaming']: '' ?>">
            </td>
        </tr>
        <?php
            if($lePartenaireD!=null){
                echo "<input type='hidden' name='idpartenaired' value=".$lePartenaireD['idpartenaired'].">";
            }
        ?>
        <tr>
            <td><input type="reset" name="Annuler"></td>
            <td><input type="submit" <?php 
                if($lePartenaireD!=null){
                    echo 'name ="Modifier" value="Modifier"';
                }
                else{
                    echo 'name="Valider" value="Valider"';
                }?>>
            </td>
        </tr>
    </table>