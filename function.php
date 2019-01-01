<?php
    require "db_connection1.php";
    function getCats()
    {
        global $con;
        $getCatQuery="select * from categories";
        $getCatResult=mysqli_query($con,$getCatQuery);
        $row= mysqli_fetch_assoc($getCatResult);
        while($row=mysqli_fetch_row()) {
                $title = $row['cat_title'];
                echo "<li><a class='nav-link' href='#'>$title</a></li>";
        }
}

function getbrand()
{
    global $con;
    $getCatQuery="select * from categories";
    $getCatResult=mysqli_query($con,$getCatQuery);
    $row= mysqli_fetch_assoc($getCatResult);
    while($row=mysqli_fetch_row()) {
        $title = $row['brand_title'];
    echo "<li><a class='nav-link' href='#'>$title</a></li>";
    }
}
