var mood = 0;
var active = 0;
var social = 0;
var health = 0;

var happy;
var thankful;
var compliment;

function discard() {
    document.getElementById("txtArea1").style.textDecoration = 'line-through';
    document.getElementById("discard").style.opacity = '0';
    setTimeout(function () {
        document.getElementById("discard").style.display = 'none';
    }, 2500);

}

function recordValue(elem, classi) {
    var li = document.getElementsByClassName("clear" + classi);
    for (i = 0; i < li.length; i++) {
        li[i].style.border = 'none';
    }
    var value = elem.value;
    elem.style.border = '2px solid #25c3db';

    switch (classi) {
        case 0:
            mood = elem.value;
            break;
        case 1:
            active = elem.value;
            break;
        case 2:
            health = elem.value;
            break;
        case 3:
            social = elem.value;
            break;
    }
}

function submitScore() {

    happy = document.getElementById("happy-input").value;
    thankful = document.getElementById("thankful-input").value;

    compliment = document.getElementById("compliment-input").value;
    

    if (mood == 0 || active == 0 || social == 0 || health == 0 || happy == "" || thankful == "" || compliment == "") {
        alert('please fill out all fields :)');
        return;
    } else {
        
        $.ajax({
            url: 'submitScores.php',
            data: {
                'mood': mood,
                'active': active,
                'health': health,
                'social': social,
                'compliment': compliment,
                'thankful':thankful,
                'happy': happy
            },
            type: 'post',
            dataType: 'text',
            success: function (output) {
                window.location.href = 'option_pg.php'
            },
            error: function (request, status, error) {}

        });


    }
}
