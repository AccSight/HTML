<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Albums</title>
</head>
<body>
    <h2>Albums found on database</h2>
    <table>
        <tr>
            <th>artist_id</th>
            <th>album_id</th>
            <th>album_name</th>
        </tr>
        <?php
            //connect to server
            if(!($conn = mysqli_connect("localhost", "root","K@stx8909"))){
                die("Could not connect to server");
            }
            
            //select database
            if(!(mysqli_select_db($conn,"music"))){
                die("Could not connect to database");
            } 
            //make query
            $sql = "SELECT * FROM album;";
            if(!($result = mysqli_query($conn,$sql))){
                die("Could not query table");
            }
           
            //store and display results
            while($row = mysqli_fetch_assoc($result)){
                print "<tr>\n";
                //for each column in current row
                foreach($row as $data){
                    print "\t<td>{$data}</td>\n";
                    print "\t";
                }
                print "</tr>\n";
            }
        ?>
    </table>
</body>
</html>