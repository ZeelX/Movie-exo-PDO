<?php

include 'Connexion.php';


class MovieRepository extends Connexion
{

    public function addMovie($title, $launchedAt, $type, $desc)
    {
        $pdo = $this->connexion();
        $query = 'INSERT INTO movie(`name`,`launch_at`,`type`,`description`) VALUES (:title,:launchedAt,:genre,:desc)';
        $resultats = $pdo->prepare($query);
        $resultats->execute([
            ':title' => $title,
            ':launchedAt' => $launchedAt,
            ':genre' => $type,
            ':desc' => $desc
        ]);

    }

    public function modifyMovie($name, $date, $type, $desc, $id)
    {
        $pdo = $this->connexion();
        $query = 'UPDATE `movie` SET name = :name,
                   launch_at = :date, type = :type , description = :description WHERE  id = :id';
        $resultats = $pdo->prepare($query);

        $resultats->execute([
            ':name' => $name,
            ':date' => $date,
            ':type' => $type,
            ':description' => $desc,
            ':id' => $id
        ]);
    }

    public function getAllMovie(): array
    {
        $pdo = $this->connexion();
        $query = 'SELECT * FROM `movie`';
        $resultats = $pdo->prepare($query);
        $resultats->execute();
        return $rows = $resultats->fetchAll(PDO::FETCH_ASSOC);

    }
}