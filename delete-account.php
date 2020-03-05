<?php
    $conn = mysqli_connect("localhost", "root", "", "users");
    $sql = "select * from students";
    mysqli_query($conn,$sql);




?>
