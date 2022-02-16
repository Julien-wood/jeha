
<?php
//Connexion à la base de donnée

$dbhost = "localhost"; // A modifier selon son heberger
$dbname = "casadb-jeha-db"; // Ici donné le nom que vous avez donné à votre base de donnée dans mysql
$dbusers = "root"; // Si vous utilisez LAMP, XAMP, MAMP, ... c'est sur que votre votre user sera root mais vous devez le modifier en l'hebergeant
$dbpswd = ""; // laisser vide si votre LAMP, XAMP... n'a pas de mote de passe mais à modifier à l'hebergement


//A partir d'ici, vous ne devez plus rien modifier sauf le message d'erreur, si vous le souhaitez changer

try{
    $db = new PDO('mysql:host='.$dbhost.';dbname='.$dbname,$dbusers,$dbpswd,array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
}catch(PDOexception $e){
    die("Une erreur est survenue lors de la connexion à la base de données");
}


?>