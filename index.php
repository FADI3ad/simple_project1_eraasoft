<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>

<body>
    <form action="handle.php" method="POST">
        <label for="name">Name</label><br>
        <input type="text" name="name" id="name" placeholder="Enter your full name" >
        <br>
        <br>
        <label for="email">Email</label><br>
        <input type="email" name="email" id="email" placeholder="Enter your email" >
        <br>
        <br>
        <label for="phone">Phone</label><br>
        <input type="tel" name="phone" id="phone" placeholder="Enter your phone number" >
        <br>
        <br>
        <label for="password">Password</label><br>
        <input type="password" name="password" id="password" placeholder="Enter your password" >
        <br>
        <br>
        <button type="submit">Send</button>
    </form>

</body>

</html>