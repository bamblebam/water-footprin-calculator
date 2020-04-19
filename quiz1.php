<?php 
    session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="main.css">    
<title>Document</title>
</head>
<body>
        
<form action="results.php" method="POST">
    <div class="container-fluid main_container container_1">
        <div class='form-group'>
            <label for="q1a"><h4>Number of adults?</h4></label>
            <input class='form-control' type="number" name="q1a" id="q1a" required>
        </div>  
        <div class='form-group'>                    
            <label for="q2a"><h4>Number of children?</h4></label>
            <input class='form-control' type="number" name="q2a" id="q2a" required>
        </div>  
        <div class='form-group'>                    
            <label for="q3a"><h4>Number of rooms in your house?</h4></label>
            <input class='form-control' type="number" name="q3a" id="q3a" required>
        </div>       
            
            <br>
    </div>

    <div class="container-fluid container_2 main_container">
        <br>
        <br>
        <div class='form-group'>
            <label for="q4a"><h4>Number of plants?</h4></label>
            <input class='form-control' type="number" name="q4a" id="q4a" required>  
        </div>  
        <div class='form-group'>                         
            <label for="q5a"><h4>Number of vehicles?</h4></label>
            <input class='form-control' type="number" name="q5a" id="q5a" required>
        </div>  
        <div class='form-group'>                    
            <h4>Do you have a lawn?</h4>
            <label for="q6a1">YES</label>
            <input type="radio" name="q6a" value='YES' id="q6a1" required>
            <label for="q6a2">NO</label>
            <input type="radio" name="q6a" value='NO' id="q6a2">
        </div>       
            
    </div>

    <div class="container-fluid main_container container_3">
        <div class='form-group'>
            <label for="q7a"><h4>Number of times bath taken per day?</h4></label>
            <input class='form-control' type="number" name="q7a" id="q7a" required>     
        </div>  
        <div class='form-group'>                    
            <h4>Do you have a washing-machine?</h4>
            <label for="q8a1">YES semi-automatic</label>
            <input type="radio" name="q8a" value='YES_0.5' id="q8a1" required>
            <label for="q8a3">YES automatic</label>
            <input type="radio" name="q8a" value='YES' id="q8a3" required>
            <label for="q8a2">NO</label>
            <input type="radio" name="q8a" value='NO' id="q8a2">  
        </div>  
        <div class='form-group'>                    
            <h4>Do you wash clothes at home?</h4>
            <label for="q9a1">YES</label>
            <input type="radio" name="q9a" value='YES' id="q9a1" required>
            <label for="q9a2">NO</label>
            <input type="radio" name="q9a" value='NO' id="q9a2">
        </div>       
    </div>

    <div class="container-fluid main_container container_4">
    <br>
    <br>
        <div class='form-group'>
            <label for="q10a"><h4>Average water consumption for drinking purposes?</h4></label>
            <input class='form-control' type="number" name="q10a" id="q10a" required>
        </div>  
        <div class='form-group'>                        
            <label for="q11a"><h4>Average water consumption for cooking purposes?</h4></label>
            <input class='form-control' type="number" name="q11a" id="q11a" required>
        </div>        
    </div>

    <div class='btn-container'>
        <input class='btn btn-info btn-sm btn-block' type="submit">     
    </div>
</form>               
        
</body>
</html>