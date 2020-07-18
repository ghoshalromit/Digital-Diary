<?php
include "updateconnection.php";
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
      <input type="date" class="form-control"  placeholder="Enter date" name="date">
    </div>
    <div class="form-group">
      <label for="textarea">Textarea</label>
      <input type="textarea" class="form-control" placeholder="Enter your memory" name="textarea">
    </div>
    <button type="submit" class="btn btn-default" name="insert">Insert</button>
    <button type="submit" class="btn btn-success" name="update">Update</button>
    <button type="submit" class="btn btn-danger" name="delete">Delete</button>
  </form>
</div>
</div>
<div class="col-lg-12">
<table class="table table-bordered">
    <thead>
      <tr>
        <th>Date</th>
        <th>Your Memory</th>
        <th>Edit</th>
      </tr>
    </thead>
    <tbody>
      <?php
$res= mysqli_query($link,"select * from red");
while($row=mysqli_fetch_array($res))
{
echo "<tr>";
echo "<td>"; echo $row["date"]; echo"</td>";
echo "<td>"; echo $row["textarea"]; echo"</td>";
echo "<td>"; ?> <a href="newedit.php?date=<?php echo $row["date"];?>"><button type="button" class="btn btn-success" name="update">Update</button></a> <?php echo "</td>";
echo "</tr>";
}
?>
</tbody>
  </table>
</div>
</body>
<?php
if(isset($_POST["insert"]))
{
mysqli_query($link,"insert into red values(NULL,'$_POST[date]','$_POST[textarea]')");

}
if(isset($_POST["delete"]))
{
mysqli_query($link,"delete from red where date=('$_POST[date]' )") or die(mysqli_error($link));

}
if(isset($_POST["update"]))
{
mysqli_query($link,"update red set textarea='$_POST[textarea]' where date=('$_POST[date]')") or die(mysqli_error($link));

}
?>

</html>

