<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Registration </title>
		<link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
		<script src="http://code.jquery.com/jquery.js"></script>
		<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	</head>	
<body>
<div class="container-fluid">
            <div class="row">
                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">
                        <center> <h1>Enter Your Details</h1></center>
                        <form action="" method="POST" role="form">
                            <div class="form-group">
                                 <label for="">Name</label>
                                <input type="text" class="form-control" placeholder="Enter First Name" name="name"  required = "true">
                            </div>
                            <div class="form-group">
                                <label for="">Math marks</label>
                                <input type="number" class="form-control"  placeholder="Enter Math marks"  name="math" required = "true">
                            </div>
                            <div class="form-group">
                                 <label for="">Science marks</label>
                                 <input type="number" class="form-control" placeholder="Enter Science marks" name="science" required = "true">
                            </div>
                          
                              <div class="form-group">
                                 <label for="">English marks</label>
                                <input type="number" class="form-control" placeholder="Enter English marks" name="english" required = "true">
                            </div>
                    
                            <center>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                            </center>
                        </form>
                    </div>
                </div>
</div>

</body>

	<?php 
		include 'db_connect.php';
		$conn = OpenCon();
		if (isset($_POST['submit'])){
			$name = $_POST["name"];
			$math = $_POST["math"];
			$science = $_POST["science"];   
			$english = $_POST["english"]; 
                        $total = ($math+$science+$english);
                        $percent= (($total/300)*100);
                        echo $percent;
			echo "<div class=\"container\" ";
			$sql = "CREATE TABLE `calci`.`details` ( `Id` INT NOT NULL AUTO_INCREMENT , `StudentName` VARCHAR(50) NOT NULL , `Math` INT NOT NULL , `Science` INT NOT NULL ,`English` INT NOT NULL,`Percent` INT NOT NULL ,PRIMARY KEY (`Id`)) ENGINE = InnoDB;";
			if ($conn->query($sql) === TRUE) {
				echo "Table details created successfully" ;
				echo "<br>";
			}

			$sql="insert into details (StudentName,Math,Science,English,Percent) values ('$name','$math','$science','$english','$percent')";	
			$query=mysqli_query($conn,$sql);
			if($query){
				 set_time_limit(3);
				echo 'data inserted';
                                header("location:studentDetails.php");
				echo "<br>";
			}
			else
			{
				echo 'Not Inserted';
				echo "<br>"; 
				echo  $conn->error;
			}
		}	
		
		
		
		?>
</html>