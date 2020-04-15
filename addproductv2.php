<?php
//recuperer les données venant de la page HTML
        $nom = isset($_POST["nom"])? $_POST["nom"] : ""; 
        $photo = isset($_POST["photo"])? $_POST["photo"] : ""; 
        $description = isset($_POST["description"])? $_POST["description"] : ""; 
        $prixmin = isset($_POST["prixmin"])? $_POST["prixmin"] : "";
        $video = isset($_POST["video"])? $_POST["video"] : "";
        $categoriedachat = isset($_POST["categoriedachat"])? $_POST["categoriedachat"] : "";
        $categorieitem = isset($_POST["categorieitem"])? $_POST["categorieitem"] : "";
        //identifier votre BDD
    $database = "projetweb";
//connectez-vous dans votre BDD
//Rappel: votre serveur = localhost | votre login = root |votre password = <rien> 
    $db_handle = mysqli_connect('localhost', 'root', 'root');
    $db_found = mysqli_select_db($db_handle, $database);
class Items
{
   protected $nom;
   protected $photo;
   protected $description;
   protected $prixmin;
   protected $video;
   protected $categoriedachat;
   protected $categorieitem;

   public function __construct($nom, $photo, $description, $prixmin, $video, $categoriedachat, $categorieitem) 
   {
        $this->nom = $nom;
        $this->photos = $photo;
        $this->descrptions = $description;
        $this->prix_minimum = $prixmin;
        $this->video = $video;
        $this->categoriedachat = $categoriedachat;
        $this->categorie = $categorieitem;
   }

   public function getPrice()
   {
       return $this->prix_minimum;
   }

   public function setPrice($price)
   {
       return $this->prix_minimum = $prixmin;
   }
}

if ($_POST["button"]) { 
      if ($db_found) {
        echo "ok";
        $sql = "INSERT INTO Item(nom, photos, descrptions, prix_minimum, video, categoriedachat, categorie) 
                            VALUES('$nom', '$photo', '$description', '$prixmin', '$video', '$categoriedachat', '$categorieitem')";
        $result = mysqli_query($db_handle, $sql);
        $monItem = new Items($nom, $photo, $description, $prixmin, $video, $categoriedachat, $categorieitem);

        echo "ok";
        print_r($monItem->getPrice());
      }
      else {
        echo "Database not found";
      } 
    }
//print_r($monItem->getPrice());
//$monItem->setPrice(34);
//print_r($monItem->getPrice());
?>