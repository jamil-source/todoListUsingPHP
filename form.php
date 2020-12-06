<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List formuläret</title>
</head>
<body>
    <form action="view_list.php" method="post">
        <h2>Todo<h2>
        <input type="text" name="todo" placeholder = "Task...">
        <br>
        <h2>Importance<h2>
        <input type="range" name = "importance" value="0" min="0" max="5" oninput="this.nextElementSibling.value = this.value">
        <output></output>
        <br>
        <h2>Deadline</h2>
        <select name = "deadline">
                <option value="Mon" default>Mon</option>
                <option value="Tue">Tue</option>
                <option value="Wed">Wed</option>
                <option value="Thu">Thu</option>
                <option value="Fri">Fri</option>
                <option value="Sat">Sat</option>
                <option value="Sun">Sunday</option>
        </select>
        <br>
        <button type= "submit" name= "submit">Submit</button>

    </form>
</body>
</html>