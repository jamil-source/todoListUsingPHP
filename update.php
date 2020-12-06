<?php
include ('complete.php');
include ('db.php');
error_reporting(0);




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List formuläret</title>
</head>
<body>
    <form action="" method="GET">
        <h2>Todo<h2>
        <input type="text" name="todo" value= "<?php echo $_GET['updateTodo']?>" readonly>
        <br>
        <h2>Importance<h2>
        <input type="range" name = "importance" value="<?php echo $_GET['updateImportance']?>"  min="0" max="5" oninput="this.nextElementSibling.value = this.value">
        <output></output>
        <br>
        <h2>Deadline</h2>
        <select name = "deadline" value="<?php echo $_GET['updateDeadline'];?>">
                <option>Mon</option>
                <option>Tue</option>
                <option>Wed</option>
                <option>Thu</option>
                <option>Fri</option>
                <option>Sat</option>
                <option>Sun</option>
        </select>
        <br>
        <button type= "submit" name= "update">Update</button>

    </form>
</body>
</html>
<?php
if(isset($_GET['update']))
{
    $get_todo = $_GET['todo'];
    $get_importance = $_GET['importance'];
    $get_deadline = $_GET['deadline'];
    $query_update = "UPDATE kr_todos SET todo='$get_todo', importance='$get_importance', deadline='$get_deadline' WHERE todo='$get_todo' ";
    $result_update = mysqli_query($conn, $query_update);

    if($result_update)
    {
        echo "UPDATED!!";
        header("Refresh:0; url=view_list.php");
    } else
    {
        echo "FAILED TO UPDATE";
    }
}
?>