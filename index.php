<?php
    session_start();
    require_once("controleur/controleur.class.php");
    require_once("controleur/config_bdd.php");
    //Instanciation du Controleur
    $unControleur = new Controleur($serveur,$bdd,$user,$mdp);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sony_Music</title>
</head>
<body>
    <link rel="stylesheet" href="css/css.css">
    <div class="header">
        <a href="index.php?page=0" class="logo">
            <img src="images/sonylogo.png" height="50" width="50">
            Accueil
        </a>
        
            
            <?php
                 
                if(isset($_SESSION['email'])){
                    echo '<div class="header-right">';
                    //S'il y a connexion les pages seront visible en fonction des roles
                    if($_SESSION['role']=="admin" || $_SESSION['role']==['label']){
                        //Label et admin peuvent tout voir
                        echo'<a href="index.php?page=1">Catégorie</a>
                            <a href="index.php?page=2">Labels</a>
                            <a href="index.php?page=3">Agents</a>
                            <a href="index.php?page=4">Artistes</a>
                            <a href="index.php?page=5">Albums</a>
                            <a href="index.php?page=6">Chansons</a>
                            <a href="index.php?page=8">Partenaires Digitaux</a>
                            <a href="index.php?page=7">Partenaires Physique</a>
                            <a href="index.php?page=10">Vente Digitale</a>
                            <a href="index.php?page=9">Vente Physique</a>
                            <a href="index.php?page=11">
                                <img src="images/deconnexion.jpg" height="35" width="50">
                            </a>';
                    }
                    if($_SESSION['role']=='market'){
                        //Market ne peut acceder qu'aux partenaires
                        echo'<a href="index.php?page=8">Partenaire D</a>
                            <a href="index.php?page=7">Partenaire P</a>
                            <a href="index.php?page=11">
                                <img src="images/deconnexion.jpg" height="35" width="50">
                            </a>';
                    }
                    if($_SESSION['role']=='partenaireD'){
                        //Les partenaires digitaux ne peuvent qu'acceder a la page PartenaireD et VenteD
                        echo'<a href="index.php?page=8">Partenaire D</a>
                            <a href="index.php?page=10">Vente D</a>
                            <a href="index.php?page=11">
                                <img src="images/deconnexion.jpg" height="35" width="50">
                            </a>';
                    }
                    if($_SESSION['role']=='partenaireP'){
                        //Les partenaire physiques ne peuvent qu'acceder a la page PartenaireP et VenteP
                        echo'<a href="index.php?page=7">Partenaire P</a>
                            <a href="index.php?page=9">Vente P</a>
                            <a href="index.php?page=11">
                                <img src="images/deconnexion.jpg" height="35" width="50">
                            </a>';
                    }
                    echo '</div>';
                }
            ?>
        
    </div>
    <center>
        <?php
            if(!isset($_SESSION['email'])){
                //S'il n'y a pas de connexion
                require_once("vue/vue_connexions.php");
            }
            if(isset($_POST["Valider"])){
                //Verification si l'user existe
                $email=$_POST['email'];
                $mdp=$_POST['mdp'];
                $unUser= $unControleur->selectUser($email,$mdp);
                if($unUser==null){
                    //S'il n'y pas d'User
                    echo 'Veuillez vérifier vos identifiants !';
                }
                else{
                    //Connexion réussie !
                    $_SESSION['email']=$unUser['email'];
                    $_SESSION['nom']=$unUser['nom'];
                    $_SESSION['prenom']=$unUser['prenom'];
                    $_SESSION['role']=$unUser['role'];
                    //On recharge la page vers home
                    header("Location: index.php?page=0");

                }
            }
            if(isset($_GET["page"])){
                $page=$_GET["page"];
            }
            else{
                $page=0;
            }
            switch($page){
                case 0: require_once("home.php");
                    break;
                case 1: require_once("categorie.php");
                    break;
                case 2: require_once("label.php");
                    break;
                case 3: require_once("agent.php");
                    break;
                case 4: require_once("artiste.php");
                    break;
                case 5: require_once("album.php");
                    break;
                case 6: require_once("chanson.php");
                    break;
                case 7: require_once("partenaireP.php");
                    break;
                case 8: require_once("partenaireD.php");
                    break;
                case 9: require_once("venteP.php");
                    break;
                case 10: require_once("venteD.php");
                    break;
                case 12: require_once("cgu.php");
                break;
                case 11:
                    //Deconnexion
                    session_destroy();
                    header("Location: index.php");
                    break;
                case 12: require_once("cgu.php");
                    break;
                

            }
        ?>
    </center>



<footer class="footer-distributed">

      <div class="footer-left">

        <h3>Sony Music <span> FRANCE</span></h3>

        <p class="footer-links">
          <a href="index.php?page=0" class="link-1">Accueil</a>
          
          <a href="index.php?page=12">CGU</a>
          
          <a href="#">Contact</a>
        </p>

        <p class="footer-company-name">Sony Music Entertainment FRANCE © 2022</p>
      </div>

      <div class="footer-center">

        <div>
          <i class="fa fa-map-marker"></i>
          <p><span>52/54 rue de Châteaudun</span>75009, Paris</p>
        </div>

        <div>
          <i class="fa fa-phone"></i>
          <p>+33155074500</p>
        </div>

        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:support@company.com">contact@sonymusicfrance.fr</a></p>
        </div>

      </div>

      <div class="footer-right">

        <p class="footer-company-about">
          <span>En savoir plus sur Sony</span>
          Sony Music Entertainment FRANCE est un label de disques contrôlé par Sony Corporation of America.
        </p>

        <div class="footer-icons">

          <a href="https://fr-fr.facebook.com/sonymusicfr/" class="logo">
            <img src="images/facebook.png" height="50" width="50"></a>

            <a href="https://twitter.com/SonyMusicFr" class="logo">
            <img src="images/twitter.png" height="50" width="50"></a>

            <a href="https://www.instagram.com/sonymusicfrance/" class="logo">
            <img src="images/instagram.png" height="50" width="50"></a>

            <a href="https://www.linkedin.com/company/sony-music-entertainment/" class="logo">
            <img src="images/linkedin.png" height="50" width="50"></a>
            

        </div>

      </div>

    </footer>


</body>
</html>