<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <div class="container">
        <div class="center">
            <h1>Login Form</h1>
            <p>Kindly place your credentials here</p>
        </div>

        <!-- login form -->
        <form action="pakicheck.php" method="post">
            <input type="text" name="username" placeholder="Username" />

            <input id="pwd" name="password" type="password" placeholder="Password" />

            <button type="submit">Login</button>
        </form>
    </div>
</body>

</html>
