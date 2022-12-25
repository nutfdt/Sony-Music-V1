<?php
	require_once ("modele/modele.class.php");
	class Controleur 
	{
		//objet de la classe modele
		private $unModele;
		public function __construct($serveur, $bdd, $user, $mdp)
		{
			//instanciation du modele
			$this->unModele = new Modele($serveur, $bdd, $user, $mdp);
		}



		///*********ARTISTE*******///
		public function insertArtiste($tab)
		{
			$this->unModele->insertArtiste($tab);
		}
		public function selectAllArtistes()
		{
			return $this->unModele->selectAllArtistes();
		}
		public function deleteArtiste($idartiste){
            $this->unModele->deleteArtiste($idartiste);
        }
		public function selectWhereArtiste($idartiste){
			return $this->unModele->selectWhereArtiste($idartiste);
		 }
		public function updateArtiste($tab){
			$this->unModele->updateArtiste($tab);
		}
		public function searchArtistes($mot)
		{
			return $this->unModele->searchArtistes($mot);
		}



		///********LABEL*******///
		public function insertLabel($tab)
		{
			$this->unModele->insertLabel($tab);
		}
		public function selectAllLabels()
		{
			return $this->unModele->selectAllLabels();
		}
		public function deleteLabel($idlabel){
            $this->unModele->deleteLabel($idlabel);
        }
		public function selectWherelabel($idlabel)
		{
			return $this->unModele->selectWherelabel($idlabel);
		}
		public function updatelabel($idlabel)
		{
			$this->unModele->updatelabel($idlabel);
		}
		public function searchLabels($mot)
		{
			return $this->unModele->searchLabels($mot);
		}





		///********AGENT*******///
		public function insertAgent($tab)
		{
			$this->unModele->insertAgent($tab);
		}
		public function selectAllAgents()
		{
			return $this->unModele->selectAllAgents();
		}


		public function deleteAgent($idagent)
		{
			return $this->unModele->deleteAgent($idagent);
		}
		public function selectWhereAgent($idagent)
		{
			return $this->unModele->selectWhereAgent($idagent);
		}
		public function updateAgent($idagent)
		{
			$this->unModele->updateAgent($idagent);
		}
		public function searchAgents($mot)
		{
			return $this->unModele->searchAgents($mot);
		}



		///********Partenaraire Digitaux*******///
		public function insertPDigit($tab)
		{
			$this->unModele->insertPDigit($tab);
		}
		public function selectAllPDigit()
		{
			return $this->unModele->selectAllPDigit();
		}
		public function deletePDigit($idpartenaired){
            $this->unModele->deletePDigit($idpartenaired);
        }
		public function selectWherePDigit($idpartenaired){
			return $this->unModele->selectWherePDigit($idpartenaired);
		}
		public function updatePDigit($tab){
			$this->unModele->updatePDigit($tab);
		}
		public function searchPDigits($mot)
		{
			return $this->unModele->searchPDigits($mot);
		}




		///********Partenaire Physiques*******///
		public function insertPPhy($tab)
		{
			$this->unModele->insertPPhy($tab);
		}
		public function selectAllPPhys()
		{
			return $this->unModele->selectAllPPhys();
		}
		public function deletePPhy($idpartenairep){
            $this->unModele->deletePPhy($idpartenairep);
        }
		public function selectWherePPhy($idpartenairep)
		{
			return $this->unModele->selectWherePPhy($idpartenairep);
		}
		public function updatePPhy($idpartenairep)
		{
			$this->unModele->updatePPhy($idpartenairep);
		}
		public function searchPPhys($mot)
		{
			return $this->unModele->searchPPhys($mot);
		}




		///******** Ventes Physiques*******///
		public function insertVenteP($tab)
		{
			$this->unModele->insertVenteP($tab);
		}
		public function selectAllVentesP()
		{
			return $this->unModele->selectAllVentesP();
		}
        public function deleteVenteP($idventep){
        	$this->unModele->deleteVenteP($idventep);
        }
		public function selectWhereVentesP($idventep)
		{
        	return $this->unModele->selectWhereVentesP($idventep);
        }
		public function updateVentesP($idventep)
		{
        	$this->unModele->updateVentesP($idventep);
        }
		public function searchVentesP($mot)
		{
			return $this->unModele->searchVentesP($mot);
		}



		///******** Ventes Digitales*******///
		public function insertVenteD($tab)
		{
			$this->unModele->insertVenteD($tab);
		}
		public function selectAllVentesD()
		{
			return $this->unModele->selectAllVentesD();
		}
		public function deleteVenteD($idvented){
            $this->unModele->deleteVenteD($idvented);
        }
		public function selectWhereVenteD($idvented){
        	$this->unModele->selectWhereVenteD($idvented);
        }
        public function updateVenteD($tab){
        	$this->unModele->updateVenteD($tab);
        }
		public function searchVentesD($mot)
		{
			return $this->unModele->searchVentesD($mot);
		}



        

		///******** Chanson *******///
		public function insertChanson($tab)
		{
			$this->unModele->insertChanson($tab);
		}
		public function selectAllChansons()
		{
			return $this->unModele->selectAllChansons();
		}
		public function deleteChanson($idchanson){
            $this->unModele->deleteChanson($idchanson);
        }
		public function selectWhereChanson($idchanson){
        	return $this->unModele->selectWhereChanson($idchanson);
        }
        public function updateChanson($idchanson){
        	$this->unModele->updateChanson($idchanson);
        }
		public function searchChansons($mot)
		{
			return $this->unModele->searchChansons($mot);
		}


        

		///******** Album *******///
		public function insertAlbum($tab)
		{
			$this->unModele->insertAlbum($tab);
		}
		public function selectAllAlbums()
		{
			return $this->unModele->selectAllAlbums();
		}
		public function deleteAlbum($idalbum){
            $this->unModele->deleteAlbum($idalbum);
        }
		public function selectWhereAlbum($idalbum){
        	return $this->unModele->selectWhereAlbum($idalbum);
        }
        public function updateAlbum($idalbum){
        	$this->unModele->updateAlbum($idalbum);
        }
		public function searchAlbums($mot)
		{
			return $this->unModele->searchAlbums($mot);
		}




        
		///******** Catégorie *******///
		public function insertCategorie($tab)
		{
			$this->unModele->insertCategorie($tab);
		}
		public function selectAllCategories()
		{
			return $this->unModele->selectAllCategories();
		}
		public function deleteCategorie($idcategorie){
            $this->unModele->deleteCategorie($idcategorie);
		}
		public function selectWhereCategorie($idcategorie){
			return $this->unModele->selectWhereCategorie($idcategorie);
		}
		public function updateCategorie($tab)
		{
			 $this->unModele->updateCategorie($tab);
		}
		public function searchCategories($mot)
		{
			return $this->unModele->searchCategories($mot);
		}
		///******** USER *******///
		public function selectUser($email, $mdp)
		{
			return $this->unModele->selectUser($email, $mdp);
		}
		///** TOP DIGITAL ***///
        public function topVDMensuel()
        {
            return $this->unModele->topVDMensuel();
        }
		/// TOP physique *///
        public function topVPhysique()
        {
            return $this->unModele->topVPhysique();
        }
    }
?>