<?php
include('complete.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
	<tr>
		<th>Todo</th>
		<th>Importance</th>
		<th>Deadline</th>
		<th colspan="2">Select/Delete</th>
		<th>Edit</th>

	</tr>
	<?php
	while($row = mysqli_fetch_assoc($result)) {?>
	<tr>
		<form  method="POST" role= "form">
			<td><?php echo $row['todo'] ?></td>
			<td><?php echo $row['importance'] ?></td>
			<td><?php echo $row['deadline'] ?></td>
			<td>
				<input type="checkbox" name="keyToDelete" value="<?php echo $row['todo'];?>" required> 
			</td>
			<td>
				<input type ="submit" name = "submitDeleteBtn" value="Delete">
			</td>
			<td>
			    <a href ="update.php?updateTodo=<?php echo $row['todo'] ?>&updateImportance=<?php echo $row['importance'] ?>&updateDeadline=<?php echo $row['deadline'] ?>">Edit</a>
			</td>
		</form>
	</tr>
	<?php }?>
</table>
</body>
</html>
