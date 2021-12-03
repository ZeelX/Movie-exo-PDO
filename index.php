<?php
include 'header.php';
include 'model/MovieRepository.php';
require 'vendor/autoload.php';


?>


<?php
if (empty($_GET['tablecreate'])) {

    echo '<div class="container">
            <div class="d-flex flex-column justify-content-center align-items-center m-5">
                <h1> <span style="font-size:60px" > <i class="fas fa-film"></i> </span>   Bienvenue sur MymovY!  <span style="font-size:60px" > <i class="fas fa-film"></i></i></span></h1>
                <h5>La plateform qui fais pas grand chose... </h5>
                <p> (mais tant pis \O/) </p>
                
                
                <div class="row justify-content-center align-items-center m-5">
                <a href="actionPage/createTable.php" class="btn btn-success"> Retrouver mes films !</a>
                </div>
            </div>
          </div>';
} elseif (isset($_GET['tablecreate'])) {
    ?>
    <div class="container my-5">
        <div class="d-flex justify-content-center align-items-center">

                <?php
                include 'list.php'
                ?>

        </div>
        <div class="d-flex flex-row-reverse">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">
               Add a movie
            </button>
        </div>

        <div   class="modal" id="formModal">
            <div class="modal-dialog modal-dialog-centered">
                <div  style="border-radius: 20px!important;"  class="modal-content">
                    <form class="d-flex flex-column align-items-center bg-dark p-5 myShadow"
                          style="border-radius: 20px; color:white"
                          action="actionPage/addMovie.php" method="post">

                   <?php include 'formulaire.php'; ?>

                </div>
            </div>
        </div>
    </div>

    <?php
}


include 'footer.php';
