<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
</head>
<body>
    <h1>Registration</h1>
    <?php
        $myvar = "hello";
        echo $myvar;
    ?>
    <form action="/process.php" method="post">
        <input type="text" name="username">
        <input type="password" name="password">
        <input type="submit">
    </form>


</body>
</html>