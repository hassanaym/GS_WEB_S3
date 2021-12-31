<?php
require_once('Classes.php');

$prd = new Product();
$lst = $prd->getAll(); //Array
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
                                <a class="nav-link" href="new-product.php">New <span class="sr-only">(current)</span></a>
                            </li>

                            <li class="nav-item active">
                                <a class="nav-link" href="Products-list.php">List <span class="sr-only">(current)</span></a>
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
        <br>
        <h4>Products available</h2>
            <br>
            <div class="row" id="ads">
                <?php

                foreach ($lst as $p) {
                    echo '<div class="col-md-4 mb-5">
                            <div class="card rounded">
                                <div class="card-image">
                                    <span class="card-notify-badge">' . $p->reference . '</span>
                                    <span class="card-notify-year">CAT</span>
                                    <img class="img-fluid" src="https://imageonthefly.autodatadirect.com/images/?USER=eDealer&PW=edealer872&IMG=USC80HOC011A021001.jpg&width=440&height=262" alt="Alternate Text" />
                                </div>
                                <div class="card-image-overlay m-auto">
                                    <span class="card-detail-badge">' . $p->quantite_stock . '</span>
                                    <span class="card-detail-badge">' . $p->prix_achat . '</span>
                                    <span class="card-detail-badge">' . $p->prix_vente . '</span>
                                </div>
                                <div class="card-body text-center">
                                    <div class="ad-title m-auto">
                                        <h5>' . $p->description . '</h5>
                                    </div>
                                    <div class="d-flex flex-row justify-content-between">
                                        <a class="ad-btn" href="#">View</a>
                                        <a class="ad-btn" href="#">Delete</a>
                                        <a class="ad-btn" href="#">Update</a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>';
                }



                ?>






            </div>
    </div>
</body>

</html>


<!------ Include the above in your HEAD tag ---------->