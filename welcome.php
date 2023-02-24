<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

$con=mysqli_connect('localhost','root','','mydb');
$res=mysqli_query($con,"select * from leavedetails");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css" rel="stylesheet">
</head>

<body>
    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>

    <div class="container" style="margin-top:50px;">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Index No</th>
                    <th>Intake</th>
                    <th>Mobile No.</th>
                    <th>Reason</th>
                </tr>
            </thead>
            <tbody>
                <?php while($row=mysqli_fetch_assoc($res)){?>
                <tr>
                    <td><?php echo $row['fname']?></td>
                    <td><?php echo $row['lname']?></td>
                    <td><?php echo $row['indexNo']?></td>
                    <td><?php echo $row['intake']?></td>
                    <td><?php echo $row['mobileNo']?></td>
                    <td><?php echo $row['reason']?></td>
                </tr>
                <?php } ?>
                </thead>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready(function() {
        $('.table').DataTable();
    });
    </script>


    <a href="logout.php">Logout</a>
</body>

</html>



