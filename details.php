<?php
include "connections.php";
$vaccinationcenter=$_GET["id"];

$vaccinationcenter="";
$place="";
$dose="";


$res=mysqli_query($link,"select * from table1");
while($row=mysqli_fetch_array($res))
{
 $vaccinationcenter=$row["vaccinationcenter"];
 $place=$row["place"];
 $dose=$row["dose"];



}




?> 



<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Vaccination Centre Details</h2>
  <form action="" name="form1" method="post">
    <div class="form-group">
      <label for="email">vaccinationcenter:</label>
      <input type="text" class="form-control" id="vaccinationcenter" placeholder="Enter vaccinationcenter" name="vaccinationcenter" value="<?php echo $vaccinationcenter; ?>">
    </div>
    <div class="form-group">
      <label for="pwd">place:</label>
      <input type="text" class="form-control" id="place" placeholder="Enter place" name="place"  value="<?php echo $place; ?>">
    </div>
    <div class="form-group">
      <label for="pwd">dose:</label>
      <input type="text" class="form-control" id="dose" placeholder="Enter dose" name="dose" value="<?php echo $dose; ?>">
    </div>
    <button type="submit" name="insert"  class="btn btn-default">back</button>
  </form>
</div>
</div>






</div>


</body>

</html>
