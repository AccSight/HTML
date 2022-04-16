<?php
    //collect data from form
    $cName = $_POST['cus_name'];
    $cCell = $_POST['cell'];
    $cAdd = $_POST['address'];

    //connect to server
    if(!($connection = mysqli_connect("localhost","root","K@stx8909"))){
        die("Could not connect to server");
    }
    //select database
    if(!mysqli_select_db($connection,"AccSight")){
        die("Could not find database on server");
    }
    //make query
    $sql = "INSERT INTO customer (cus_name,cell_number,cus_add) VALUES"; 
    $sql .= "('" . $cName . "',";
    $sql .= "'" . $cCell . "',";
    $sql .= "'" . $cAdd . "')";

    if(!($result = mysqli_query($connection,$sql))){
        die("Could not query table");
    }

    echo "Upload Successfull";

?>