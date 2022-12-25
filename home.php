<html><FONT COLOR="white">
<?php 
require_once("controleur/controleur.class.php")
?>
<h3>Accueil du site</h3>
<table border="1">

    <tr>
    <h3> Top des ventes Digitale </h3>
        <td>Nom de Scène</td>
        <td>Photo</td>
    </tr>
  <?php 
    $TopADs=$unControleur->topVDMensuel();
    foreach($TopADs as $Top): ?>
        <tr>
                <td>
                <center>
                    <?= $Top['nomDeScene']?>
    </center>
                </td>
                <td> 
                <center>
                    <img src=<?= $Top['images']?> height="60" width="60" >
    </center>
                </td>

        </tr>
    <?php endforeach ?>
    </table>
   
    <table border="2">
    <tr>
    <h3> Top des ventes physique </h3>
        <td>Nom de Scène</td>
        <td>Photo</td>
        
    </tr>
  <?php 
    $TopV=$unControleur->topVPhysique();
    foreach($TopV as $TopP): ?>
        <tr>
                <td>
                <center>
                    <?= $TopP['nomDeScene']?>
                
    </center>
                </td>
                <td> 
                <center>
                    <img src=<?= $TopP['images']?> height="60" width="60" >
    </center>
                </td>

        </tr>
    <?php endforeach ?>
    </table>
    </FONT>
    </html>