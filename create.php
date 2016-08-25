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
	
	background:green;
	color:white;
}
table{
	margin-top:50px;
}
p{
  margin-left: 70%;
}

</style>



</head>
<body>
<div class="container">
<div class="row" >
<h1>CREATE A CUSTOMER</h1>

<div class="col-md-4">
  <p>Name<p></br>
 <p> Email Adress<p></br>
  <p> Number</p></br>
</div>

<div class="col-md-4">
<form action="" method="post">
<input type="text" class="form-control" name="ad" placeholder="Ad"></br>
  <input type="text" class="form-control" name="email" placeholder="soyad"></br>
  <input type="number" class="form-control" name="numb" placeholder="tel-numb">
    <input class="btn btn-default create"  name="create" type="submit" value="Create" >
   <input class="btn btn-default" name="back" type="submit" value="Back">
  
  

  </form>
</div>

<div class="col-md-4">
<div class="alert alert-danger" role="alert">
  <strong>Oh snap!</strong> Change a few things up and try submitting again.
</div>
</div>



</div>

<div class="row" style="margin-top:30px;">
   <div class="col-md-12 text-center" style="background-color:#F0F0F0;padding:20px;">

  

</div>
</div>

</div>





</body>
</html>


<?php


if (isset($_POST['create'])) {
  

$ad=$_POST["ad"];
$email=$_POST["email"];
$telnumb=$_POST["numb"];
print_r($ad);
include "config.php";
$sql="INSERT INTO table1(name,email,telnumb) VALUES('$ad','$email','$telnumb')";

$query=mysqli_query($conn,$sql);



if($query){
  header("Location:index.php");
}else{
  echo "alinmadi";
}


} else{

  echo"data -ni elave et";
}


?>

