<?php
require_once('Classes.php');

$cl = new Client();
$lst = $cl->getAll(); //Array

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" href="css/cards.css">
    <link rel="stylesheet" href="css/main.css">
    <title>Products</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <div class="nav-content d-flex flex-row justify-content-between">
                <div class="nav-content-right-side d-flex flex-row justify-content-between">
                    <a class="navbar-brand" href="dashboard.php">sm-S</a>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="newProduct.php">Save <span class="sr-only">(current)</span></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="nav-icons">
                    <i class="fas fa-arrow-circle-left"></i>
                    <a href="dashBoard.php"><i class="fas fa-home"></i></a>
                    <a href="index.php"><i class="fas fa-sign-out-alt"></i></a>

                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <form action="saveOrder.php" method="POST">
            <div class="client-search">
                <h3>Client</h3>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <select class="selectpicker form-control" name="id-client">
                                <?php
                                foreach ($lst as $c) {
                                    echo "<option>" . $c->id . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="">-------</label>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="">-------</label>
                        </div>
                    </div>

                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="">-------</label>
                        </div>
                    </div>

                </div>
            </div>


            <div class="client-search">
                <h3>Order</h3>

                <input type="text" class="input-border" name="num-order" id="num-order" placeholder="Order N°" required>
                <textarea class="input-border" name="delivery-address" id="delivery-address" placeholder="Delivery address" rows="3"></textarea>
                <input type="date" class="input-border" name="date-order" id="date-order" placeholder="Date">
                <input type="submit" name="save-order" value="Save">

            </div>
        </form>
    </div>
</body>

</html>


<!------ Include the above in your HEAD tag ---------->