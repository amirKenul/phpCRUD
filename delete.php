<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">


<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="container">
<div class="row">
<h1>Delete a Customer</h1>
<div class="alert alert-danger" role="alert">
  <strong>Are you sure to delete</strong> 
</div>

 </div>
<div class="row" style="margin-top:30px;">
  <div class="col-md-12 text-center" style="background-color:#F0F0F0;padding:20px;">
  <form action="" method="post">
   <input class="btn btn-default create"  name="delete" type="submit" value="Yes" style="background:red; color:white;" >
  <input class="btn btn-default create" name="back" type="submit" value="No" > 
  </form>
</div>
</div>

</div>

</div>

</body>
</html>
<?php

	include "config.php";


if( isset($_POST["delete"]) ){
    $id=$_GET["id"];

    $sql="DELETE FROM table1 WHERE id=$id ";
if($conn){
	echo "connected";
   $query=mysqli_query($conn,$sql);
}

header("Location:index.php"); 
}elseif (isset($_POST["back"])) {
	
	header("Location:index.php");
}

?>