<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include 'db.php';
if(isset($_POST['submit']))
{	 
	 $todo = $_POST['todo'];
	 $importance = $_POST['importance'];
	 $deadline = $_POST['deadline'];
	 $sql = "INSERT INTO kr_todos (todo, importance, deadline)
	 VALUES ('$todo','$importance','$deadline')";
	 if (!$conn -> query($sql)) {
		echo("Error description: " . $conn -> error);
	  } else {
		  echo "<br>" . "U have a new todo!!";
	  }
	 
}
?>
<br>

<?php $query =  "SELECT * FROM kr_todos"; 
$result = mysqli_query($conn, $query);
?>

<?php
	if(isset($_POST['submitDeleteBtn'])){
		$key = $_POST['keyToDelete'];

		$check = mysqli_query($conn, "SELECT * FROM kr_todos WHERE todo = '$key' ");
		if(mysqli_num_rows($check) > 0){
			//hittade och radera
			$queryDelete = mysqli_query($conn, "DELETE FROM kr_todos WHERE todo = '$key' ");
			echo "Deleted";
			header("Refresh:0; url=view_list.php");

		}else {
			echo "HITTADE INGET";
		}
		
	}
	
?>


</body>
</html>