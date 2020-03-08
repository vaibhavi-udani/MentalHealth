<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-
Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css?family=Abel|Asap|Oxygen" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="gr-style.css">

<script>
    var bool = true;
    var element = document.getElementById("myDIV");
    function myFunction() {
      bool=!bool;
        var element = document.getElementById("myDIV");
        if (bool==true){
          element.classList.add("hidden");
        }
        else{
          element.classList.remove("hidden");
        }
    }
  </script>
  <style>
    .b1{
      padding: 20px;
      display: inline-block;
      margin: 4px 2px;
      cursor: pointer;
      border-radius: 50%;
      }
      .mystyle {
        width: 100%;
        padding: 25px;
        background-color: coral;
        color: white;
        font-size: 25px;
        box-sizing: border-box;
       
      }

      .hidden{
        display:none;
      }
</style>

</head>

<?php
    session_start(); 
    $id=$_SESSION['user_id'];

    include 'dbh.php';

    $array = array();
    $sql = "SELECT * FROM `scoreslumo` WHERE `user_id` = '".$id."' ";
    $result = mysqli_query($con, $sql) or die(mysqli_error($con));
    $i=0;
    while($row = mysqli_fetch_array($result))
    {    
       $array[$i] = $row;
       $i++;
    }
    
?>

<body>
  <button class="button b1" onclick="myFunction()"> <img src="i1.png"/></button>
<div id="myDIV" class="hidden">

<iframe
    allow="microphone;"
    width="350"
    height="430"
    src="https://console.dialogflow.com/api-client/demo/embedded/4244ee4d-c6d9-452e-90b3-4581fdd7732e">
</iframe>
       </div>
  <div class="row">
<div id="chartContainer" style="height: 500px; width: 60%"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
 
<div class="right-box">  
<button id="btn-1" class="btn btn-style" onclick="renderGraph(1)">Happy Factor</button>
  <button id="btn-2" class="btn btn-style" onclick="renderGraph(2)">Activity Level</button>
  <button id="btn-3" class="btn btn-style" onclick="renderGraph(3)">Healthiness</button>
  <button id="btn-4" class="btn btn-style" onclick="renderGraph(4)">Social Interactions</button>

<select onchange="changeMonth()" id="dropdown-month" class="dropdown dropdown-style">
  <option>January</option>
  <option>February</option>
  <option>March</option>
  <option>April</option>
  <option>May</option>
  <option>June</option>
  <option>July</option>
  <option>August</option>
  <option>September</option>
  <option>October</option>
  <option>November</option>
  <option>December</option>
</select>
  <button class="btn btn-style-bottom" onclick="window.location.href = 'positive_space.php';">Positive Thoughts</button>
  </div>
    </div>
 </body>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<script type="text/javascript">
    var jArray = <?php echo json_encode($array); ?>;
 </script>

<script src="graphscript.js"></script>

