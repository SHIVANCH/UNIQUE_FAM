<?php
$username="root";
$server='localhost';
$db='youtubeuserdata';

$con=mysqli_connect($server,$username,$db);
if($con)
{
    echo"Connection successful";
}

    else
    {
        echo"NO connection";
    }



    ?>
