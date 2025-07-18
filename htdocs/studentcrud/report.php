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
    <style type ="text/css" media="print">
        @media print{
            .noprint, .noprint * {
                display: none !important;
            }
        }
    </style>
</head>
<body onload="print()">
    <div class="container">
<center>
    <img src="https://sis-pucu.phinma.edu.ph/image/login/logo_college.png" 
         alt="PHINMA Logo" 
         style="width: 25%; margin-top: 20px;">
    <h3 style="margin-top: 10px">Student Master List</h3>
    <hr>
</center>

        <table id ="ready" class="table table-striped table-bordered" style="width:100%;">
            <thead>
                <tr>
                    <th>ID Number</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Contact Number</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include 'conn.php';
                    $get_master_list = mysqli_query($conn, "SELECT * from tbl_student");

                    while($row = mysqli_fetch_array($get_master_list)){
                ?>
                <tr>
                    <td><?php echo $row['student_id']?></td>
                    <td><?php echo $row['full_name']?></td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['address']?></td>
                    <td><?php echo $row['contact_no']?></td>                    
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <div class = "container">
        <button type ="" class="btn btn-info noprint" style = "width:100%" onclick="window.location.replace('index.php');">CANCEL PRINTING</button>
    </div>
</body>
</html>