<?php
    session_start();
    if (!isset($_SESSION['user'])) {
        die("Route not found | 500");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card shadow-sm">
                    <div class="card-body">
                        <h3 class="card-title mb-4 text-center">Your Profile</h3>
                    
                        <ul class="list-group mb-4">
                            <li class="list-group-item"><strong>Name:</strong> <?=  $_SESSION['user']['name'];?> </li>
                            <li class="list-group-item"><strong>Email:</strong> <?=  $_SESSION['user']['email'];?> </li>
                            <li class="list-group-item"><strong>Phone:</strong> <?=  $_SESSION['user']['phone'];?> </li>
                        </ul>

                        <form action="Auth/logout.php" method="POST">
                            <button type="submit" class="btn btn-danger w-100">Logout</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
