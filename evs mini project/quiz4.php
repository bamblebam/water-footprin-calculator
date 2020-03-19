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
<form action="results.php" method="POST">
        <h4>Average water consumption for drinking purposes?</h4>
        <label for="q10a"></label>
        <input type="number" name="q10a" id="q10a" required>
        <p id="output"></p>

        <h4>Average water consumption for cooking purposes?</h4>
        <label for="q11a"></label>
        <input type="number" name="q11a" id="q11a" required>
        <p id="output"></p>

        <input type="submit">
    </form>
</body>
</html>

<?php 
    $_SESSION['q7a'] = $_POST['q7a'];
    $_SESSION['q8a'] = $_POST['q8a'];
    $_SESSION['q9a'] = $_POST['q9a'];
    
?>