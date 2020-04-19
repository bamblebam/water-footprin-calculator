<?php
    session_start();
?>
<?php 
 
    $q6a=0;
    $q8a=0;
    
    if($_POST['q6a']=='YES'){
        $q6a=250;
    }

    if($_POST['q8a']=='YES'){
        $q8a=120;
    }
    elseif($_POST['q8a']=='YES_0.5'){
        $q8a=80;
    }
   
    $total_unchanged=($q6a+$q8a);
    $total_pop=($_POST['q1a'] +$_POST['q2a']*0.75);
    $total_outdoor=($_POST['q4a']*50 +$_POST['q2a']*0.5);
    $total_personal=($_POST['q10a']+$_POST['q7a'])*$total_pop;
    $total_misc=($_POST['q3a']*2);
    $total_litres_perday=$total_personal+$total_outdoor+$total_unchanged+$total_misc;
    $total_m3_perday=$total_litres_perday/1000;
    $total_litres_peryear=$total_litres_perday*365;
    $total_m3_peryear=$total_m3_perday*365;



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="main.css"> 
    <title>Document</title>
</head>
<body>
    <div class="jumbotron jumbotron-fluid jumbo-ctn jumbo-display">
    <div class="container">
        <h1 class="display-4 "> Thank you </h1>
        <p class="lead">Below is your water footprint</p>
    </div>
    </div>

    <div class="container-fluid main_container container_result">
       <h2 class='result'>
       <br>
            <?php
                echo $total_m3_peryear .' m^3';
            ?> 
       </h2>

    </div>

</body>
</html>

