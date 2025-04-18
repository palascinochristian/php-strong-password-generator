<?php 
session_start();
if (!isset($_SESSION['password'])) {
    header('Location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Result</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow">
                    <div class="card-body">
                        <h2 class="text-center mb-4">Your Generated Password</h2>
                        <div class="alert alert-success text-center">
                            <strong class="fs-5"><?php echo $_SESSION['password']; //Recupero la password dalla sessione ?></strong>
                        </div>
                        <div class="text-center">
                            <a href="index.php" class="btn btn-primary">Generate another password</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>