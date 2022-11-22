<?php
include "connections.php";
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
      <input type="text" class="form-control" id="vaccinationcenter" placeholder="Enter vaccinationcenter" name="vaccinationcenter">
    </div>
    <div class="form-group">
      <label for="pwd">place:</label>
      <input type="text" class="form-control" id="place" placeholder="Enter place" name="place">
    </div>
    <div class="form-group">
      <label for="pwd">dose:</label>
      <input type="text" class="form-control" id="dose" placeholder="Enter dose" name="dose">
    </div>
    <button type="submit" name="insert"  class="btn btn-default">insert</button>
    <button type="submit" name="groupby"  class="btn btn-default">group by vaccine</button>
  </form>
</div>
</div>
<div class="col-lg-12">
<table class="table table-bordered">
    <thead>
        <tr>
            
            <th>vaccinationcenter</th>
            <th>place</th>
            <th>dose</th>
            <th>details</th>
            <th>delete</th>
</tr>
</thead>
<tbody>
    <?php
    $res=mysqli_query($link,"select * from table1");
    while($row=mysqli_fetch_array($res))
    {
       echo "<tr>";
       echo "<td>"; echo $row["vaccinationcenter"]; echo "</td>";
       echo "<td>"; echo $row["place"]; echo "</td>";
       echo "<td>"; echo $row["dose"]; echo "</td>";
       echo "<td>"; ?><a href="details.php?id=<?php echo $row["vaccinationcenter"];?> <button type="button" class="btn btn-success">details</button></a><?php echo "</td>";
       echo "<td>"; ?><a href="delete.php?id=<?php echo $row["vaccinationcenter"];?><button type="button" class="btn btn-danger">delete</button></a><?php echo "</td>";
       echo"</tr>";





    }
?>
</tbody>
</table>





</div>


</body>
<?php
if(isset($_POST["insert"]))
{
  mysqli_query($link,"insert into table1 values('$_POST[vaccinationcenter]','$_POST[place]','$_POST[dose]')") or die(mysqli_error($link)); 
?>
<script type="text/javascript">
    window.location.href=window.location.href;
    </script>
    <?php
}

?>
<?php
if(isset($_POST["groupbyvaccine"]))
{
  mysqli_query($link,"select vaccinationcentre from table1  groupby 'dose'"); 
?>
<script type="text/javascript">
    window.location.href=window.location.href;
    </script>
    <?php
}

?>
</html>
