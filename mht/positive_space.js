var arrHappy = [];

var arrCompliment = [];

var arrThankful = [];

function parseArr() {
    for (var i = 0; i < jArray.length; i++) {
        arrThankful[i] = jArray[i].thankful;
        arrHappy[i] = jArray[i].happy;
        arrCompliment[i] = jArray[i].compliment;
    }
}

    function fillDiv() {
        if (
            arrHappy.length == 0 ||
            arrCompliment.length == 0 ||
            arrThankful.length == 0
        ) {
            $("#content").empty();
            $("#content").append("<h2 style='font-style:italic; margin:70px'>Seems like you don't have any contents recorded! Visit the record page on your dashboard to get your space filled with positivity</h2>")
        } else {
            for (i = 0; i < arrThankful.length; i++) {
                $("#thankfulDiv").append("<p>" + arrThankful[i] + "</p>");
            }

            for (i = 0; i < arrHappy.length; i++) {
                $("#happyDiv").append("<p>" + arrHappy[i] + "</p>");
            }

            for (i = 0; i < arrCompliment.length; i++) {
                $("#complimentDiv").append("<p>" + arrCompliment[i] + "</p>");
            }
        }
    }
    parseArr();
    fillDiv();
