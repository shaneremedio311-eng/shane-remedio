<?php

    session_start();

    if ($_SESSION['student_id'] == 2) {

    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Welcome to homepage!</h1>
    <h2><?php echo $_SESSION['firstname'] . $_SESSION['lastname']; ?></h2>
    <a type="button" href="logout.php">Logout</a>
</body>

</html>

<?php

    } else {
    echo "You dont have permission to acccess this!";
    }

?>