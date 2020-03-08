var dgCount = 0;
var ltCount = 0;
var stCount = 0;

var dgGoals = [];
var ltGoals = [];
var stGoals = [];
var stDates = [];

parseArray();

renderDGReg();
renderSTReg();
renderLTReg();




function parseArray() {

    for (i = 0; i < dgArray.length; i++) {
        var today = new Date();
        var mm = today.getMonth() + 1;
        var yyyy = today.getFullYear();
        var dd = today.getDate();
        var todayFormat = yyyy + "-" + mm + "-" + dd;
    
        if (todayFormat!=dgArray[i].date) {
            dgGoals[i] = dgArray[i].daily_goal;
            dgCount++;
        }
    }

    for (i = 0; i < stArray.length; i++) {
        stGoals[i] = stArray[i].short_goal;
        stDates[i] = stArray[i].date;
        stCount++;
    }
    for (i = 0; i < ltArray.length; i++) {
        ltGoals[i] = ltArray[i].long_goals;
        ltCount++;
    }

}

function addDG() {
    if (!$("#newDailyGoal").val()) {
        alert("Input can not be blank");
        return;
    } else {
        var goal = document.getElementById("newDailyGoal").value;
        dgGoals.push(goal);

        $("#dg-list").append(
            "<div class='row'><button class='delete' onclick='deleteDG(this)' value=" +
            dgCount +
            ">x</button><h3>" +
            goal +
            "</h3></div>"
        );
        dgCount++;
    }
}

function addStGoal() {
    if (!$("#newShortGoal").val() || !$("#newShortDate").val()) {
        alert("Inputs can not be blank");
        return;
    } else {
        var goal = document.getElementById("newShortGoal").value;
        var date = document.getElementById("newShortDate").value;

        stGoals.push(goal);
        stDates.push(date);

        $("#st-list").append(
            "<div class='row'><button class='delete' onclick='deleteST(this)' values=" +
            stCount +
            ">x</button> <h3>" +
            goal +
            "<br> </h3> <div class='due-date'>Due: " +
            date +
            "</div></div>"
        );
        stCount++;
    }
}

function addLtGoal() {
    if (!$("#newLongGoal").val()) {
        alert("Input can not be blank");
        return;
    } else {
        var goal = document.getElementById("newLongGoal").value;
        ltGoals.push(goal);
        $("#lt-list").append(
            "<div class='row'><button class='delete' onclick='deleteLT(this)' value=" +
            ltCount +
            ">x</button><h3>" +
            goal +
            "</h3></div>"
        );
        ltCount++;
    }
}

function deleteDG(elem) {
    dgGoals.splice(elem.value, 1);
    renderDG();
}

function deleteST(elem) {
    stGoals.splice(elem.value, 1);
    stDates.splice(elem.value, 1);
    renderST();
}

function deleteLT(elem) {
    ltGoals.splice(elem.value, 1);
    renderLT();
}

function renderDG() {
    $("#dg-list").empty();
    dgCount = 0;
    for (i = 0; i < dgGoals.length; i++) {
        $("#dg-list").append(
            "<div class='row'><button class='delete' onclick='deleteDG(this)' value=" +
            dgCount +
            ">x</button><h3>" +
            dgGoals[i] +
            "</h3></div>"
        );
        dgCount++;
    }
}

function renderST() {
    $("#st-list").empty();
    stCount = 0;
    for (i = 0; i < stGoals.length; i++) {
        $("#st-list").append(
            "<div class='row'><button class='delete' onclick='deleteST(this)' values=" +
            stCount +
            ">x</button> <h3>" +
            stGoals[i] +
            "<br> </h3> <div class='due-date'>Due: " +
            stDates[i] +
            "</div></div>"
        );
        stCount++;
    }
}

function renderLT() {
    $("#lt-list").empty();
    ltCount = 0;
    for (i = 0; i < ltGoals.length; i++) {
        $("#lt-list").append(
            "<div class='row'><button class='delete' onclick='deleteLT(this)' value=" +
            ltCount +
            ">x</button><h3>" +
            ltGoals[i] +
            "</h3></div>"
        );
        ltCount++;
    }
}

function edit(pg) {
    switch (pg) {
        case 1:
            renderDG();
            document.getElementById("non-ed-DG").style.display = "none";
            document.getElementById("dailyEdit").style.display = "block";
            break;
        case 2:
            renderST();
            document.getElementById("non-ed-ST").style.display = "none";
            document.getElementById("shortEdit").style.display = "block";
            break;
        case 3:
            renderLT();
            document.getElementById("non-ed-LT").style.display = "none";
            document.getElementById("longEdit").style.display = "block";
            break;
    }
}


function exPg(pg) {

    switch (pg) {
        case 1:
            submitDG();
            document.getElementById("non-ed-DG").style.display = "block";
            document.getElementById("dailyEdit").style.display = "none";
            renderDGReg();
            break;
        case 2:
            submitST();
            document.getElementById("non-ed-ST").style.display = "block";
            document.getElementById("shortEdit").style.display = "none";
            renderSTReg();
            break;
        case 3:
            submitLT();
            document.getElementById("non-ed-LT").style.display = "block";
            document.getElementById("longEdit").style.display = "none";
            renderLTReg();
            break;
    }
}


function renderDGReg() {
    $("#dg-list-reg").empty();
    for (i = 0; i < dgGoals.length; i++) {
        $("#dg-list-reg").append("<div class='row'><input type='checkbox' class='checkbox' value=" + i + " onchange='completeDG(this)'/><label>" + dgGoals[i] + "</label></div>");
    }
}

function renderSTReg() {
    $("#st-list-reg").empty();
    for (i = 0; i < stGoals.length; i++) {
        $("#st-list-reg").append("<div class='row'><button class='checkmark' value=" + i + " onclick='completeST(this)'>✓</button><h3 class='col-sm-8'>"+ stGoals[i] +"</h3></div><br><p>Due: " + stDates[i] + "</p><br>");
        

    }
}

function renderLTReg() {
    $("#lt-list-reg").empty();
    for (i = 0; i < ltGoals.length; i++) {
        $("#lt-list-reg").append("<li>" + ltGoals[i] + "</li>");
    }
}


function updateDG(goalx) {

    $.ajax({
        url: 'updateDG.php',
        data: {
            goal: goalx
        },
        type: 'post',
        dataType: 'text',
        success: function (output) {

        },
        error: function (request, status, error) {}

    });

}

function submitDG() {
    $.ajax({
        url: 'submitDaG.php',
        data: {
            'dgGoals': dgGoals
        },
        type: 'post',
        dataType: 'text',
        success: function (output) {},
        error: function (request, status, error) {}

    });

}

function submitST() {
    $.ajax({
        url: 'submitST.php',
        data: {
            'stGoals': stGoals,
            'stDates': stDates
        },
        type: 'post',
        dataType: 'text',
        success: function (output) {

        },
        error: function (request, status, error) {}

    });

}

function submitLT() {
    $.ajax({
        url: 'submitLT.php',
        data: {
            'ltGoals': ltGoals
        },
        type: 'post',
        dataType: 'text',
        success: function (output) {

        },
        error: function (request, status, error) {}

    });
}

function completeDG(elem) {
    var r = confirm("Completed this daily goal?");
    if (r) {
        updateDG(dgGoals[elem.value]);
        dgGoals.splice(elem.value, 1);
        renderDGReg();

    }
}

function completeST(elem) {
    var r = confirm("Completed this short term goal?");
    if (r) {
        deleteST(elem);
        submitST();
        renderSTReg();
    }
}
