<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playlist</title>
</head>
<body>
    <h2>Tracks Played</h2>
    <table>
        <tr>
            <th>artist_id</th>
            <th>album_id</th>
            <th>track_id</th>
            <th>last_played</th>
        </tr>
        <?php
            //connect to server
            if(!($conn = mysqli_connect("localhost","root","K@stx8909"))){
                die("Could not connect to database");
            }
            //select database on server
            if(!(mysqli_select_db($conn,"music"))){
                die("Could not find music database");
            }
            //make query
            $sql = "SELECT * FROM played;";
            if(!$result = mysqli_query($conn,$sql)){
                die("Could not query table");
            }
            //retrive and display
            while($row = mysqli_fetch_assoc($result)){
                print "<tr>";
                foreach($row as $data){
                    print "\t<td>{$data}</td>\n";
                }
                print "</tr>";
            }
        ?>
    </table>
</body>
</html>