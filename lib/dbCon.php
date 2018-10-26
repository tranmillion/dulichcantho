<?php
function myConnect() {
    $con = mysqli_connect("localhost","root","");
    mysqli_select_db($con,"khoaphamtraining");
    mysqli_query($con,"SET NAMES 'utf8'");
    return $con;
}
?>