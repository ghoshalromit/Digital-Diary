<?php
include "updateconnection.php";
$Id=$_GET["Id"];
$date="";
$textarea="";
$res=mysqli_query($link,"select * from red where Id=$Id");
while($row=mysqli_fetch_array($res))
{
$date = $row["date"];
$textarea = $row["textarea"];
}
?>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
<div class="col-lg-4">
  <h2>Want to edit the memories?</h2>
  <form action="" name="form1" method="POST">
    <div class="form-group">
      <label for="date">Date</label>
      <input type="date" class="form-control"  placeholder="Enter date" name="date" value="<php echo $date; ?>">
    </div>
    <div class="form-group">
      <label for="textarea">Textarea</label>
      <input type="textarea" class="form-control" placeholder="Enter your memory" name="textarea" value="<php echo $textarea; ?>">
    </div>
    <button type="submit" class="btn btn-success" name="update">Update</button>
  </form>
</div>
</div>
</div>
</body>
<?php

if(isset($_POST["update"]))
{
mysqli_query($link,"update red set date='$_POST[date]' textarea='$_POST[textarea]' where Id=$Id") or die(mysqli_error($link));
?>
<script type="text/javascript">
window.location="update.php";
</script>
<?php
}
?>

</html>


