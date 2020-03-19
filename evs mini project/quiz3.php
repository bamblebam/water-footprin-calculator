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

</body>
</html>
<form action="quiz4.php" method="POST">
        <h4>Number of times bath taken per day?</h4>
        <label for="q7a"></label>
        <input type="number" name="q7a" id="q7a" required>         

        <h4>Do you have a washing-machine?</h4>
        <label for="q8a1">YES semi-automatic</label>
        <input type="radio" name="q8a" value='YES_0.5' id="q8a1" required>
        <label for="q8a3">YES automatic</label>
        <input type="radio" name="q8a" value='YES' id="q8a3" required>
        <label for="q8a2">NO</label>
        <input type="radio" name="q8a" value='NO' id="q8a2">  

        <h4>Do you wash clothes at home?</h4>
        <label for="q9a1">YES</label>
        <input type="radio" name="q9a" value='YES' id="q9a1" required>
        <label for="q9a2">NO</label>
        <input type="radio" name="q9a" value='NO' id="q9a2">

        <input type="submit">
    </form>
<?php 
    $_SESSION['q4a'] = $_POST['q4a'];
    $_SESSION['q5a'] = $_POST['q5a'];
    $_SESSION['q6a'] = $_POST['q6a'];
    
?>