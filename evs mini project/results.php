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

<?php 
    $_SESSION['q10a'] = $_POST['q10a'];
    $_SESSION['q11a'] = $_POST['q11a'];
    $q6a=0;
    $q8a=0;
    
    if($_SESSION['q6a']=='YES'){
        $q6a=250;
    }

    if($_SESSION['q8a']=='YES'){
        $q8a=120;
    }
    elseif($_SESSION['q8a']=='YES_0.5'){
        $q8a=80;
    }
    
    $total_unchanged=($q6a+$q8a);
    $total_pop=($_SESSION['q1a'] +$_SESSION['q2a']*0.75);
    $total_outdoor=($_SESSION['q4a']*50 +$_SESSION['q2a']*0.5);
    $total_personal=($_SESSION['q10a']+$_SESSION['q7a'])*$total_pop;
    $total_misc=($_SESSION['q3a']*2);
    $total_litres_perday=$total_personal+$total_outdoor+$total_unchanged+$total_misc;
    $total_m3_perday=$total_litres_perday/1000;
    $total_litres_peryear=$total_litres_perday*365;
    $total_m3_peryear=$total_m3_perday*365;
    echo $total_m3_peryear;


?>