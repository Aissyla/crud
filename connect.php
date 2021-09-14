<?php
// try {
//     // Connexion à la base
//     $db = new PDO('mysql:host=localhost;dbname=crud', 'root', '');
//     $db->exec('SET NAMES "UTF8"');
// } catch (PDOException $e) {
//     echo 'Erreur : ' . $e->getMessage();
//     die();
// }

//P.O.O programmation orienté objet
class Connect
{
    private $servername;
    private $username;
    private $dbname;
    private $password;
    private $connect;

    public function __construct($servername, $username, $password, $dbname)
    {
        $this->servername = $servername;
        $this->username = $username;
        $this->dbname = $dbname;
        $this->password = $password;
    }

    public function connectdb()
    {
        return $this->connect = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
    }
}

// définir connexion
$connection = new Connect("localhost", "root", "", "crud");

// afficher connexion
// echo  "<pre>";
// //var_dump($connection->connectdb());
// echo "</pre>";

// variable réutilisable class Connect
$connectdb = $connection->connectdb();
