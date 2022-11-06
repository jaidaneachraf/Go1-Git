<?php
	include '../config.php';
	include_once '../Model/Produit.php';
	class ProduitController {
		function afficherproduit(){
			$sql="SELECT * FROM produit";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function supprimerproduit($id){
			$sql="DELETE FROM produit WHERE id=:id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id', $id);
			try{
				$req->execute();
				
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}
		function ajouterproduit($produit){

			$sql="INSERT INTO produit ( image,nom, prix) 
			VALUES (:image,:nom,:prix)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					'image' => $produit->getImage(),
					'nom' => $produit->getNom(),
					'prix' => $produit->getPrix(),
					
				]);		
				//header('Location : afficherProduitB.php');
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
	/*	function ajouterproduit($produit){

			$sql="INSERT INTO produit ( nom, prix) 
			VALUES (:nom,:prix)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
				$query->execute([
					
					'nom' => $produit->getNom(),
					'prix' => $produit->getPrix(),
					
				]);		
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}*/
		function recupererproduit($id){
			$sql="SELECT * from produit where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$produit=$query->fetch();
				return $produit;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
		function modifierproduit($produit, $id){
			try {
				$db = config::getConnexion();
			

				$sql="UPDATE produit SET nom= :nom,prix= :prix,image= :image WHERE id= :id";
			    $db = config::getConnexion();
				$req=$db->prepare($sql);
				$req->bindValue(':nom', $produit->getNom());
				$req->bindValue(':id', $id);
				$req->bindValue(':prix', $produit->getPrix());
				$req->bindValue(':image', $produit->getImage());

				$req->execute();
			//	echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
function afficherproduitri(){
			$sql="SELECT * FROM produit order by prix";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch(Exception $e){
				die('Erreur:'. $e->getMessage());
			}
		}

	}
?>