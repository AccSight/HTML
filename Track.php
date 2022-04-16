<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Tunes</title>
</head>
<body>
    <h2>My Favourite Songs</h2>
    <table>
        <tr>
            <th>track_id</th>
            <th>track_name</th>
            <th>artist_id</th>
            <th>album_id</th>
            <th>time</th>
        </tr>
        <?php
            //connect to server
            if(!($conn = mysqli_connect("localhost", "root", "K@stx8909"))){
                die("Could not connect to server");
            }
            //select database
            if(!(mysqli_select_db($conn,"music"))){
                die("Could not find music database");
            }

            //make query
            $sql = "SELECT * FROM track;";
            if(!($result = mysqli_query($conn,$sql))){
                die("Could not query table");
            }

            //retrive and display
            while($row = mysqli_fetch_assoc($result)){
                print "<tr>\n";
                foreach($row as $data){
                    print "\t<td>{$data}</td>\n";
                }
                print "\t</tr>\n";
            }          
        ?>
    </table>
</body>
</html>