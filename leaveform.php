<?php 

include 'config.php';

error_reporting(0);   


if (isset($_POST['submit'])) {
	$fname = $_POST['First_Name'];
	$lname = $_POST['Last_Name'];
	$index = $_POST['index_no'];
	$intake = $_POST['Intake'];
	$phone = $_POST['phone'];
	$reason = $_POST['reason'];

	// $email = $_POST['email'];

    #file name with a random number so that similar dont get replaced
    $pname = rand(1000,10000)."-".$_FILES["file"]["name"];

    #temporary file name to store file
    $tname = $_FILES["file"]["tmp_name"];
 
   #upload directory path
    $uploads_dir = 'images';
    #TO move the uploaded file to specific location
    move_uploaded_file($tname, $uploads_dir.'/'.$pname);
  

		$sql = "INSERT INTO `leavedetails`(`fname`, `lname`, `indexNo`, `intake`, `mobileNo`, `reason`, `file`)
         VALUES('$fname', '$lname', '$index', '$intake', '$phone', '$reason', '$pname')";
		$result = mysqli_query($conn, $sql);
		if ($result) {
			echo "<script>alert('Wow! User Registration Completed.')</script>";
			// $username = "";
			// $email = "";
		} else {
			echo "<script>alert('Woops! Something Wrong Went.')</script>";
		}	
    
}

?>

<html>

<head>
    <title>Form</title>
    <link rel="stylesheet" type="text/css" href="style1.css">

</head>

<body>
    <nav><a href="#" class="btn-area"></a></nav>
    <div class="Student Details">
        <h1>Student Details</h>
    </div>
    <div class="main">
        <form action="" method="POST">
            <div id="name">
                <h2 class="Name">Name</h2>
                <input class="FirstName" type="text" name="First_Name"><br>
                <label class="Firstlabel">First Name</label>
                <input class="lastname" type="text" name="Last_Name">
                <label class="lastlabel">Last Name</label>
            </div>

            <h2 class="name">Index Number</h2>
            <input class="index no" type="text" name="index_no">

            <h2 class="name">Intake</h2>
            <select class="option" name="Intake">
                <option disabled="disabled" selelcted="selelcted">--choose option--</option>
                <option>35</option>
                <option>36</option>
                <option>37</option>
                <option>38</option>
                <option>39</option>
            </select>

            <h2 class="name">Phone Number</h2>
            <input class="code" type="text" name="phone">

            <h2 class="name">Reason</h2>
            <input class="reason" type="text" name="reason">

            <input type="file" name="file" class="inp"><br>
            <input type="submit" name="submit" value="SUBMIT" class="subbtn"><br>
            <br>
        </form>


    </div>

</body>

</html>