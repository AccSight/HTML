<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artists</title>
</head>
<body>
    <h1>Artists on Base</h1>
    <table>
        <tr>
            <th>Artist ID</th>
            <th>Artist Name</th>
        </tr>
        <?php
            
        ?>
    </table>
    <?php

    include "database.php";

    if(!($connection = @ mysqli_connect("localhost", "root","K@stx8909"))){
        die("Cannot connect");
    }

    if(!(mysqli_select_db($connection,"music"))){
        die("Couldn't select music database");
    }

    if((!$result = mysqli_query($connection, "SELECT * FROM artist;"))){
        die("Couldn't run query");
    }
   
    while($row = mysqli_fetch_assoc($result)){
           print "<tr>\n";
           foreach($row as $data){
              print "\t<td>{$data}</td>\n";
              print "\t";     
           }
           print "</tr>\n";
           print "<br>";
    }
    ?>
    </table>
</body>
</html>