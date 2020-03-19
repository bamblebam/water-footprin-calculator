<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="quiz3.php" method="POST">
        <h4>Number of plants?</h4>
        <label for="q4a"></label>
        <input type="number" name="q4a" id="q4a" required>       

        <h4>Number of vehicles?</h4>
        <label for="q5a"></label>
        <input type="number" name="q5a" id="q5a" required>       

        <h4>Do you have a lawn?</h4>
        <label for="q6a1">YES</label>
        <input type="radio" name="q6a" value='YES' id="q6a1" required>
        <label for="q6a2">NO</label>
        <input type="radio" name="q6a" value='NO' id="q6a2">  

        <input type="submit">
    </form>
</body>
</html>

<?php 
    $_SESSION['q1a'] = $_POST['q1a'];
    $_SESSION['q2a'] = $_POST['q2a'];
    $_SESSION['q3a'] = $_POST['q3a'];
    
?>