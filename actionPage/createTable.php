
<?php

include '../model/Connexion.php';

try {

    $connect = new Connexion();
    $pdo = $connect->connexion();


    $query ='CREATE TABLE IF NOT EXISTS movie (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(20),
    launch_at DATE,
    type VARCHAR(20),
   	description VARCHAR(250))';


    $resultats= $pdo->prepare($query);
    $resultats->execute();

}catch (Exception $e){
    echo $e->getMessage();
}



header('location:../index.php?tablecreate=true');