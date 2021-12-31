<?php
require_once('Classes.php');

$ord = new Order();
$lst = $ord->getAll();

$prd = new Product();

$lstOp = [];

$lstPrd = $prd->getAll();
if (isset($_GET['num'])) {
    $op = new OrderProduct();
    $op->setNum($_GET['num']);
    $lstOp = $op->getAll();
}


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
        <form action="saveOrderDetail.php" method="POST">
            <div class="order-search">
                <h3>Order</h3>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <select class="selectpicker form-control" name="id-client">
                                <?php
                                foreach ($lst as $o) {
                                    if (($_GET['num']) == $o->num) {
                                        echo "<option selected>" . $o->num . "</option>";
                                    } else {
                                        echo "<option>" . $o->num . "</option>";
                                    }
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

            <div class="product-search">
                <h3>Product</h3>
                <div class="row">
                    <div class="col-sm-2">
                        <div class="form-group">
                            <select class="selectpicker form-control" name="id-client">
                                <?php
                                foreach ($lstPrd as $p) {
                                    echo "<option>" . $p->reference . "</option>";
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

                    <div class="col-sm-2">
                        <div class="form-group">
                            <label for="">-------</label>
                        </div>
                    </div>

                    <div class="col-sm-2">
                        <div class="form-group">
                            <input type="number" step="any" class="input-border" name="quantity" id="quantity" placeholder="Quantity" required>
                        </div>
                    </div>

                </div>
            </div>


            <div class="details-search">
                <h3>Details</h3>
                <table>
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Quantity</th>

                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($lstOp as $op) {
                            echo "<tr>";
                            echo "<td>" . $op->reference . "</td>";
                            echo "<td>" . $op->quantity . "</td>";
                            echo "<td><a href=" . "deleteProduit.php/?ref=" . $p->reference . "><i class='fas fa-folder-minus'></i></a></td>";
                            echo "<td><a href=" . "updateForm.php/?ref=" . $p->reference . "><i class='fas fa-edit'></i></a></td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </form>
    </div>
</body>

</html>


<!------ Include the above in your HEAD tag ---------->