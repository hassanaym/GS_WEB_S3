<?php



if(isset($_POST)){


    $name = $_POST['username'];
    $pass = $_POST['password'];


    if( ($name == "hassan") && ($pass == "hassan") ){

        //Redirection vers la page de login
        header('location:dashboard.php');

    }else{

        if($name != "hassan"){

            header('location:index.php?errornum=1');

        }else if ($pass != "hassan"){

            header('location:index.php?errornum=2');

        }

    }

}
