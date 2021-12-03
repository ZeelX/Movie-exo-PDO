<?php

require '../vendor/autoload.php';
include '../header.php';
include '../model/MovieRepository.php';
if ( isset($_POST['name']) && isset($_POST['launchedAt']) && isset($_POST['type']) && isset($_POST['desc']) && isset($_GET['id'])) {



    $movie = new MovieRepository;
    $movie->modifyMovie(
        $_POST['name'],
        $_POST['launchedAt'],
        $_POST['type'],
        $_POST['desc'],
        $_GET['id']
    );

}



$rows= new MovieRepository();
$result= $rows->getAllMovie();


header('location:../index.php?tablecreate=true');