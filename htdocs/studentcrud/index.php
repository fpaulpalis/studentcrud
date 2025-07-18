<?php
include 'conn.php';
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>

<?php
// insert student
if (isset($_POST['btnSave'])) {
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $contactNumber = $_POST['contactNumber'];

    $insert_data = mysqli_query($conn, "INSERT INTO tbl_student (full_name,email,address,contact_no) 
    VALUES('$fullName','$email','$address','$contactNumber')");

    if ($insert_data) {
        header('location:index.php?message=success-add');
    } else {
        echo "Failed to Save Student Details" . mysqli_connect_error();
    }
}
?>

<?php
// delete student
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM tbl_student WHERE student_id=$id");
    header('location: index.php?message=success-delete');
}

?>

<?php
// update student
if (isset($_POST['btnUpdate'])) {
    $id = $_POST['id'];
    $fullName = $_POST['fullName'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $contactNumber = $_POST['contactNumber'];

    mysqli_query($conn, "UPDATE tbl_student SET full_name='$fullName', email='$email', address = '$address', contact_no = '$contactNumber' WHERE student_id=$id");
    header('location: index.php?message=success-update');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP and BOOTSTRAP CRUD Tutorial</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


    <style type="text/css">
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

        .delete {
            color: red;
        }
    </style>
</head>

<body>
    <section class="py-5 text-center bg-gray text-dark" >
        <div class="container">
             <!-- Logo -->
    <img src="https://sis-pucu.phinma.edu.ph/image/login/logo_college.png" 
         alt="PHINMA Logo" 
         style="width: 20%; margin-top: 20px">

        <h1 class="display-5 fw-bold">Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?></h1>        
        </div>
    </section>

    <div class="container d-flex justify-content-center" style="margin-top: 15px;">
        <a href="#addStudentModal" class="btn btn-success btn-lg mx-2" data-toggle="modal"><span>Add New Student</span></a>
        <a href="report.php" class="btn btn-primary btn-lg mx-2"><span>Print Report</span></a>
        <a href="logout.php" class="btn btn-danger btn-lg mx-2"><span>Logout</span></a>
    </div>
    <div class="container">
        <!-- GET MESSAGE IF SUCCESS -->
        <?php if (isset($_GET['message'])): ?>
            <div class="alert alert-success text-center" role="alert" id="alert">
                <?php
                if ($_GET['message'] == "success-add") {
                    echo "Successfully Added Student.";
                } else if ($_GET['message'] == "success-update") {
                    echo "Successfully Updated Student.";
                } else if ($_GET['message'] == "success-delete") {
                    echo "Successfully Deleted Student.";
                }
                ?>

            </div>
        <?php endif ?>

        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2><b>Manage Students</b></h2>
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
                        <th>Actions</th>
                    </tr>
                </thead>

                <?php
                $select_data = mysqli_query($conn, "SELECT * FROM tbl_student");
                while ($student = mysqli_fetch_array($select_data)) {
                ?>

                    <tbody>
                        <tr>
                            <td class="id"><?php echo $student['student_id'] ?></td>
                            <td class="full_name"><?php echo $student['full_name'] ?></td>
                            <td class="email"><?php echo $student['email'] ?></td>
                            <td class="address"><?php echo $student['address'] ?></td>
                            <td class="contact_no"><?php echo $student['contact_no'] ?></td>
                            <td>
                                <a href="#" class="edit" id="btnEditModal" name="btnEditModal" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                                <a href="index.php?delete=<?php echo $student['student_id'] ?>" class="delete" name="btnDelete"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>

                            </td>
                        </tr>
                    </tbody>
                <?php } ?>
            </table>
        </div>
    </div>

    <!-- add student modal -->
    <div id="addStudentModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="#">

                    <div class="modal-header">
                        <h4 class="modal-title">Add Student</h4>
                        <button type="button" class="btn btn-link ms-auto" data-dismiss="modal">Close</button>
                    </div>

                    <div class="modal-body">
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="text" name="fullName" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea name="address" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Contact Number</label>
                            <input type="text" name="contactNumber" class="form-control" required>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" name="btnSave">Save</button>
                        <button type="submit" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- edit student modal -->
    <div id="editStudentModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="#">

                    <div class="modal-header">
                        <h4 class="modal-title">Edit Student</h4>
                        <button type="button" class="btn btn-link ms-auto" data-dismiss="modal">Close</button>
                    </div>

                    <div class="modal-body">
                        <div class="form-group">
                            <label>Full Name</label>
                            <input type="hidden" id="id" name="id" class="form-control" required>
                            <input type="text" id="fullName" name="fullName" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <textarea name="address" id="address" class="form-control" required></textarea>
                        </div>
                        <div class="form-group">
                            <label>Contact Number</label>
                            <input type="text" id="contactNumber" name="contactNumber" class="form-control" required>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success" name="btnUpdate">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
        setTimeout(function() {
            document.getElementById("alert").style.display = "none";
        }, 3000);
    </script>

    <!-- script of edit button -->
    <script type="text/javascript">
        $('.edit').click(function() {
            var $row = $(this).closest('tr');
            var id = $row.find('.id').text();
            var full_name = $row.find('.full_name').text();
            var email = $row.find('.email').text();
            var address = $row.find('.address').text();
            var contact_no = $row.find('.contact_no').text();

            $('#id').val(id);
            $('#fullName').val(full_name);
            $('#email').val(email);
            $('#address').val(address);
            $('#contactNumber').val(contact_no);

            $('#editStudentModal').modal('show');
        });
    </script>
</body>

</html>