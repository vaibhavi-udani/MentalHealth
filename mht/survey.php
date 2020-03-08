<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Abel|Asap|Oxygen" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="surveys.css">
</head>

<?php
include_once 'dbh.php';
session_start();
$id = $_SESSION['user_id'];

$sql="SELECT * FROM `scoreslumo` WHERE `date` = CURRENT_DATE AND `user_id` = ".$id;

$result = mysqli_query($con, $sql);
$resultCheck= mysqli_num_rows($result);


if($resultCheck > 0){
    echo "<script type='text/javascript'>alert('Submission for today already completed');
    window.location.href = 'option_pg.php';
    </script>";
}
?>
    <center>
        <form id="surveyForm" class="container">
            <h1>Positive Space</h1>
            <div id="discard">
                <p class="ques">
                    Write down your negative thoughts here and have them discarded
                </p>

                <textarea class="txtArea" rows="2" id="txtArea1"></textarea>
                <br/>
                <button class="btn btn-discard" onclick="discard()" type="button">Discard</button>
            </div>
            <p class="ques">
                Write down something that made you happy today
            </p>
            <textarea class="txtArea" rows="2" type="text" name="happy" id="happy-input"></textarea>
            <p class="ques">
                What is something you are thankful for?
            </p>
            <textarea class="txtArea" rows="2" type="text" name="thankful" id="thankful-input"></textarea>
            <p class="ques">
                Give yourself a compliment!
            </p>
            <textarea class="txtArea" rows="2" type="text" name="compliment" id="compliment-input"></textarea>

            <p class="ques2">How do you feel today</p>
            <ul>
                <li value=1 name="mo" onclick="recordValue(this,0)" class="clear0">Terrible</li>
                <li value=2 onclick="recordValue(this, 0)" class="clear0">Bad</li>
                <li value=3 onclick="recordValue(this,0)" class="clear0">Okay</li>
                <li value=4 onclick="recordValue(this,0)" class="clear0">Good</li>
                <li value=5 onclick="recordValue(this,0)" class="clear0">Great</li>
            </ul>

            <p class="ques">How active were you today?</p>
            <p class="rate">1 being not at all and 5 being very active</p>
            <ul>
                <li value=1 onclick="recordValue(this, 1)" class="clear1">1</li>
                <li value=2 onclick="recordValue(this, 1)" class="clear1">2</li>
                <li value=3 onclick="recordValue(this, 1)" class="clear1">3</li>
                <li value=4 onclick="recordValue(this, 1)" class="clear1">4</li>
                <li value=5 onclick="recordValue(this, 1)" class="clear1">5</li>
            </ul>
            <p class="ques">How Healthy were you today?</p>
            <p class="rate"> 1 being not at all and 5 being very healthy</p>
            <ul>
                <li value=1 onclick="recordValue(this, 2)" class="clear2">1</li>
                <li value=2 onclick="recordValue(this, 2)" class="clear2">2</li>
                <li value=3 onclick="recordValue(this, 2)" class="clear2">3</li>
                <li value=4 onclick="recordValue(this, 2)" class="clear2">4</li>
                <li value=5 onclick="recordValue(this, 2)" class="clear2">5</li>
            </ul>
            <p class="ques">Rate the quality of your social interactions</p>
            <p class="rate">1 being unrewarding and 5 being very rewarding</p>
            <ul class="choose">
                <li value=1 onclick="recordValue(this, 3)" class="clear3">1</li>
                <li value=2 onclick="recordValue(this, 3)" class="clear3">2</li>
                <li value=3 onclick="recordValue(this, 3)" class="clear3">3</li>
                <li value=4 onclick="recordValue(this, 3)" class="clear3">4</li>
                <li value=5 onclick="recordValue(this, 3)" class="clear3">5</li>
            </ul>
            <button class="btn btn-sub" type="button" onclick="submitScore()">Complete and Submit</button>
        </form>
    </center>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

    <script src="surveyscript.js"></script>
