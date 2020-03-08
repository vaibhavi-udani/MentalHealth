<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Abel|Asap|Oxygen" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="option.css">
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

include 'dbh.php';
session_start(); 
$username =$_SESSION['username'];


//get user 
$sql="SELECT * FROM userslumo WHERE username = '$username'";
$result = mysqli_query($con, $sql);

if ($row = mysqli_fetch_assoc($result)) {
  $_SESSION['user_id'] = $row['user_id'];
  $_SESSION['name'] = $row['name'];
}


?>
<button class="button b1" onclick="myFunction()"> <img src="i1.png"/></button>
<div id="myDIV" class="hidden">

<iframe
    allow="microphone;"
    width="350"
    height="430"
    src="https://console.dialogflow.com/api-client/demo/embedded/4244ee4d-c6d9-452e-90b3-4581fdd7732e">
</iframe>
       </div>

<h1 class="dash">Welcome <?php echo $_SESSION['name'] ?></h1>
<hr>
<div class="row">

    <div class="col option overlay1 option1" onclick="window.location.href = 'survey.php';">
        <h1 class="header">Record</h1>
        <hr>
        <p>Take this questionnaire to track your daily health</p>

        <div class="slide1">
        </div>
    </div>

    <div class="col option overlay2 option2">
        <div onclick="window.location.href = 'gr.php';">
            <h1 class="header" style="font-family:oxygen;">Tracker</h1>

        </div>
        <hr>
        <p style="font-family:oxygen;">Take a glance at your mental health overview</p>
        <div class="slide2">
        </div>
    </div>
</div>

<div class="row">
    <div class="col option option3" onclick="window.location.href = 'goals.php';">
        <h1 class="header" style="font-family:oxygen;">Goals</h1>
        <hr>
        <p style="font-family:oxygen;">Set goals and track your progress</p>
        <div class="slide3">
        </div>
    </div>
    <div class="col option option4">
        <h1 class="header" style="font-family:oxygen;" onclick="window.location.href = 'wellness.php';">Positivity Corner</h1>
        <hr>
        <p style="font-family:oxygen;">Get your daily dose of inspiration</p>
        <div class="slide4">
        </div>

    </div>




    <script src="login.js"></script>
