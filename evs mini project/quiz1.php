<?php 
    session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="quiz2.php" method="POST">
        <h4>Number of adults?</h4>
        <label for="q1a"></label>
        <input type="number" name="q1a" id="q1a" required>       

        <h4>Number of children?</h4>
        <label for="q2a"></label>
        <input type="number" name="q2a" id="q2a" required>       

        <h4>Number of rooms in your house?</h4>
        <label for="q3a"></label>
        <input type="number" name="q3a" id="q3a" required>

        <input type="submit">
    </form>
</body>
</html>