<?php
include 'conn.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Login & Registration System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    <header>
        <div class="navbar navbar-dark bg-dark box-shadow">
            <div class="container d-flex justify-content-between">
                <a href="#" class="navbar-brand d-flex align-items-center">
                    <strong>Dashboard</strong>
                </a>
            </div>
        </div>
    </header>

    <?php
    if (isset($_SESSION['username'])) {
    ?>
        <section class="py-5 text-center bg-light">
            <div class="container">
                <h1 class="display-5 fw-bold">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></h1>
                <p class="lead text-muted">
                    Something short and leading about the collection below—its contents, the creator, etc. 
                    Make it short and sweet, but not too short so folks don't simply skip over it entirely.
                </p>
                <div class="d-flex justify-content-center gap-2">
                    <a href="#" class="btn btn-primary my-2">More menu</a>
                    <a href="logout.php" class="btn btn-secondary my-2">Logout</a>
                </div>
            </div>
        </section>
    <?php
    } else {
        header("Location: index.php");
        exit();
    }
    ?>
</body>

</html>
