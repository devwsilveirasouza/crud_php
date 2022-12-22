<?php

$con = mysqli_connect("localhost", "root", "", "blog");

if(!$con){
    die('Conection FAILED'.mysqli_connect_error());
}
