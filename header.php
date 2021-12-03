<?php
session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title>  MymovY </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link  rel="stylesheet" href="css.css">

</head>
<body>

<nav style="list-style: none;" class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top myShadow">
    <div class="container-fluid">
        <a class="navbar-brand px-3" href="index.php">  <i class="fas fa-film"></i>  MymovY </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">


                <li  class="nav-item">
                    <a style="color:white;" class="nav-link" href="index.php"> Formulaire </a>
                </li>
                <li class="nav-item">
                    <a style="color:white" class="nav-link" href="index.php?tablecreate=true">List Film</a>
                </li>

                <li  class="nav-item">
                    <a style="color:white" class="nav-link" href="region.php">Régions</a>
                </li>

                <li  class="nav-item dropdown">
                    <a style="color:white" class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Gérance d'User
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="ajout.php">Ajout</a></li>
                        <li><a class="dropdown-item" href="user.php">Liste Users</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>


            </ul>

        </div>
    </div>

</nav>

