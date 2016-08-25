<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">


<link rel="stylesheet" href="assets/css/style.css">
<style>

.create{
	margin-bottom: 20px;
	background:lightgreen;
	color:white;
}
table{
	margin-top:50px;
}

</style>

<?php 
 include "config.php";

  $id=$_GET['id'];

 $sql1="SELECT name,email,telnumb FROM table1 WHERE id='$id'";

 $query1=mysqli_query($conn,$sql1);

 var_dump($query1);
 if ($query1) {
   # code...
 }else{
  echo "error";
 }

/* while( $row=mysqli_fetch_assoc($query1)){

  foreach ($row as $key => $value) {
     
     echo $key ."->".$value."<br>";
  }
 }*/
  
?>

</head>
<body>
<div class="container">
<div class="row">
<h1>Update Customer</h1>

<div class="col-md-3">
</div>
<div class="col-md-6" style="margin-top:20px;">
<form action="" method="post">
<input type="text" class="form-control" name="ad" placeholder="Ad"></br>
  <input type="text" class="form-control" name="email" placeholder="soyad"></br>
 <input type="number" class="form-control" name="numb" placeholder="yash"></br>
  
<input class="btn btn-default create"  name="update" type="submit" value="Update" >
  <input class="btn btn-default create" name="back" type="submit" value="Back" > 

</form>

</div>

 </div>
<div class="row" style="margin-top:50px;">
  <div class="col-md-12 text-center" style="background-color:#F0F0F0;padding-top:20px;">
  
</div>
</div>

</div>

</div>
</body>
</html>

<!--Process with we make -->

<?php


  include "config.php";


if( isset($_POST["update"]) ){

    $id=$_GET["id"];

    $ad=$_POST["ad"];
    $email=$_POST["email"];
    $telnumb=$_POST["numb"];
    $sql="UPDATE table1 SET name='$ad',email='$email',telnumb='$telnumb' WHERE id='$id'";
     
     $query=mysqli_query($conn,$sql);

header("Location:index.php"); 
}elseif (isset($_POST["back"])) {
  
  header("Location:index.php");
}

?>