<?php
include 'conn.php';
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Trash - Deleted Students</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fonts and Icons -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <style>
        body {
            color: #566787;
            background: #f5f5f5;
            font-family: "Varela Round", sans-serif;
            font-size: 13px;
        }

        .table-wrapper {
            background: #fff;
            padding: 20px 25px;
            margin: 30px 0;
            border-radius: 3px;
            box-shadow: 0 1px rgba(0, 0, 0, .05);
        }

        .table-title {
            padding-bottom: 15px;
            background: #3a4f26;
            color: #fff;
            padding: 16px 30px;
            margin: -20px -25px 10px;
            border-radius: 3px 3px 0 0;
        }

        .table-title h2 {
            margin: 5px 0 0;
            font-size: 24px;
        }

        .btn-sm i {
            vertical-align: middle;
        }

        .material-icons {
    font-size: 18px;
    vertical-align: middle;
}

    </style>
</head>

<body>

    <section class="py-5 text-center bg-gray text-dark">
        <div class="container">
            <img src="https://sis-pucu.phinma.edu.ph/image/login/logo_college.png"
                alt="PHINMA Logo"
                style="width: 20%; margin-top: 20px">
            <h1 class="display-5 fw-bold">Student Trash Bin</h1>
            <p class="lead">Below are soft-deleted students. You can restore or permanently delete them.</p>

            <div class="d-flex justify-content-center">
                <a href="index.php" class="btn btn-secondary btn-lg d-flex align-items-center">
                    <i class="material-icons mr-2">arrow_back</i> Back to Dashboard
                </a>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2><b>Deleted Students</b></h2>
                    </div>
                </div>
            </div>

            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Address</th>
                        <th>Contact #</th>
                        <th>Deleted At</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $trashed = mysqli_query($conn, "SELECT * FROM tbl_trash ORDER BY deleted_at DESC");
                    while ($row = mysqli_fetch_assoc($trashed)) {
                        echo "<tr>
                        <td>{$row['student_id']}</td>
                        <td>{$row['full_name']}</td>
                        <td>{$row['email']}</td>
                        <td>{$row['address']}</td>
                        <td>{$row['contact_no']}</td>
                        <td>{$row['deleted_at']}</td>
                        <td class='d-flex'>
                            <a href='restore.php?id={$row['student_id']}' class='btn btn-success btn-sm mr-2' title='Restore'>
                                <i class='material-icons'>restore</i>
                            </a>
                            <a href='perma-delete.php?id={$row['student_id']}' class='btn btn-danger btn-sm' title='Delete Permanently' onclick=\"return confirm('Permanently delete this student?');\">
                                <i class='material-icons'>delete_forever</i>
                            </a>
                        </td>
                    </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>