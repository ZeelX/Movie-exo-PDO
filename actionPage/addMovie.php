<?php

require '../vendor/autoload.php';
include '../header.php';
include '../model/MovieRepository.php';

if ( isset($_POST['name'],$_POST['launchedAt'],$_POST['type'],$_POST['desc'])) {

    $movie = new MovieRepository;
    $movie->addMovie(
        $_POST['name'],
        $_POST['launchedAt'],
        $_POST['type'],
        $_POST['desc']);
    }



$rows= new MovieRepository();
$result= $rows->getAllMovie();


header('location:../index.php?tablecreate=true');