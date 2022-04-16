<?php
    $sName = $_POST['stName'];
    $sGrade = $_POST['grade'];
    $sSection = $_POST['section'];
    $sTeacher = $_POST['teacher'];

    print "<h2>Collected Student Info</h2>";
    echo 'Student name is ' . $sName . '<br>';
    echo '. He is in Grade ' , $sGrade . '<br>';
    echo '. He studies in section ' . $sSection . '<br>';
    echo '. He is taught by ' . $sTeacher . '<br>';

?>