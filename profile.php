
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>

    <?php 

        session_start();
        echo "<h1>Welcome ". $_SESSION['userName']."</h1>";
        echo "<h2>Email: ". $_SESSION['email']."</h2>";
        echo "<h2>phone: ". $_SESSION['phone']."</h2>";
        echo "<h2>Password: ". $_SESSION['password']."</h2>";
    ?>

    <form action="logout.php" method="post">
        <button type="submit">Logout</button>
    </form>




</body>
</html>