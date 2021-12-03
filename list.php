<?php
//require 'vendor/autoload.php';
//include 'header.php';
//include 'model/MovieRepository.php';

$rows = new MovieRepository();
$result = $rows->getAllMovie();


?>

<table class="table table-striped border table-hover p-5 myShadow">
    <thead class="p-4">
    <tr>
        <th> Name</th>
        <th> launched At</th>
        <th> genre</th>
        <th> ____</th>
    </tr>
    </thead>
    <tbody class="p-4">

    <?php foreach ($result as $movie) { ?>
        <tr class="tableLine">
            <td> <?php echo $movie['name'] ?></td>
            <td> <?php echo $movie['launch_at'] ?></td>
            <td> <?php echo $movie['type'] ?></td>
            <td>
                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                        data-bs-target="#myDeleteModal<?php echo $movie['id'] ?>">
                    Delete
                </button>

                <button type="button" class="btn btn-info" data-bs-toggle="modal"
                        data-bs-target="#ModifyModal<?php echo $movie['id'] ?>">
                    Modify
                </button>

                <!--                            ///////////////////////////////////  modal delete  ///////////////////////////////////-->

                <div class="modal" id="myDeleteModal<?php echo $movie['id'] ?>">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="fw-bold modal-title">Are you sure you want to delete this movie from
                                    database ?</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Do you really want to delete this movie ?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Let met
                                    think about it again
                                </button>
                                <a class="text-light btn btn-danger mx-1"
                                   href="actionPage/traitement_delete.php?id=<?php echo $movie['id'] ?>">I'm sure, let's
                                    do it !</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!--                            ///////////////////////////////modal modify/////////////////////////////-->

                <div class="modal" id="ModifyModal<?php echo $movie['id'] ?>">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <form class="d-flex flex-column align-items-center bg-dark p-5 myShadow"
                                  style="border-radius: 20px; color:white"
                                  action="actionPage/modifyMovie.php?id=<?php echo $movie['id'] ?>" method="post">

                            <?php include 'formulaire.php'; ?>


                        </div>
                    </div>
                </div>


                <!--                            //////////////////////////////////////////////////////////////////////-->

            </td>
        </tr>


    <?php } ?>


    </tbody>
</table>


