<?php
require_once('Classes.php');
if (isset($_POST['save-order'])) {
    $ord = new Order();

    $ord->setNum($_POST['num-order']);
    $ord->setDeliveryAddress($_POST['delivery-address']);
    $ord->setDateO($_POST['date-order']);
    $ord->setIdCient($_POST['id-client']);

    $ord->save();
    header('Location: detail-order.php?num=' . $_POST['num-order']);
}
