<?php include("db.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD con php</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">

</head>
<body>
    <div class="container p-4">
        <div class="row">
            <div class="col-md-4">
                <?php if(isset($_SESSION["mensaje"])) {?>
                    <div class="alert alert-<?= $SESSION["tipo_mensaje"];?> alert-dismissible fade show" role="alert">
                    <?php echo $_SESSION["mensaje"];?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                </div>
                <?php session_unset();}?>    
            </div>

            <div class="card card-body">
                    <form action="guardar.php" method="post">
                        <div class="mb-3">
                            <label for="iden" class="form-label">Identificacion: </label>
                            <input type="text" id="iden" name="iden" class="form-label">
                        </div>
                    </form>
            </div>

        </div>
    </div>
    
</body>
</html>