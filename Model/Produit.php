<?php
class Produit{
  
    private $id;
   private $image;
    private $nom;
   // private $description;
    private $prix;
    //private $CategorieId;
   
       
    function __construct($image,$nom,$prix){
   
        $this->image=$image;
        $this->nom=$nom;
        $this->prix=$prix;

       
      
    }
    function getId(){
        return $this->id;
    }
    
    function getNom(){
        return $this->nom;
    }
   
    function getPrix(){
        return $this->prix;
    }
     function getImage(){
        return $this->image;
    }


    
    function setNom(string $nom){
        $this->nom=$nom;
    }
    function setId(string $id){
        $this->id=$id;
    }
    
    

    function setPrix(string $prix){
        $this->prix=$prix;
    }
   function setImage(string $image){
        $this->image=$image;
    }
   
   





}



?>