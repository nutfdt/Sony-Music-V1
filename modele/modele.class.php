<?php
	class Modele
	{
		private $pdo ;
		public function __construct ($serveur, $bdd, $user, $mdp)
		{
			$this->pdo = null;

			try
			{
				//CONNEXION A LA BDD
				$this->pdo= new PDO("mysql: host=".$serveur.";dbname=".$bdd,$user, $mdp);
			}
			catch(PDOException $exp)
			{
				//Levée d'exception
				//En cas d'erreur de connexion à la bdd ce message apparaît
				echo "Erreur de connexion au serveur";
				echo $exp->getMessage();
			}

		}
	///***********ARTISTES**************///
		public function insertArtiste($tab)
			{
				$requete ="insert into artiste values (null, :nom, :prenom, :nomDeScene, :typePrincipal, :email, :telephone,:images, :idlabel);";
				$donnees =array(
					":nom"=>$tab['nom'],
					":prenom"=>$tab['prenom'],
					":nomDeScene"=>$tab['nomDeScene'],
					":typePrincipal"=>$tab['typePrincipal'],
					":email"=>$tab['email'],
					":telephone"=>$tab['telephone'],
					":images"=>$tab['fichier'],
					":idlabel"=>$tab['idlabel']
				);
				if($this->pdo != null)
				{
					//on prepare la requete
					$insert = $this->pdo->prepare($requete);
					$insert->execute($donnees);
				}
			}

		public function selectAllArtistes()
			{
				$requete="select * from artiste;";
				if($this->pdo !=null)
				{
					$select=$this->pdo->prepare($requete);
					$select->execute();
					//extraction de tous les Artistes
					return $select->fetchAll();
				}else
				{
					return null;
				}
			}
		public function deleteArtiste($idartiste)
    		{
        		$requete = "delete from artiste where idartiste =".$idartiste.";";
        		if($this->pdo != null)
				{
					//on prepare la requete
					$delete = $this->pdo->prepare($requete);
					$delete->execute();
				}
    }
  		public function selectWhereArtiste($idartiste)
    		{
     		   $requete = "select * from artiste where idartiste =" .$idartiste.";";
      			if($this->pdo !=null)
				{
					$select=$this->pdo->prepare($requete);
					$select->execute();
					//extraction de tous les Artistes
					return $select->fetch();
				}else
				{
					return null;
				}
			}
    	public function updateArtiste($tab)
    		{

        		$requete = "update artiste set nom=:nom, prenom=:prenom, nomDeScene=:nomDeScene, typePrincipal=:typePrincipal, email=:email, telephone=:telephone, idlabel=:idlabel where idartiste= :idartiste;";
        		$donnees =array(
					":idartiste" => $tab['idartiste'],
					":nom"=>$tab['nom'],
					":prenom"=>$tab['prenom'],
					":nomDeScene"=>$tab['nomDeScene'],
					":typePrincipal"=>$tab['typePrincipal'],
					":email"=>$tab['email'],
					":telephone"=>$tab['telephone'],
					":idlabel"=>$tab['idlabel']
				);
        		
       			if($this->pdo != null)
				{
					//on prepare la requete
					$update = $this->pdo->prepare($requete);
					$update->execute($donnees);
				}
    }
 		public function searchArtistes($mot)
    		{
   		    	$requete = "select * from artiste where nom like '%".$mot."%'or prenom like '%".$mot."%' or email like '%".$mot."%' or telephone like '%".$mot."%' or idlabel like='%".$mot."%';";
 	    	   if($this->pdo !=null)
				{
					$select=$this->pdo->prepare($requete);
					$select->execute();
					//extraction de tous les Artistes
					return $select->fetch();
				}else
				{
					return null;
        		}
			}
	///***********LABELS**************///
		public function insertLabel($tab)
			{
				$requete ="insert into label values (null, :nom,:adresse, :telephone, :email, :nbEmployes);";
				$donnees =array(
					":nom"=>$tab['nom'],
					":adresse"=>$tab['adresse'],
					":telephone"=>$tab['telephone'],
					":email"=>$tab['email'],
					":nbEmployes"=>$tab['nbEmployes']
				);
				if($this->pdo != null)
				{
					//on prepare la requete
					$insert = $this->pdo->prepare($requete);
					$insert->execute($donnees);
				}
			}

		public function selectAllLabels()
			{
				$requete="select * from label;";
				if($this->pdo !=null)
				{
					$select=$this->pdo->prepare($requete);
					$select->execute();
					//extraction de tous les Labels
					return $select->fetchAll();
				}else
				{
					return null;
				}
			}
		public function deletelabel($idlabel)
    		{
        		$requete = "delete from label where idlabel =".$idlabel.";";
        		if($this->pdo != null)
				{
					//on prepare la requete
					$delete = $this->pdo->prepare($requete);
					$delete->execute();
				}
    		}
  		public function selectWherelabel($idlabel)
    		{
     		   $requete = "select * from label where idlabel =" .$idlabel.";";
      			if($this->pdo !=null)
				{
					$select=$this->pdo->prepare($requete);
					$select->execute();
					//extraction de tous les Labels
					return $select->fetch();
				}else
				{
					return null;
				}
			}
    	public function updatelabel($tab)
    		{

        		$requete ="update label set nom=:nom, adresse=:adresse, telephone= :telephone, email= :email, nbEmployes= :nbEmployes where idlabel=:idlabel;";
				$donnees =array(
					":idlabel"=>$tab['idlabel'],
					":nom"=>$tab['nom'],
					":adresse"=>$tab['adresse'],
					":telephone"=>$tab['telephone'],
					":email"=>$tab['email'],
					":nbEmployes"=>$tab['nbEmployes']
				);
        		
       			if($this->pdo != null)
				{
					//on prepare la requete
					$update = $this->pdo->prepare($requete);
					$update->execute($donnees);
				}
    		}
			public function searchLabels($mot)
    		{
   		    	$requete = "select * from label where nom like '%".$mot."%'or adresse like '%".$mot."%' or telephone like '%".$mot."%' or email like '%".$mot."%' or nbEmployes like '%".$mot."%';";
 	    	   if($this->pdo !=null)
				{
					$select=$this->pdo->prepare($requete);
					$select->execute();
					//extraction de tous les Labels
					return $select->fetch();
				}else
				{
					return null;
        		}
			}

	///***********AGENT**************///
		public function insertAgent($tab)
			{
				$requete ="insert into agent values (null, :nom, :prenom, :email, :telephone, :idlabel);";
				$donnees =array(
					":nom"=>$tab['nom'],
					":prenom"=>$tab['prenom'],
					":email"=>$tab['email'],
					":telephone"=>$tab['telephone'],
					":idlabel"=>$tab['idlabel']
				);
				if($this->pdo != null)
				{
					//on prepare la requete
					$insert = $this->pdo->prepare($requete);
					$insert->execute($donnees);
				}
			}

		public function selectAllAgents()
			{
				$requete="select * from agent;";
				if($this->pdo !=null)
				{
					$select=$this->pdo->prepare($requete);
					$select->execute();
					//extraction de tous les Agents
					return $select->fetchAll();
				}else
				{
					return null;
				}
			}
		public function deleteAgent($idagent)
    		{
        		$requete = "delete from agent where idagent =".$idagent.";";
        		if($this->pdo != null)
				{
					//on prepare la requete
					$delete = $this->pdo->prepare($requete);
					$delete->execute();
				}
    		}
  		public function selectWhereAgent($idagent)
    		{
     		   $requete = "select * from agent where idagent =" .$idagent.";";
      			if($this->pdo !=null)
				{
					$select=$this->pdo->prepare($requete);
					$select->execute();
					//extraction de tous les Agents
					return $select->fetch();
				}else
				{
					return null;
				}
			}
    	public function updateAgent($tab)
    		{

        		$requete ="update agent set nom= :nom, prenom= :prenom, email= :email, telephone= :telephone, idlabel= :idlabel where idagent=:idagent;";
				$donnees =array(
					":idagent"=>$tab['idagent'],
					":nom"=>$tab['nom'],
					":prenom"=>$tab['prenom'],
					":email"=>$tab['email'],
					":telephone"=>$tab['telephone'],
					":idlabel"=>$tab['idlabel']
				);
        		
       			if($this->pdo != null)
				{
					//on prepare la requete
					$update = $this->pdo->prepare($requete);
					$update->execute($donnees);
				}
    		}
			public function searchAgents($mot)
    		{
   		    	$requete = "select * from label where nom like '%".$mot."%'or adresse like '%".$mot."%' or telephone like '%".$mot."%' or email like '%".$mot."%' or nbEmployes like '%".$mot."%' or idlabel like '%".$mot."%';";
 	    	   if($this->pdo !=null)
				{
					$select=$this->pdo->prepare($requete);
					$select->execute();
					//extraction de tous les Agents
					return $select->fetch();
				}else
				{
					return null;
        		}
			}



	///***********Partenaires digitaux**************///
		public function insertPDigit($tab)
			{
				$requete ="insert into partenairedigital values (null, :entreprise, :adresseMaisonMere, :nbSiteStreaming)";
				$donnees =array(
					":entreprise"=>$tab['entreprise'],
					":adresseMaisonMere"=>$tab['adresseMaisonMere'],
					":nbSiteStreaming"=>$tab['nbSiteStreaming']
				);
				if($this->pdo != null)
				{
					//on prepare la requete
					$insert = $this->pdo->prepare($requete);
					$insert->execute($donnees);
				}
			}

		public function selectAllPDigit()
			{
				$requete="select * from partenairedigital;";
				if($this->pdo !=null)
				{
					$select=$this->pdo->prepare($requete);
					$select->execute();
					//extraction de tous les Partenaires Digitaux
					return $select->fetchAll();
				}else
				{
					return null;
				}
			}
		public function deletePDigit($idpartenaired)
    		{
        		$requete = "delete from partenairedigital where idpartenaired =".$idpartenaired.";";
        		if($this->pdo != null)
				{
					//on prepare la requete
					$delete = $this->pdo->prepare($requete);
					$delete->execute();
				}
    		}
  		public function selectWherePDigit($idpartenaired)
    		{
     		   $requete = "select * from partenairedigital where idpartenaired =" .$idpartenaired.";";
      			if($this->pdo !=null)
				{
					$select=$this->pdo->prepare($requete);
					$select->execute();
					//extraction de tous les Partenaires Digitaux
					return $select->fetch();
				}else
				{
					return null;
				}
			}
    	public function updatePDigit($tab)
    		{

        		$requete ="update partenairedigital set entreprise= :entreprise, adresseMaisonMere= :adresseMaisonMere, nbSiteStreaming= :nbSiteStreaming where idpartenaired=:idpartenaired;";
				$donnees =array(
					"idpartenaired"=>$tab['idpartenaired'],
					":entreprise"=>$tab['entreprise'],
					":adresseMaisonMere"=>$tab['adresseMaisonMere'],
					":nbSiteStreaming"=>$tab['nbSiteStreaming']
				);
        		
       			if($this->pdo != null)
				{
					//on prepare la requete
					$update = $this->pdo->prepare($requete);
					$update->execute($donnees);
				}
    		}
			public function searchPDigits($mot)
    		{
   		    	$requete = "select * from partenairedigital where entreprise like '%".$mot."%'or adresseMaisonMere like '%".$mot."%' or nbSiteStreaming like '%".$mot."%';";
 	    	   if($this->pdo !=null)
				{
					$select=$this->pdo->prepare($requete);
					$select->execute();
					//extraction de tous les Partenaires Digitaux 
					return $select->fetch();
				}else
				{
					return null;
        		}
			}



	///***********PARTENAIRE PHYSIQUE**************///

		public function insertPPhy($tab)
			{
				$requete ="insert into partenairephysique values (null, :entreprise, :adresseSiegeSocial, :nbMagasins);";
				$donnees =array(
					":entreprise"=>$tab['entreprise'],
					":adresseSiegeSocial"=>$tab['adresseSiegeSocial'],
					":nbMagasins"=>$tab['nbMagasins']
				);
				if($this->pdo != null)
				{
					//on prepare la requete
					$insert = $this->pdo->prepare($requete);
					$insert->execute($donnees);
				}
			}

			public function selectAllPPhys()
			{
				$requete="select * from partenairephysique;";
				if($this->pdo !=null)
				{
					$select=$this->pdo->prepare($requete);
					$select->execute();
					//extraction de tous les Partenaires Physiques
					return $select->fetchAll();
				}else
				{
					return null;
				}
			}
			public function deletePPhy($idpartenairep)
    		{
        		$requete = "delete from partenairephysique where idpartenairep =".$idpartenairep.";";
        		if($this->pdo != null)
				{
					//on prepare la requete
					$delete = $this->pdo->prepare($requete);
					$delete->execute();
				}
    		}
  		public function selectWherePPhy($idpartenairep)
    		{
     		   $requete = "select * from partenairephysique where idpartenairep =" .$idpartenairep.";";
      			if($this->pdo !=null)
				{
					$select=$this->pdo->prepare($requete);
					$select->execute();
					//extraction de tous les Partenaires Physiques
					return $select->fetch();
				}else
				{
					return null;
				}
			}
    	public function updatePPhy($tab)
    		{

        		$requete ="update partenairephysique set entreprise=:entreprise, adresseSiegeSocial= :adresseSiegeSocial, nbMagasins= :nbMagasins where idpartenairep=:idpartenairep;";
				$donnees =array(
					":idpartenairep"=>$tab['idpartenairep'],
					":entreprise"=>$tab['entreprise'],
					":adresseSiegeSocial"=>$tab['adresseSiegeSocial'],
					":nbMagasins"=>$tab['nbMagasins']
				);
        		
       			if($this->pdo != null)
				{
					//on prepare la requete
					$update = $this->pdo->prepare($requete);
					$update->execute($donnees);
				}
    		}
			public function searchPPhys($mot)
    		{
   		    	$requete = "select * from partenairephysique where entreprise like '%".$mot."%'or adresseSiegeSocial like '%".$mot."%' or nbMagasins like '%".$mot."%';";
 	    	   if($this->pdo !=null)
				{
					$select=$this->pdo->prepare($requete);
					$select->execute();
					//extraction de tous les Partenaires Physiques
					return $select->fetch();
				}else
				{
					return null;
        		}
			}







	///***********CHANSON **************///
		public function insertChanson($tab)
			{
				$requete ="insert into chanson values (null, :titre, :sortie, :duree, :idartiste, :idalbum, :idcategorie);";
				$donnees =array(
					":titre"=>$tab['titre'],
					":sortie"=>$tab['sortie'],
					":duree"=>$tab['duree'],
					":idartiste"=>$tab['idartiste'],
					":idalbum"=>$tab['idalbum'],
					":idcategorie"=>$tab['idcategorie']
				);
				if($this->pdo != null)
				{
					//on prepare la requete
					$insert = $this->pdo->prepare($requete);
					$insert->execute($donnees);
				}
			}

			public function selectAllChansons()
			{
				$requete="select * from chanson;";
				if($this->pdo !=null)
				{
					$select=$this->pdo->prepare($requete);
					$select->execute();
					//extraction de toutes les Chansons
					return $select->fetchAll();
				}else
				{
					return null;
				}
			}
			public function deleteChanson($idchanson)
    		{
        		$requete = "delete from chanson where idchanson =".$idchanson.";";
        		if($this->pdo != null)
				{
					//on prepare la requete
					$delete = $this->pdo->prepare($requete);
					$delete->execute();
				}
    		}
  		public function selectWhereChanson($idchanson)
    		{
     		   $requete = "select * from chanson where idchanson =" .$idchanson.";";
      			if($this->pdo !=null)
				{
					$select=$this->pdo->prepare($requete);
					$select->execute();
					//extraction de toutes les Chansons
					return $select->fetch();
				}else
				{
					return null;
				}
			}
    	public function updateChanson($tab)
    		{

				$requete ="update chanson set titre= :titre, sortie= :sortie, duree= :duree, idartiste= :idartiste, idalbum= :idalbum, idcategorie= :idcategorie where idchanson=:idchanson;";
				$donnees =array(
					":idchanson"=>$tab['idchanson'],
					":titre"=>$tab['titre'],
					":sortie"=>$tab['sortie'],
					":duree"=>$tab['duree'],
					":idartiste"=>$tab['idartiste'],
					":idalbum"=>$tab['idalbum'],
					":idcategorie"=>$tab['idcategorie']
				);
        		
       			if($this->pdo != null)
				{
					//on prepare la requete
					$update = $this->pdo->prepare($requete);
					$update->execute($donnees);
				}
    		}
			public function searchChansons($mot)
    		{
   		    	$requete = "select * from chanson where titre like '%".$mot."%'or sortie like '%".$mot."%' or duree like '%".$mot."%' or idartiste like '%".$mot."%' or idalbum like '%".$mot."%' or idcategorie like '%".$mot."%';";
 	    	   if($this->pdo !=null)
				{
					$select=$this->pdo->prepare($requete);
					$select->execute();
					//extraction de toutes les Chansons
					return $select->fetch();
				}else
				{
					return null;
        		}
			}





				
	///***********ALBUM**************///
		public function insertAlbum($tab)
			{
				$requete ="insert into album values (null, :nom, :anneeSortie, :idartiste);";
				$donnees =array(
					":nom"=>$tab['nom'],
					":anneeSortie"=>$tab['anneeSortie'],
					":idartiste"=>$tab['idartiste'],
				);
				if($this->pdo != null)
				{
					//on prepare la requete
					$insert = $this->pdo->prepare($requete);
					$insert->execute($donnees);
				}
			}

			public function selectAllAlbums()
			{
				$requete="select * from album;";
				if($this->pdo !=null)
				{
					$select=$this->pdo->prepare($requete);
					$select->execute();
					//extraction de tous les Albums
					return $select->fetchAll();
				}else
				{
					return null;
				}
			}
			public function deleteAlbum($idalbum)
    		{
        		$requete = "delete from album where idalbum =".$idalbum.";";
        		if($this->pdo != null)
				{
					//on prepare la requete
					$delete = $this->pdo->prepare($requete);
					$delete->execute();
				}
    		}
  		public function selectWhereAlbum($idalbum)
    		{
     		   $requete = "select * from album where idalbum =" .$idalbum.";";
      			if($this->pdo !=null)
				{
					$select=$this->pdo->prepare($requete);
					$select->execute();
					//extraction de tous les Albums
					return $select->fetch();
				}else
				{
					return null;
				}
			}
    	public function updateAlbum($tab)
    		{

				$requete ="update album set nom= :nom, anneeSortie= :anneeSortie, idartiste= :idartiste where idalbum=:idalbum;";
				$donnees =array(
					":idalbum"=>$tab['idalbum'],
					":nom"=>$tab['nom'],
					":anneeSortie"=>$tab['anneeSortie'],
					":idartiste"=>$tab['idartiste'],
				);
        		
       			if($this->pdo != null)
				{
					//on prepare la requete
					$update = $this->pdo->prepare($requete);
					$update->execute($donnees);
				}
    		}
			public function searchAlbums($mot)
    		{
   		    	$requete = "select * from album where nom like '%".$mot."%'or anneeSortie like '%".$mot."%' or idartiste like '%".$mot."%';";
 	    	   if($this->pdo !=null)
				{
					$select=$this->pdo->prepare($requete);
					$select->execute();
					//extraction de tous les Albums
					return $select->fetch();
				}else
				{
					return null;
        		}
			}








			//***********Categorie**************///
		public function insertCategorie($tab)
			{
				$requete ="insert into categorie values (null, :type);";
				$donnees =array(
					":type"=>$tab['type']
				);
				if($this->pdo != null)
				{
					//on prepare la requete
					$insert = $this->pdo->prepare($requete);
					$insert->execute($donnees);
				}
			}

			public function selectAllCategories()
			{
				$requete="select * from categorie;";
				if($this->pdo !=null)
				{
					$select=$this->pdo->prepare($requete);
					$select->execute();
					//extraction de toutes les Categories
					return $select->fetchAll();
				}else
				{
					return null;
				}
			}
			public function deleteCategorie($idcategorie)
    		{
        		$requete = "delete from categorie where idcategorie =".$idcategorie.";";
        		if($this->pdo != null)
				{
					//on prepare la requete
					$delete = $this->pdo->prepare($requete);
					$delete->execute();
				}
    		}
  			public function selectWhereCategorie($idcategorie)
    		{
     		   $requete = "select * from categorie where idcategorie =" .$idcategorie.";";
      			if($this->pdo !=null)
				{
					$select=$this->pdo->prepare($requete);
					$select->execute();
					//extraction de toutes les Categories
					return $select->fetch();
				}else
				{
					return null;
				}
			}
    		public function updateCategorie($tab)
    		{

				$requete ="update categorie set type= :type where idcategorie=:idcategorie;";
				$donnees =array(
					":idcategorie"=>$tab['idcategorie'],
					":type"=>$tab['type']
				);
        		
       			if($this->pdo != null)
				{
					//on prepare la requete
					$update = $this->pdo->prepare($requete);
					$update->execute($donnees);
				}
    		}
			public function searchCategories($mot)
    		{
   		    	$requete = "select * from categorie where type like '%".$mot."%';";
 	    	   if($this->pdo !=null)
				{
					$select=$this->pdo->prepare($requete);
					$select->execute();
					//extraction de toutes les Categories
					return $select->fetch();
				}else
				{
					return null;
        		}
			}






			///***********Ventes Physiques**************///
		public function insertVenteP($tab)
		{
			$requete ="insert into ventephysique values (null, :nbVente, :prixParVente, :date, :idpartenairep, :idartiste, :idalbum);";
			$donnees =array(
				":nbVente"=>$tab['nbVente'],
				":prixParVente"=>$tab['prixParVente'],
				":date"=>$tab['date'],
				":idpartenairep"=>$tab['idpartenairep'],
				":idartiste"=>$tab['idartiste'],
				":idalbum"=>$tab['idalbum']
			);
			if($this->pdo != null)
			{
				//on prepare la requete
				$insert = $this->pdo->prepare($requete);
				$insert->execute($donnees);
			}
		}

	public function selectAllVentesP()
		{
			$requete="select * from ventephysique;";
			if($this->pdo !=null)
			{
				$select=$this->pdo->prepare($requete);
				$select->execute();
				//extraction de toutes les Ventes Physiques
				return $select->fetchAll();
			}else
			{
				return null;
			}
		}

		public function deleteVenteP($idventep)
    		{
        		$requete = "delete from ventephysique where idventep =".$idventep.";";
        		if($this->pdo != null)
				{
					//on prepare la requete
					$delete = $this->pdo->prepare($requete);
					$delete->execute();
				}
    		}
  			public function selectWhereVentesP($idventep)
    		{
     		   $requete = "select * from ventephysique where idventep =" .$idventep.";";
      			if($this->pdo !=null)
				{
					$select=$this->pdo->prepare($requete);
					$select->execute();
					//extraction de toutes les Ventes Physiques
					return $select->fetch();
				}else
				{
					return null;
				}
			}
    		public function updateVentesP($tab)
    		{

				$requete ="update ventephysique set nbVente= :nbVente, prixParVente= :prixParVente, date= :date, idpartenairep= :idpartenairep, idartiste= :idartiste, idalbum= :idalbum where idventep=:idventep;";
				$donnees =array(
					":idventep"=>$tab['idventep'],
					":nbVente"=>$tab['nbVente'],
					":prixParVente"=>$tab['prixParVente'],
					":date"=>$tab['date'],
					":idpartenairep"=>$tab['idpartenairep'],
					":idartiste"=>$tab['idartiste'],
					":idalbum"=>$tab['idalbum'],
				);
        		
       			if($this->pdo != null)
				{
					//on prepare la requete
					$update = $this->pdo->prepare($requete);
					$update->execute($donnees);
				}
    		}
			public function searchVentesP($mot)
    		{
   		    	$requete = "select * from ventephysique where nbVente like '%".$mot."%' or prixParVente like '%".$mot."%' or date like '%".$mot."%' or idpartenairep like '%".$mot."%' or idartiste like '%".$mot."%' or idalbum like '%".$mot."%';";
 	    	   if($this->pdo !=null)
				{
					$select=$this->pdo->prepare($requete);
					$select->execute();
					//extraction de toutes les Ventes Physiques
					return $select->fetch();
				}else
				{
					return null;
        		}
			}






			///***********Ventes Digitale**************///
			public function insertVenteD($tab)
			{
				$requete ="insert into ventedigitale values (null, :nbVente, :prixParVente, :date, :idpartenaired, :idchanson, :idartiste);";
				$donnees =array(
					":nbVente"=>$tab['nbVente'],
					":prixParVente"=>$tab['prixParVente'],
					":date"=>$tab['date'],
					":idpartenaired"=>$tab['idpartenaired'],
					":idchanson"=>$tab['idchanson'],
					":idartiste"=>$tab['idartiste']
				);
				if($this->pdo != null)
				{
					//on prepare la requete
					$insert = $this->pdo->prepare($requete);
					$insert->execute($donnees);
				}
			}
	
		public function selectAllVentesD()
			{
				$requete="select * from ventedigitale;";
				if($this->pdo !=null)
				{
					$select=$this->pdo->prepare($requete);
					$select->execute();
					//extraction de toutes les Ventes Digitales
					return $select->fetchAll();
				}else
				{
					return null;
				}
			}
			public function deleteVenteD($idvented)
    		{
        		$requete = "delete from ventedigitale where idvented =".$idvented.";";
        		if($this->pdo != null)
				{
					//on prepare la requete
					$delete = $this->pdo->prepare($requete);
					$delete->execute();
				}
    		}
  			public function selectWhereVenteD($idvented)
    		{
     		   $requete = "select * from ventedigitale where idvented =" .$idvented.";";
      			if($this->pdo !=null)
				{
					$select=$this->pdo->prepare($requete);
					$select->execute();
					//extraction de tous les clients
					return $select->fetch();
				}else
				{
					return null;
				}
			}
    		public function updateVenteD($tab)
    		{

				$requete ="update ventedigitale set nbVente= :nbVente, prixParVente= :prixParVente, date= :date, idpartenaired= :idpartenaired, idchanson= :idchanson, idartiste= :idartiste  where idvented=:idvented;";
				$donnees =array(
					":idvented"=>$tab['idvented'],
					":nbVente"=>$tab['nbVente'],
					":prixParVente"=>$tab['prixParVente'],
					":date"=>$tab['date'],
					":idpartenaired"=>$tab['idpartenaired'],
					":idchanson"=>$tab['idchanson'],
					":idartiste"=>$tab['idartiste']
				);
        		
       			if($this->pdo != null)
				{
					//on prepare la requete
					$update = $this->pdo->prepare($requete);
					$update->execute($donnees);
				}
    		}
			public function searchVentesD($mot)
    		{
   		    	$requete = "select * from ventedigitale where nbVente like '%".$mot."%'or prixParVente like '%".$mot."%' or date like '%".$mot."%' or idpartenaired like '%".$mot."%' or idchanson like '%".$mot."%'  or idartiste like '%".$mot."%';";
 	    	   if($this->pdo !=null)
				{
					$select=$this->pdo->prepare($requete);
					$select->execute();
					//extraction de toutes les Ventes Digitales
					return $select->fetch();
				}else
				{
					return null;
        		}
			}
		public	function selectUser($email, $mdp){
			  $requete="select * from user where email='".$email."' and mdp='".$mdp."';";
			  if($this->pdo !=null)
				{
					$select=$this->pdo->prepare($requete);
					$select->execute();
					//extraction de toutes les Users
					return $select->fetch();
				}else
				{
					return null;
        		}
			}

			
			public    function topVDMensuel()
			{
				$requete = "select a.nomDeScene , max(v.nbVente) as vente, a.idartiste, a.images
					FROM artiste as a inner join ventedigitale as v on a.idartiste=v.idartiste
					Group by  a.idartiste, a.nomDeScene 
					order by max(v.nbVente) desc
					limit 3;";
					if($this->pdo !=null)
					{
						$select=$this->pdo->prepare($requete);
						$select->execute();
						//extraction de toutes les Ventes Digitales
						return $select->fetchAll();
						}else
						{
							return null;
						}
				}
				public  function topVPhysique()
				{
					$requete = "select  a.nomDeScene , max(vp.nbVente) as ventep, a.idartiste, a.images
						FROM artiste as a inner join ventephysique as vp on a.idartiste=vp.idartiste
						Group by  a.idartiste, a.nomDeScene 
						order by max(vp.nbVente) desc
						limit 3;";
					if($this->pdo !=null)
					{
						$select=$this->pdo->prepare($requete);
						$select->execute();
						//extraction de toutes les Ventes Digitales
						return $select->fetchAll();
					}else
					{
						return null;
					}
				}
		 
	}
	?>