<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">


<link rel="stylesheet" href="assets/css/style.css">

	<?php

 include "config.php";

$id=$_GET['id'];


 $sql1="SELECT id,name,email,telnumb FROM table1 WHERE id=$id";

 $query1=mysqli_query($conn,$sql1);


 $row=mysqli_fetch_assoc($query1);

echo $row['name'];

/* if(isset($_POST["read"])){
 	include "config.php";
 	$sql1="SELECT name,email,telnumb FROM table1 WHERE id='$id'";
 	var_dump($query1);
    $row=mysqli_fetch_assoc($query1);
 }*/


/* while( $row=mysqli_fetch_assoc($query1)){

  foreach ($row as $key => $value) {
     
     echo $key ."->".$value."<br>";
  }
 }*/
  


	?>
</head>
<body>
<div class="container">
	<h1>READ A CUSTOMER</h1>
	<div class="col-md-6 col-md-offset-3" style="margin-top: 50px;">
	<p>Name  -<?php echo $row['name']; ?></p>
	<p>Email Address  - <?php echo $row['email']; ?></p>
	<p>Mobile Number  - <?php echo $row['telnumb']; ?></p>

<form action="" method="post">
	<input class="btn btn-default create" name="back" type="submit" value="Back" >
</form>
	</div>

</div>

</body>
</html>
<?php

if(isset($_POST["back"])) {
  
  header("Location:index.php");
}

?>