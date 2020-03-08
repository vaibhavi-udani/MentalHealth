<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Abel|Asap|Oxygen" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="positive_space.css">
    <link href="https://fonts.googleapis.com/css?family=Cabin|Mukta|Playfair+Display" rel="stylesheet">
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
<div class="box">
   
   <?php
    session_start(); 
    $id=$_SESSION['user_id'];

    include 'dbh.php';

    $array = array();
    $sql = "SELECT * FROM `message` WHERE `user_id` = '".$id."' ";
    $result = mysqli_query($con, $sql) or die(mysqli_error($con));
    $i=0;
    while($row = mysqli_fetch_array($result))
    {    
       $array[$i] = $row;
       $i++;
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
   
    <h1>Happy Space</h1>
    <h2>Reflect on the positive thoughts</h2>
    <hr>
    <div id="content">
        <div style="color: #6491A1; font-family: 'Mukta', sans-serif;">
            <h3 style="font-style:italic">Things that I am thankful for...</h3>
            <div id="thankfulDiv"></div>

        </div>
        <hr>
        <div style="font-family: 'Playfair Display', cursive">

            <h3 style="font-style: italic">Things that have made my day better...</h3>
            <div id="happyDiv"></div>
        </div>
        <hr>

        <div style="color:#6491A1; font-family: 'Cabin', sans-serif; ">

            <h3 style="font-style: italic;">Things that I should remember...</h3>
            <div id="complimentDiv"></div>
        </div>
    </div>
</div>

<script type="text/javascript">
    var jArray = <?php echo json_encode($array); ?>;
 </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="positive_space.js"></script>
