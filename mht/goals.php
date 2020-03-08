<head>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Abel|Asap|Oxygen" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="goal-style.css">

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

    $arrayDaily = array();
    $sql = "SELECT * FROM `dailygoals` WHERE `user_id` = '".$id."' ";
    $result = mysqli_query($con, $sql) or die(mysqli_error($con));
    $i=0;
    while($row = mysqli_fetch_array($result))
    {    
       $arrayDaily[$i] = $row;
       $i++;
    }

    $arrayShort = array();
    $sql = "SELECT * FROM `shortgoals` WHERE `user_id` = '".$id."' ";
    $result = mysqli_query($con, $sql) or die(mysqli_error($con));
    $i=0;
    while($row = mysqli_fetch_array($result))
    {    
       $arrayShort[$i] = $row;
       $i++;
    }


    $arrayLong = array();
    $sql = "SELECT * FROM `longgoals` WHERE `user_id` = '".$id."' ";
    $result = mysqli_query($con, $sql) or die(mysqli_error($con));
    $i=0;
    while($row = mysqli_fetch_array($result))
    {    
       $arrayLong[$i] = $row;
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
    <h1>Goals</h1>
    <hr>
    <div class="row">
        <div id="daily-goals" class="col-sm">
            <div class="inner" id="inner-DG">
                <div id="non-ed-DG">
                    <h2>Daily Goals</h2>
                    <hr>
                    <form id="dg-list-reg">

                    </form>
                    <button class="btn btn-circ-1" onclick="editDG(1)"><img src="https://img.icons8.com/ios/50/ffffff/edit.png" style="height: 20px" onclick="edit(1)"></button>
                </div>

                <div id="dailyEdit" style="display: none">
                    <h2>Daily Goals</h2>
                    <hr>
                    <input id="newDailyGoal" placeholder="Add new goal" />
                    <button class="add-btn" id="dg-add-btn" onclick="addDG()">+</button>
                    <div id="dg-list">
                    </div>
                    <button class="btn btn-circ-1" onclick="exPg(1)">
  <img src="https://img.icons8.com/metro/50/ffffff/exit.png" style="height:20px;">
          </button>
                </div>
            </div>
        </div>
        <div id="st-goals" class="col-sm" id="inner-ST">
            <div class="inner">
                <div id="non-ed-ST">
                    <h2>Short Term Goals</h2>
                    <hr>
                    <div id="st-list-reg"></div>
                    <button class="btn btn-circ-2"><img src="https://img.icons8.com/ios/50/ffffff/edit.png" style="height: 20px" onclick="edit(2)"></button>
                </div>
                <div id="shortEdit" style="display: none">
                    <h2>Short Term Goals</h2>
                    <hr>
                    <input id="newShortGoal" placeholder="Add new goal" />
                    <input id="newShortDate" placeholder="Enter Due Date" type="date" />
                    <button class="add-btn" id="st-add-btn" onclick="addStGoal()">✓</button>
                    <div id="st-list">

                    </div>
                    <button class="btn btn-circ-2" onclick="exPg(2)">
  <img src="https://img.icons8.com/metro/50/ffffff/exit.png" style="height:20px;">
          </button>
                </div>
            </div>
        </div>
        <div id="lt-goals" class="col-sm">
            <div class="inner" id="inner-LT">
                <div id="non-ed-LT">
                    <h2>Long Term Goals</h2>
                    <hr>
                    <ul id="lt-list-reg">
                        <li>
                            Get Stronger
                        </li>
                        <li>
                            love more
                        </li>
                        <li>
                            treat myself the way I deserve
                        </li>
                    </ul>

                    <button class="btn btn-circ-3"><img src="https://img.icons8.com/ios/50/ffffff/edit.png" style="height: 20px" onclick="edit(3)"></button>
                </div>

                <div id="longEdit" style="display:none;">
                    <h2>Long Term Goals</h2>
                    <hr>
                    <input id="newLongGoal" placeholder="Add new goal" />
                    <button class="add-btn" onclick="addLtGoal()">+</button>
                    <div id="lt-list">
                    </div>
                    <button class="btn btn-circ-3" onclick="exPg(3)">
  <img src="https://img.icons8.com/metro/50/ffffff/exit.png" style="height:20px;">
          </button>
                </div>
            </div>
        </div>
    </div>

</body>
<script type="text/javascript">
    var dgArray = <?php echo json_encode($arrayDaily); ?>;
    var stArray = <?php echo json_encode($arrayShort); ?>;
    var ltArray = <?php echo json_encode($arrayLong); ?>;
 </script>
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="goalscr.js"></script>
