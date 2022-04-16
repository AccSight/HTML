<?php
    //collect data from form
    $pName = $_POST['pro_name'];
    $dsc = $_POST['desc'];
    $trd = $_POST['trade'];
    $ret = $_POST['retail'];


    //connect to server
    if(!($connection = mysqli_connect("localhost","root","K@stx8909"))){
        die("Could not connect to server");
    }
    //select database
    if(!mysqli_select_db($connection,"AccSight")){
        die("Could not find database on server");
    
    }

    //make first query
    $result = mysqli_query($connection,"SELECT MAX(pro_id) FROM product");
    $row = mysqli_fetch_row($result);
    $id = $row[0]+1;

    //make query
    $sql = "INSERT INTO product (pro_id,pro_name,pro_desc,trade,retail) VALUES"; 
    $sql .= "('" . $id . "',";
    $sql .= "'" . $pName . "',";
    $sql .= "'" . $dsc . "',";
    $sql .= "'" . $trd . "',";
    $sql .= "'" . $ret . "')";

    if(!($result2 = mysqli_query($connection,$sql))){
        die("Could not query table");
    }

    echo "Upload Successfull";

?>