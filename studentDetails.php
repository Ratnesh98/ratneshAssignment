<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Registration </title>
		<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
		<script src="http://code.jquery.com/jquery.js"></script>
		<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
                <link rel="stylesheet" href="style.css" type="text/css">
	</head>	
<body id="background">
   
 <div class="container">
            <div class="table-responsive">
                <table class="table table-striped table-bordered table-hover">
                    <caption id ="capStyle">Student Details</caption>
                <tbody>
                    <tr><th>Id</th><th>Name </th> <th>MATH </th> <th>Science</th><th>English</th><th>Percent</th></tr>					
       

<?php 
		include 'db_connect.php';
		$conn = OpenCon();
                
 $sql = "SELECT * FROM details";
 $result = $conn->query($sql);

if ($result->num_rows > 0) {
       while($row = $result->fetch_assoc()) {
       echo "<tr>";
       echo "<td>" . $row['Id'] . "</td>";
       echo "<td>" . $row['StudentName'] . "</td>";
       echo "<td>" . $row['Math'] . "</td>";
       echo "<td>" . $row['Science'] . "</td>";
        echo "<td>" . $row['English'] . "</td>";
         echo "<td>" . $row['Percent'] . "</td>";
	   echo "</tr>";
  }
echo "</table>";
} else {
    echo "0 results";
}

	echo "</div>";
		CloseCon($conn);
	?>

    </tbody>
       </table>
            </div>
 </div>
</body>
</html>
