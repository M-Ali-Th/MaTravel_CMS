<?php

include_once("autoloader.php");

$cq = New ContentQueries("127.0.0.1","matravel_CMS_db","root","mysql");


if (isset($_REQUEST["admin_add_contacts"])) {
echo(json_encode($cq->getAllContactData()));
}elseif (isset($_REQUEST["admin_add_booking"])) {
echo(json_encode($cq->getAllBookingData()));
}elseif (isset($_REQUEST["admin_add_country"])) {
echo(json_encode($cq->getAllCountryData()));
}